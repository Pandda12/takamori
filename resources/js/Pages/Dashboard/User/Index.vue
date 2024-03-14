<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Link} from "@inertiajs/vue3";

defineProps({
    users: {
        type: Array
    }
})
</script>
<template>
<AuthenticatedLayout page-title="Пользователи">
<div class="flex flex-col p-5 bg-white rounded-2xl drop-shadow-xl">
    <h5 class="text-xl font-bold text-light-dark">Список пользователей</h5>
    <div class="text-right my-6">
        <Link
            :href="route('product.create')"
            class="px-6 py-3 font-bold text-white rounded-lg bg-gradient-takamori"
        >
            Создать товар
        </Link>
    </div>
    {{ users }}
    <div v-if="!users.length">Нет товаров</div>
    <div v-else>
        <table class="w-full">
            <thead>
            <tr class="text-left">
                <th colspan="4">Товар</th>
                <th>Статус</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(user, index) in users">
                <td>{{ index + 1 }}</td>
                <td>
                    <Link
                        :href="route('product.edit', user.id)"
                    >
                        {{ user.name }}
                    </Link>
                </td>
                <td>{{ user.id }} шт.</td>
                <td>{{ user.id }} г.</td>
                <td>
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
