<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <header class="fixed w-full top-0 p-4">
        <div
            id="desktop-header"
            class="container mx-auto flex justify-between"
        >
            <div class="desktop-header_left">
                <Link
                    :href="route('main')"
                    class="text-white"
                >
                    TAKAMORI
                </Link>
            </div>
            <div class="desktop-header_right">
                <nav class="flex gap-5">
                    <Link href="/" class="text-white main">Главная</Link>
                    <Link href="/" class="text-white products">Ассортимент</Link>
                    <Link href="/" class="text-white about">О бренде</Link>
                    <Link href="/" class="text-white where-to-buy">Где купить</Link>
                    <Link href="/" class="text-white contacts">Контакты</Link>
                </nav>
            </div>
        </div>
        <div id="mobile-header" class="container mx-auto"></div>
    </header>
    <div id="content" class="">
        <slot/>
    </div>
    <footer></footer>
</template>
<style scoped>
header{
    background-color: #1e403e;
}
.desktop-header_right nav a{
    font-size: 16px;
}
.desktop-header_right nav a:hover{
    color: #519c8f;
}
#content{
    margin-top: 56px;
}
</style>
