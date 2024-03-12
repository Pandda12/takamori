<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
<aside
    class=""
>
    <div class="h-20">
        <Link
            class="text-slate-700"
            :href="route('admin')"
        >
           Takamori
        </Link>
    </div>
    <hr class="">
    <div>
        <ul class="flex flex-col pl-0 mb-0 list-none">
            <li class="mt-0.5 w-full">Products</li>
            <li class="mt-0.5 w-full">Users</li>
        </ul>
    </div>
</aside>
</template>

<style scoped>

</style>
