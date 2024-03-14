<script setup>
import { Head, Link } from "@inertiajs/vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";

defineProps({
    products: {
        type: Array
    }
})
</script>

<template>
    <Head title="Ассортимент" />
    <GuestLayout>
        {{ products }}
        <p v-for="(product, index) in products">
        <span>
            <Link
                :href="route('product.show', product.slug)"
            >
                {{ product.title }}
            </Link>
        </span>
            <span>{{ product.id }}</span>
        </p>
    </GuestLayout>
</template>

<style scoped>

</style>
