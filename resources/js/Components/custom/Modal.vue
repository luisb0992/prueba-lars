<script setup>
const { data, showConfirm } = defineProps({
    data: {
        type: Object,
        default: () => [],
    },
    showConfirm: {
        default: false,
        type: Boolean,
    },
});
</script>
<template>
    <div
        class="fixed inset-0 -top-10 z-50 animate-fade-in-down"
        aria-labelledby="modal-title"
        role="dialog"
        aria-modal="true"
        v-show="showConfirm"
    >
        <div
            class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"
        >
            <div
                class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                aria-hidden="true"
            ></div>

            <span
                class="hidden sm:inline-block sm:align-middle sm:h-screen"
                aria-hidden="true"
            >
                &#8203;
            </span>
            <div
                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            >
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left"
                        >
                            <h3
                                class="text-lg leading-6 font-medium text-gray-900 py-2 border-y"
                                id="modal-title"
                            >
                                Datos de la orden
                            </h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">
                                    Orden Nº {{ data.order_number }}
                                </p>
                                <p class="text-sm text-gray-500">
                                    Impuesto {{ data.tax }}
                                </p>
                                <p class="text-sm text-gray-500">
                                    Total + impuesto {{ data.currency }}
                                    {{ data.total }}
                                </p>
                                <p class="text-sm text-gray-500 mb-1">
                                    Comentario {{ data.comment }}
                                </p>
                                <div class="text-sm text-gray-500 mt-4">
                                    <h3
                                        class="leading-6 font-medium text-gray-900 py-2 border-y mb-2"
                                    >
                                        Productos agregados
                                    </h3>
                                    <ul>
                                        <li
                                            v-for="(
                                                item, index
                                            ) in data.products"
                                            :key="item.id"
                                        >
                                            {{ index + 1 }} - {{ item.name }} |
                                            <span>Cantidad ({{ item.pivot.quantity }})</span>
                                            |
                                            <span class="text-blue-500">
                                                {{ item.currency }}
                                                {{ item.price }}
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse"
                >
                    <button
                        type="button"
                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm"
                        @click="$emit('close-modal')"
                    >
                        cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
