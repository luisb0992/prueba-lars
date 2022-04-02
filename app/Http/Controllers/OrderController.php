<?php

namespace App\Http\Controllers;

use App\Events\NewOrderNotificationEvent;
use App\Http\Requests\CreateOrderRequest;
use App\Models\Order;
use App\Models\Product;
use App\Utils\OrderStatus;
use Illuminate\Http\Request;
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
        return Inertia::render('Orders/Index', [
            'orders' => Order::all(),
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
        $tax = 16;

        $data = [
            'order_number' => rand(1, 1000),
            'tax' => $tax,
            'total' => $request->total,
            'comment' => $request->comment,
            'status' => OrderStatus::COMPLETED,
        ];

        $order = DB::transaction(function () use ($request, $data) {

            // seleccionar los ids de los productos
            $ids = collect($request->products)->pluck('id');

            // cantidad de productos comprados
            $quantities = collect($request->products)->pluck('quantity');

            // crear la orden
            $order = Auth::user()->orders()->create($data);

            // relacionar los productos y la orden
            $order->products()->attach($ids);

            // una vez creada descontar del stock de productos que se compraron
            foreach ($ids as $key => $id) {
                $product = Product::find($id);
                $product->updateStock($quantities[$key]);
            }

            return $order;
        });

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
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
