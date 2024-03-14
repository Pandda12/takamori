<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Link} from "@inertiajs/vue3";

defineProps({
    products: {
        type: Array
    }
})
</script>

<template>
<AuthenticatedLayout page-title="Товары">
    <div class="flex flex-col p-5 bg-white rounded-2xl drop-shadow-xl">
        <h5 class="text-xl font-bold text-light-dark">Список товаров</h5>
        <div class="text-right my-6">
            <Link
                :href="route('product.create')"
                class="px-6 py-3 font-bold text-white rounded-lg bg-gradient-takamori"
            >
               Создать товар
            </Link>
        </div>
        <div v-if="!products.length">Нет товаров</div>
        <div v-else>
            <table class="w-full">
                <thead>
                    <tr class="text-left">
                        <th colspan="4">Товар</th>
                        <th>Статус</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(product, index) in products">
                        <td>{{ index + 1 }}</td>
                        <td>
                            <Link
                                :href="route('product.edit', product.id)"
                            >
                                {{ product.title }}
                            </Link>
                        </td>
                        <td>{{ product.number_of_tea_bags }} шт.</td>
                        <td>{{ product.tea_weight }} г.</td>
                        <td>
                            <span
                                v-if="product.is_published === 1"
                                class="py-1 px-2 font-bold text-lime-600 bg-lime-200 rounded"
                            >
                                Отображатеся
                            </span>
                            <span
                                v-else
                                class="py-1 px-2 font-bold text-red-700 bg-red-200 rounded"
                            >
                                Не отображается
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</AuthenticatedLayout>
</template>

<style scoped>
table tbody tr td{
    padding: .75rem 1.5rem;
}
</style>
