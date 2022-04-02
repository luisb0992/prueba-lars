<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head, usePage, Link } from "@inertiajs/inertia-vue3";
import { computed } from "vue";
</script>

<template>
    <Head title="Ordenes" />

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
                            <table
                                class="w-full text-sm text-left text-gray-50"
                            >
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50"
                                >
                                    <tr>
                                        <th scope="col" class="p-4">
                                            <div class="flex items-center">
                                                <input
                                                    id="checkbox-all"
                                                    type="checkbox"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2"
                                                />
                                                <label
                                                    for="checkbox-all"
                                                    class="sr-only"
                                                    >checkbox</label
                                                >
                                            </div>
                                        </th>
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
                                        <th scope="col" class="px-6 py-3">
                                            <span class="sr-only">
                                                Acciones
                                            </span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        class="bg-white border-b hover:bg-gray-50"
                                    >
                                        <td class="w-4 p-4">
                                            <div class="flex items-center">
                                                <input
                                                    id="checkbox-table-1"
                                                    type="checkbox"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2"
                                                />
                                                <label
                                                    for="checkbox-table-1"
                                                    class="sr-only"
                                                >
                                                    checkbox
                                                </label>
                                            </div>
                                        </td>
                                        <td
                                            scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
                                        >
                                            Apple MacBook Pro 17"
                                        </td>
                                        <td class="px-6 py-4">12%</td>
                                        <td class="px-6 py-4">1500,20</td>
                                        <td class="px-6 py-4">Buen servicio</td>
                                        <td class="px-6 py-4">Activo</td>
                                        <td class="px-6 py-4 text-right">
                                            <Link
                                                :href="route('orders.create')"
                                            >
                                                Editar
                                            </Link>
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
