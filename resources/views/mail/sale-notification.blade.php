@extends('mail.layouts.main')

@section('content')
    <h3 class="text-2xl">¡{{ __('Nueva orden registrada') }}!</h3>
    <div class="flex justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 text-green-400" viewBox="0 0 24 24" stroke="currentColor"
            fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
            <rect x="9" y="3" width="6" height="4" rx="2" />
            <path d="M14 11h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />
            <path d="M12 17v1m0 -8v1" />
        </svg>
    </div>

    <div class="flex justify-center mt-4">
      <ul
          class="w-auto text-sm font-medium text-gray-900 bg-white rounded-lg border">
          <li class="py-2 px-4 w-full border-b border-gray-600">
            <span class="font-bold tracking-wider ml-r">{{ __('Numero') }}</span>
            <span>{{ $order->order_number }}</span>
          </li>
          <li class="py-2 px-4 w-full border-b border-gray-600">
            <span class="font-bold tracking-wider ml-r">{{ __('Impuesto') }}</span>
            <span>{{ $order->tax }}</span>
          </li>
          <li class="py-2 px-4 w-full border-b border-gray-600">
            <span class="font-bold tracking-wider ml-r">{{ __('Total') }} + {{ __('Impuesto') }}</span>
            <span>{{ $order->total }}</span>
          </li>
          <li class="py-2 px-4 w-full border-b border-gray-600">
            <span class="font-bold tracking-wider ml-r">{{ __('Comentario') }}</span>
            <span>{{ $order->comment }}</span>
          </li>
      </ul>
    </div>
@endsection
