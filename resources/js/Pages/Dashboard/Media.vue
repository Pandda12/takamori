<script setup>

import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {ref} from "vue";

defineProps({
    media: {
        type: Array
    }
})

const isActive = ref(false);
const toggleActive = () => {
    isActive.value = !isActive.value;
};



</script>

<template>
<AuthenticatedLayout page-title="Картинки">
    <div
        v-if="media"
        class="flex flex-wrap gap-5"
    >
        <div
            v-for="(image, index) in media"
            v-on:click="toggleActive"
            :data-id="index"
            :class="{ 'open': isActive }"
            class="w-1/3 p-6 bg-white rounded-2xl drop-shadow-xl ease-in-out "
        >
            <div class="img_block">
                <img
                    :src="image"
                    :alt="'image-' + index"
                />
                <button
                    class="items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150"
                >
                    Удалить картинку
                </button>
            </div>
        </div>
    </div>
</AuthenticatedLayout>
</template>

<style scoped>
.open{
    position: absolute;
    top: 0;
    left: 0;
    height: 100svh;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgba(184, 184, 187, 0.50);
}
.open .img_block{
    background-color: #fff;
    padding: 30px;
    border-radius: 20px;
}
.img_block button{
    display: none;
    margin: 4em auto 0;
}
.open .img_block button{
    display: block;
}
</style>
