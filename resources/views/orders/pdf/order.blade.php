@extends('orders.layouts.main')

@section('content')
    <div class="bg-white">
        <div class="sm:flex sm:items-start">
            <div class="mt-3 text-center">
                <h3 class="text-lg leading-6 font-medium text-gray-900 py-2 border-y" id="modal-title">
                    Datos de la orden
                </h3>
                <div class="mt-2">
                    <p class="text-sm text-gray-500">
                        Orden Nº {{ $order->order_number }}
                    </p>
                    <p class="text-sm text-gray-500">
                        Impuesto {{ $order->tax }}
                    </p>
                    <p class="text-sm text-gray-500">
                        Total + impuesto {{ $order->currency }}
                        {{ $order->total }}
                    </p>
                    <p class="text-sm text-gray-500 mb-1">
                        Comentario {{ $order->comment }}
                    </p>
                    <div class="text-sm text-gray-500 mt-4">
                        <h3 class="leading-6 font-medium text-gray-900 py-2 border-y mb-2">
                            Productos agregados
                        </h3>
                        <ul>
                            @foreach ($order->products as $product)
                                <li>
                                    {{ $product->name }} |
                                    cantidad ({{ $product->pivot->quantity }}) |
                                    <span class="text-blue-500">
                                        {{ $product->currency }} {{ $product->price }}
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
