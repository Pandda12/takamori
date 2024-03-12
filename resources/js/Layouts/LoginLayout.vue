<script setup>

</script>

<template>
    <div class="flex justify-center items-center p-7 login_img">

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>
        <div class="w-full bg-white rounded-lg p-9 sm:max-w-md">
            <h2 class="uppercase text-xl font-bold mb-5">Takamori</h2>
            <slot/>
        </div>
    </div>
</template>

<style scoped>
.login_img{
    background: url("/img/main-page.jpg") no-repeat 50% 0;
    background-size: cover;
    height: 100svh;
}
</style>
