<script setup>
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'

import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

const props = defineProps({
    product: {
        type: Array
    }
})
const form = reactive({
    title: props.product ? props.product.title : null,
    description: null,
    number_of_tea_bags: null,
    tea_weight: null,
})
function submit() {
    router.post('/dashboard/products', form)
}

</script>

<template>
    <AuthenticatedLayout page-title="Обновить товар">
        <form
            @submit.prevent="submit"
            action=""
            class="flex flex-col p-5 bg-white rounded-2xl drop-shadow-xl"
        >

            <h5 class="text-xl font-bold text-light-dark">Информация товара</h5>
            <div class="flex">
                <div class="flex flex-col w-1/2 px-3">
                    <label
                        class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                        for="title"
                    >
                        Наименование товара
                    </label>
                    <input
                        type="text"
                        v-model="form.title"
                        id=""
                        class="rounded-lg border border-solid border-gray-300 bg-white"
                        placeholder="Волшебство лепестков"
                        required
                    />
                </div>
                <div class="flex flex-col w-1/2 px-3">
                    <label
                        class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                        for="number_of_tea_bags"
                    >
                        Количество пакетиков (необязательно)
                    </label>
                    <input
                        type="number"
                        v-model="form.number_of_tea_bags"
                        id=""
                        class="rounded-lg border border-solid border-gray-300 bg-white"
                        placeholder="20"
                    />
                </div>
            </div>
            <div class="flex">
                <div class="flex flex-col w-1/2 px-3">
                    <label
                        class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                        for="description"
                    >
                        Описание (необязательно)
                    </label>
                    <textarea v-model="form.description" placeholder="Яркий, слегка травянистый вкус лета..."></textarea>
                </div>
                <div class="flex flex-col w-1/2 px-3">
                    <label
                        class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                        for="tea_weight"
                    >
                        Вес товара
                    </label>
                    <input
                        type="text"
                        v-model="form.tea_weight"
                        class="rounded-lg border border-solid border-gray-300 bg-white"
                        placeholder="2.0"
                    />
                </div>
            </div>
            <div class="flex flex-col">
                <div class="flex ">
                    <div class="flex flex-col w-1/2 px-3">
                        <label
                            class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                            for="image_1"
                        >
                            Картинка 1
                        </label>
                        <input
                            type="file"
                            name="image_1"
                            id=""
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50"
                        >
                    </div>
                    <div class="flex w-1/2"></div>
                </div>
            </div>
            <div class="flex justify-end w-full mt-6">

                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" id="file_input" type="file">

                <button
                    type="submit"
                    class="px-6 py-3 font-bold text-white bg-gradient-dark-gray rounded-lg"
                >
                    Создать товар
                </button>
            </div>

        </form>
    </AuthenticatedLayout>
</template>
