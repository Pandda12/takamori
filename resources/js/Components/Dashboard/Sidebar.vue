<script setup>
import { Link } from '@inertiajs/vue3';
import DashboardLogo from "@/Components/Logo/DashboardLogo.vue";
import ProductsLogo from "@/Components/Logo/ProductsLogo.vue";
import AddProductLogo from "@/Components/Logo/AddProductLogo.vue";
import UsersLogo from "@/Components/Logo/UsersLogo.vue";
import ImagesLogo from "@/Components/Logo/ImagesLogo.vue";

</script>

<template>
<aside
    class="w-1/5"
>
    <div class="px-8 py-6 m-0">
        <Link
            class="text-slate-700"
            :href="route('admin')"
        >
           Takamori
        </Link>
    </div>
    <hr class="">
    <div class="mb-4">
        <ul class="flex flex-col pl-0 mb-0 list-none">
            <li class="mt-1 w-full">
                <Link
                    class="flex px-4 py-2 mx-4 my-0 text-slate-700 font-semibold bg-transparent"
                    :href="route('admin')"
                    :class="{ 'active rounded-lg drop-shadow-xl': route().current('admin') }"
                >
                    <div
                        class="flex justify-center items-center p-2.5 mr-2 rounded-lg bg-white drop-shadow-xl"
                    >
                        <DashboardLogo :x=20 :y=20 />
                    </div>
                    <span class="flex items-center">Админ панель</span>
                </Link>

            </li>
            <li class="mt-1 w-full">
                <Link
                    class="flex px-4 py-2 mx-4 my-0 text-slate-700 font-semibold bg-transparent"
                    :href="route('media.index')"
                    :class="{ 'active rounded-lg drop-shadow-xl': route().current('media.index') }"
                >
                    <div
                        class="flex justify-center items-center p-2.5 mr-2 rounded-lg bg-white drop-shadow-xl"
                    >
                        <ImagesLogo :x=20 :y=20 />
                    </div>
                    <span class="flex items-center">Картинки</span>
                </Link>
            </li>
            <li class="mt-1 w-full">
                <Link
                    class="flex px-4 py-2 mx-4 my-0 text-slate-700 font-semibold bg-transparent"
                    :href="route('dashboard.product.index')"
                    :class="{ 'active rounded-lg drop-shadow-xl': route().current('dashboard.product.index') }"
                >
                    <div
                        class="flex justify-center items-center p-2.5 mr-2 rounded-lg bg-white drop-shadow-xl"
                    >
                        <ProductsLogo :x=20 :y=20 />
                    </div>
                    <span class="flex items-center">Товары</span>
                </Link>
            </li>
            <li class="mt-1 w-full">
                <Link
                    class="flex px-4 py-2 mx-4 my-0 text-slate-700 font-semibold bg-transparent"
                    :href="route('product.create')"
                    :class="{ 'active rounded-lg drop-shadow-xl': route().current('product.create') }"
                >
                    <div
                        class="flex justify-center items-center p-2.5 mr-2 rounded-lg bg-white drop-shadow-xl"
                    >
                        <AddProductLogo :x=20 :y=20 />
                    </div>
                    <span class="flex items-center">Добавить товар</span>
                </Link>
            </li>
            <li class="mt-1 w-full">
                <Link
                    class="flex px-4 py-2 mx-4 my-0 text-slate-700 font-semibold bg-transparent"
                    :href="route('user.index')"
                    :class="{ 'active rounded-lg drop-shadow-xl': route().current('user.index') }"
                >
                    <div
                        class="flex justify-center items-center p-2.5 mr-2 rounded-lg bg-white drop-shadow-xl"
                    >
                        <UsersLogo :x=20 :y=20 />
                    </div>
                    <span class="flex items-center">Пользователи</span>
                </Link>
            </li>
        </ul>
    </div>
</aside>
</template>

<style scoped>
li a.active{
    background-color: #fff;
}
li a.active div{
    background-image: linear-gradient(310deg, #43968d, #5cf8bb);
}
li a.active svg{
    fill: #fff;
}
</style>
