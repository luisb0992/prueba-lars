<?php

namespace App\Http\Controllers;

use App\Events\NewOrderNotificationEvent;
use App\Http\Requests\CreateOrderRequest;
use App\Models\Order;
use App\Models\Product;
use App\Utils\OrderStatus;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    /**
     * Devuelve la vista principal de las ordenes
     *
     * @return Inertia\Response
     */
    public function index(): Response
    {
        // cargar los productos de cada orden
        $orders = Order::with('products')->get();

        return Inertia::render('Orders/Index', [
            'orders' => $orders,
        ]);
    }

    /**
     * Devuelve la vista de creación de una nueva orden.
     *
     * @return Inertia\Response
     */
    public function create(): Response
    {
        return Inertia::render('Orders/Create', [
            'products' => Product::withStock(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateOrderRequest $request)
    {

        // datos de la orden
        $data = [
            'order_number' => rand(1, 1000),
            'tax' => Order::TAX,
            'total' => $request->total,
            'comment' => $request->comment,
            'status' => OrderStatus::COMPLETED,
        ];

        // seleccionar los ids de los productos
        $ids = collect($request->products)->pluck('id');

        // cantidad de productos comprados
        $quantities = collect($request->products)->pluck('quantity');

        $order = DB::transaction(function () use ($ids, $quantities, $data) {

            // crear la orden
            $order = Auth::user()->orders()->create($data);

            // relacionar los productos y la orden, y asignar la cantidad correspondiente a cada producto
            foreach ($ids as $key => $id) {
                $order->products()->attach($id, [
                    'quantity' => $quantities[$key],
                ]);
            }

            // una vez creada descontar del stock de productos que se compraron
            foreach ($ids as $key => $id) {
                $product = Product::find($id);
                $product->updateStock($quantities[$key]);
            }

            return $order;
        });

        if (!$order) {
            return response()->json([
                'message' => 'Error al crear la orden',
            ], 500);
        }

        // notificar al usuario
        event(new NewOrderNotificationEvent($order));

        return redirect()->route('orders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Elimina una orden
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Order $order): JsonResponse
    {

        // actualizar el status de la orden
        $order->update([
            'status' => OrderStatus::CANCELED,
        ]);

        // actualizar las cantidad de productos en stock
        foreach ($order->products as $product) {
            $product->giveBackStock($product->pivot->quantity);
        }

        // eliminar la orden
        $order->delete();

        return response()->json([
            'message' => 'Orden eliminada correctamente',
        ]);
    }

    /**
     * Genera una factura en PDF
     *
     * @param Order $order
     * @return HttpResponse
     */
    public function downloadPDF(Order $order)
    {
        $pdf = PDF::loadView('orders.pdf.order', [
            'order' => $order,
        ]);

        return $pdf->stream('order.pdf');
    }
}
