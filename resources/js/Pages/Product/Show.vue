<script setup>
import { Head } from '@inertiajs/vue3';
import GuestLayout from "@/Layouts/GuestLayout.vue";
defineProps({
    product: {
        type: Array
    }
})
</script>

<template>
    <Head :title="product.title"/>
    <GuestLayout>
        {{ product }}
    </GuestLayout>
</template>

<style scoped>

</style>
