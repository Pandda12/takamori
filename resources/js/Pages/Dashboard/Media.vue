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
                    class="bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 text-white"
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
</style>
