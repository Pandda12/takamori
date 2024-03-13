<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

defineProps({
    products: {
        type: Array
    }
})
</script>

<template>
<AuthenticatedLayout page-title="Товары">
    Product List
    <div v-if="!products.length">Нет товаров</div>
    <ul v-else>
        <li v-for="({product}, index) in products"></li>
    </ul>
</AuthenticatedLayout>
</template>

<style scoped>

</style>
