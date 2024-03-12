<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';
import Sidebar from "@/Components/Dashboard/Sidebar.vue";

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div
    class="flex"
    >
        <Sidebar/>
        <main
            class="relative h-full max-h-screen transition-all duration-200 ease-soft-in-out xl:ml-68 rounded-xl"
        >
            <slot/>
        </main>
    </div>
</template>
