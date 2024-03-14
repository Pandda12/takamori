<script setup>
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'

import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

const form = reactive({
    title: null,
    description: null,
    number_of_tea_bags: null,
    tea_weight: null,
    is_published: 1,
    main_image: null,
    packaging_image: null,
    tea_leave_image: null,
})

function submit() {
    router.post('/dashboard/products', form)
}

</script>

<template>
<AuthenticatedLayout page-title="Создать товар">
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
                <textarea
                    v-model="form.description"
                    placeholder="Яркий, слегка травянистый вкус лета..."
                    class="rounded-lg border border-solid border-gray-300 bg-white"
                ></textarea>
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
                >
                <label
                    class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                    for="tea_weight"
                >
                    Отображение товара
                </label>
                <select
                    v-model="form.is_published"
                    class="border-gray-300 bg-white text-sm rounded-lg"
                >
                    <option value="1" selected>Отображать</option>
                    <option value="0">Скрыть</option>
                </select>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="flex flex-wrap">
                <div class="flex flex-col w-1/2 px-3">
                    <label
                        class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                        for="main_image"
                    >
                        Фото товара (необязательно)
                    </label>
                    <input
                        type="file"
                        @input="form.main_image = $event.target.files[0]"
                        id=""
                        class="p-2 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer "
                    >
                    <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                        {{ form.progress.percentage }}%
                    </progress>
                </div>
                <div class="flex flex-col w-1/2 px-3">
                    <label
                        class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                        for="packaging_image"
                    >
                        Фото товара (пакетиков) (необязательно)
                    </label>
                    <input
                        type="file"
                        name="packaging_image"
                        id=""
                        class="p-2 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer "
                    >
                </div>
                <div class="flex flex-col w-1/2 px-3">
                    <label
                        class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700"
                        for="tea_leave_image"
                    >
                        Фото товара (чая) (необязательно)
                    </label>
                    <input
                        type="file"
                        name="tea_leave_image"
                        id=""
                        class="p-2 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer "
                    >
                </div>
            </div>
        </div>
        <div class="flex justify-end w-full mt-6">
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
<style>
form textarea{
    min-height: 135px;
}
form input::file-selector-button{
    background-color: #fff;
    border: 0;
}
</style>
