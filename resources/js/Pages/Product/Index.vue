<script setup>
import { Head, Link } from "@inertiajs/vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import ShopLayout from "@/Layouts/ShopLayout.vue";

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
        <div class="shop_img flex justify-center items-center">
            <div class="container py-14">
                <div
                    class="shop_block flex flex-col rounded-md"
                >
                    <h1 class="text-center text-3xl">Ассортимент</h1>
                    <div class="flex flex-wrap">
                        <Link
                            v-for="(product, index) in products"
                            :href="route('product.show', product.slug)"
                            class="flex flex-col w-1/4"
                        >
                            <img
                                :src="product.image"
                                :alt="product.title"
                            >
                            {{ product.title }}
                        </Link>
                    </div>
                </div>
            </div>

        </div>
    </GuestLayout>
</template>

<style scoped>
.shop_img{
    background-image: url("/img/shop-img.jpeg");
}
.shop_block{
    padding: 60px 36px 40px;
    background-color: rgba(255, 255, 255, 0.537);
}
</style>
