<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head, usePage, Link, useForm } from "@inertiajs/inertia-vue3";
import { computed, reactive } from "vue";
import Toast from "@/Components/custom/Toast.vue";

defineProps({
    products: {
        type: Array,
        default: () => [],
    },
});

// impuesto de venta
const TAX = 1.16;

// agregar productos al array
const increment = (product) => {
    const index = form.products.findIndex((p) => p.id === product.id);
    const stock = product.quantity;

    // verificar si se puede agregar mas productos
    // dependiendo de la cantidad disponible
    if (stock > 0) {
        if (index === -1) {
            form.products.push({
                id: product.id,
                quantity: 1,
                price: product.price,
                name: product.name,
            });
        } else {
            form.products[index].quantity++;
        }

        product.quantity = stock - 1;
    }
};

// eliminar producto del array
const decrement = (product) => {
    const index = form.products.findIndex((p) => p.id === product.id);
    const stock = product.quantity;

    if (index !== -1) {
        form.products[index].quantity--;
        if (form.products[index].quantity === 0) {
            form.products.splice(index, 1);
        }
        product.quantity = stock + 1;
    }
};

// mostrar el valor actual seleccionado del producto
const defineValue = (product) => {
    const index = form.products.findIndex((p) => p.id === product.id);
    if (index !== -1) {
        return form.products[index].quantity;
    }
    return 0;
};

// verificar si el producto esta seleccionado
const isSelected = (product) => {
    const index = form.products.findIndex((p) => p.id === product.id);
    if (index !== -1) {
        return true;
    }
    return false;
};

// total a pagar de los productos seleccionados + impuesto (16%)
const totalOrder = computed(() => {
    let total = 0;
    form.products.forEach((product) => {
        total += product.quantity * product.price;
    });
    return parseFloat(total * TAX).toFixed(2);
});

// config del toast
const toast = reactive({
    message: "",
    bg: "bg-gray-100",
    icon: "check",
    show: false,
});


const form = useForm({
    products: [],
    total: 0,
    comment: "",
});

// crear y guardar la nueva orden
const createOrder = () => {
    // agreghar el total a la orden
    form.total = totalOrder.value;

    // enviar la orden
    form.post(route("orders.store"), {
        onFinish: () => {

            // reset form
            form.products = [];
            form.total = 0;
            form.comment = "";

            // mostrar el toast
            toast.message = "Orden creada correctamente";
            toast.show = true;
        },
        onError: (error) => {
            console.log(error);
        },
        onProgress: () => {},
    });
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
                                    Nueva orden
                                </h3>
                                <p class="mt-1 text-sm leading-5 text-gray-500">
                                    Crear una nueva orden
                                </p>
                            </div>
                        </div>
                        <hr />

                        <form @submit.prevent="createOrder">
                            <div class="mx-auto mb-4">
                                <div class="mt-2 mb-4">
                                    <h3
                                        class="text-lg leading-6 font-medium text-gray-900"
                                    >
                                        Seleccione los productos a comprar
                                    </h3>
                                </div>
                                <div class="flex flex-wrap -m-4">
                                    <div
                                        class="lg:w-1/4 md:w-1/2 p-4 w-full"
                                        v-for="product in products"
                                        :key="product.id"
                                        :class="{
                                            'border border-green-600 bg-gray-100 rounded-md':
                                                isSelected(product),
                                        }"
                                    >
                                        <a
                                            class="block relative h-48 rounded overflow-hidden"
                                        >
                                            <img
                                                alt="ecommerce"
                                                class="object-cover object-center w-full h-full block"
                                                :src="product.image"
                                            />
                                        </a>
                                        <div class="mt-4">
                                            <h2
                                                class="text-gray-900 title-font text-lg font-medium"
                                            >
                                                {{ product.name }}
                                            </h2>
                                            <p class="mt-1">
                                                {{ product.currency }} {{ product.price }}
                                            </p>

                                            <!-- cantidad -->
                                            <div
                                                class="flex items-center justify-center mt-4 w-full"
                                            >
                                                <div class="flex items-center justify-center">
                                                    <button
                                                        type="button"
                                                        @click="
                                                            decrement(product)
                                                        "
                                                        class="px-2 py-1 text-gray-500 border border-gray-500 rounded-l-full hover:text-gray-900 hover:border-gray-900 focus:outline-none focus:text-gray-900 focus:border-gray-900"
                                                    >
                                                        -
                                                    </button>
                                                    <input
                                                        :value="
                                                            defineValue(product)
                                                        "
                                                        class="py-1 text-gray-500 border border-gray-500 focus:outline-none focus:text-gray-900 focus:border-gray-900"
                                                        type="text"
                                                        readonly
                                                        min="1"
                                                        max="10"
                                                        @input="
                                                            defineValue(product)
                                                        "
                                                    />
                                                    <button
                                                        type="button"
                                                        @click="
                                                            increment(product)
                                                        "
                                                        class="px-2 py-1 text-gray-500 border border-gray-500 rounded-r-full hover:text-gray-900 hover:border-gray-900 focus:outline-none focus:text-gray-900 focus:border-gray-900"
                                                    >
                                                        +
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- /cantidad -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- total a pagar -->
                            <div class="mt-4">
                                <h3
                                    class="text-lg leading-6 font-medium text-gray-900 border-y py-4"
                                >
                                    Total a pagar
                                </h3>
                            </div>
                            <div
                                class="flex flex-col md:flex-row items-start justify-start md:gap-6 my-4"
                            >
                                <div class="mb-2">
                                    <p
                                        class="text-base leading-6 font-medium text-gray-900 mb-2"
                                    >
                                        Productos agregados
                                    </p>
                                    <div
                                        class="text-2xl leading-8 font-normal text-gray-900"
                                    >
                                        <div
                                            v-for="product in form.products"
                                            :key="product.id"
                                        >
                                            {{ product.name }}
                                        </div>
                                        <strong v-if="!form.products.length"
                                            >No hay productos</strong
                                        >
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <p
                                        class="text-base leading-6 font-medium text-gray-900 mb-2"
                                    >
                                        Total + Impuesto (16%)
                                    </p>
                                    <p
                                        class="text-2xl leading-8 font-extrabold text-gray-900"
                                    >
                                        {{ totalOrder }}
                                    </p>
                                </div>
                            </div>
                            <!-- /total a pagar -->

                            <!-- comentarios -->
                            <div class="py-4">
                                <h3
                                    class="text-lg leading-6 font-medium text-gray-900"
                                >
                                    Deja un comentario
                                </h3>
                                <div class="mt-4">
                                    <textarea
                                        class="form-textarea block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                        rows="4"
                                        placeholder="Comentarios"
                                        v-model="form.comment"
                                    ></textarea>
                                </div>
                            </div>
                            <!-- comentarios -->

                            <div>
                                <button
                                    :disabled="
                                        form.products.length ? false : true
                                    "
                                    type="submit"
                                    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2"
                                >
                                    Crear nueva orden
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
