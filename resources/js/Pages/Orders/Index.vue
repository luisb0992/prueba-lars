<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head, usePage, Link } from "@inertiajs/inertia-vue3";
import { reactive } from "vue";
import Toast from "@/Components/custom/Toast.vue";
import Modal from "@/Components/custom/Modal.vue";

const { orders } = defineProps({
    orders: {
        type: Array,
        default: () => [],
    },
});

// config del toast
const toast = reactive({
    message: "",
    bg: "bg-gray-100",
    icon: "check",
    show: false,
});

// orden seleccionada
const order = reactive({
    data: {},
    show: false,
});

// eliminar una orden
const deleteOrder = (id) => {
    axios
        .delete(route("orders.destroy", id))
        .then((response) => {
            // mostrar el toast
            toast.message = response.data.message;
            toast.show = true;

            // eliminar la orden del array de ordenes
            const index = orders.findIndex((order) => order.id === id);
            orders.splice(index, 1);
        })
        .catch((error) => {
            console.log("No se pudo eliminar la orden: " + error);
        });
};

// mostrar la orden en un modal
const showOrder = (id) => {
    const selectedOrder = orders.find((order) => order.id === id);

    // mostrar el modal
    order.show = true;
    order.data = selectedOrder;
};
</script>

<template>
    <Head title="Ordenes" />
    <Toast
        :message="toast.message"
        :bg="toast.bg"
        :icon="toast.icon"
        :show="toast.show"
        @close-toast="toast.show = false"
    />
    <Modal
        :data="order.data"
        :showConfirm="order.show"
        @close-modal="order.show = false"
    />

    <BreezeAuthenticatedLayout>
        <div class="py-12">
            <div class="container mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div
                            class="flex items-center justify-between flex-wrap sm:flex-no-wrap mb-4"
                        >
                            <div class="mt-2">
                                <h3
                                    class="text-lg leading-6 font-medium text-gray-900"
                                >
                                    Ordenes
                                </h3>
                                <p class="mt-1 text-sm leading-5 text-gray-500">
                                    Lista de todas las ordenes
                                </p>
                            </div>
                            <div class="mt-2">
                                <button
                                    class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"
                                >
                                    <Link :href="route('orders.create')">
                                        Nueva orden
                                    </Link>
                                </button>
                            </div>
                        </div>
                        <hr />

                        <!-- tabla de ordenes -->
                        <div
                            class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4"
                        >
                            <table class="w-full text-sm text-left">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50"
                                >
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Orden Nº
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Impuesto
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Total
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Comentario
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Estado
                                        </th>
                                        <th scope="col" class="px-6 py-3"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        class="bg-white border-b hover:bg-gray-50 text-gray-900"
                                        v-for="order in orders"
                                        :key="order.id"
                                    >
                                        <td class="px-6 py-4 font-medium">
                                            <button
                                                @click="showOrder(order.id)"
                                                class="text-blue-500 hover:text-blue-600"
                                            >
                                                {{ order.order_number }}
                                            </button>
                                        </td>
                                        <td class="px-6 py-4 font-medium">
                                            {{ order.tax }}
                                        </td>
                                        <td class="px-6 py-4 font-medium">
                                            {{ order.currency }}
                                            {{ order.total }}
                                        </td>
                                        <td class="px-6 py-4 font-medium">
                                            {{ order.comment }}
                                        </td>
                                        <td
                                            class="px-6 py-4 font-medium inline-flex items-center"
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6 text-green-500"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                v-show="order.status === 1"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M5 13l4 4L19 7"
                                                />
                                            </svg>
                                            {{ order.status_label }}
                                        </td>
                                        <td
                                            class="px-6 py-4 inline-flex items-center gap-2 justify-end"
                                        >
                                            <button
                                                class="flex mx-auto text-white bg-yellow-500 border-0 py-1 px-2 focus:outline-none hover:bg-yellow-600 rounded text-sm"
                                            >
                                                <Link
                                                    :href="
                                                        route(
                                                            'orders.edit',
                                                            order.id
                                                        )
                                                    "
                                                >
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="h-6 w-6"
                                                        fill="none"
                                                        viewBox="0 0 24 24"
                                                        stroke="currentColor"
                                                        stroke-width="2"
                                                    >
                                                        <path
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"
                                                        />
                                                    </svg>
                                                </Link>
                                            </button>
                                            <button
                                                class="flex mx-auto text-white bg-red-500 border-0 py-1 px-2 focus:outline-none hover:bg-red-600 rounded text-sm"
                                                @click="deleteOrder(order.id)"
                                            >
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="h-6 w-6"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                                    />
                                                </svg>
                                            </button>
                                            <button
                                                class="flex mx-auto text-white bg-blue-500 border-0 py-1 px-2 focus:outline-none hover:bg-blue-600 rounded text-sm"
                                            >
                                                <a
                                                    :href="
                                                        route(
                                                            'orders.pdf',
                                                            order.id
                                                        )
                                                    "
                                                    target="_blank"
                                                >
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="h-6 w-6"
                                                        fill="none"
                                                        viewBox="0 0 24 24"
                                                        stroke="currentColor"
                                                        stroke-width="2"
                                                    >
                                                        <path
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"
                                                        />
                                                    </svg>
                                                </a>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr v-if="!orders.length">
                                        <td colspan="7">
                                            <div class="text-center py-12">
                                                <h1 class="text-3xl font-bold">
                                                    No hay pedidos
                                                </h1>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /tabla de ordenes -->
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
