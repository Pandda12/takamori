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
    <div class="container mx-auto flex">
        <Sidebar/>
        <main class="px-8 py-6 m-0">
            <nav class="flex ">
                <div class="breadcrumbs">
                    <Link
                        class="opacity-50"
                        :href="route('dashboard')"
                    >
                        Админ панель
                    </Link>
                    <span v-if="pageTitle">
                        <span class="mx-2 opacity-50">/</span>
                        <span>{{ pageTitle }}</span>
                    </span>
                </div>
            </nav>
            <div class="pt-8">
                <h2 class="page_heading text-3xl font-bold">{{pageTitle}}</h2>
                <slot/>
            </div>
        </main>
    </div>
</template>
<script>
// export default {
//     props: {
//         pageTitle: String,
//         default: null
//     }
// }
export default {
    props: {
        pageTitle: String,
    },
};

</script>
<style>
.breadcrumbs{
    color: #344767;
}
.page_heading{
    color: #344767;
    opacity: 1;
}
</style>
