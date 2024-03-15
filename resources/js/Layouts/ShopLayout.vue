<script setup>

import GuestLayout from "@/Layouts/GuestLayout.vue";
</script>

<template>
<GuestLayout>
    <div class="shop_img flex justify-center items-center">
        <div class="container py-14">
            <div class="shop_block rounded-md">
                <slot/>
            </div>
        </div>

    </div>
</GuestLayout>
</template>

<style scoped>
.shop_img{
    background-image: url("/img/shop-background.png");
}
.shop_block{
    padding: 60px 36px 40px;
}
</style>
