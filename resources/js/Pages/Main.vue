<script setup>
import {Head, Link} from "@inertiajs/vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";
</script>

<template>
    <Head title="Welcome"/>
    <GuestLayout>
        <section>
            <div class="main-img"></div>
        </section>
        <section>
            <div class="container mx-auto about-takamori">
                <h2 class="text-center text-3xl mb-6">О «TAKAMORI»</h2>
                <div class="about-takamori-desc text-center text-base">
                    <p>
                        Сайго Такамори был японским самураем, очень известным в Японии, прежде всего за свою честность и доблесть. Но не все время он воевал. В его жизни были периоды, когда он уходил от суеты в  тихую и мирную жизнь, изучая философию и чай, размышляя о жизни. Как и многие в Японии, он уважал зеленый чай и чайную церемонию с порошковым чаем матча, находя в ней мудрость и умиротворение.
                    </p>
                    <p>
                        Говорят, что после смерти очень многие не могли поверить, что он умер, и стало рождаться много легенд, что он скрывается в разных странах. Ходили даже слухи про Индию и Китай.
                    </p>
                    <p>
                        Мы решили отправиться вслед за легендами и поискать следы великого Такамори в этих странах, где он тоже наверняка изучал бы чай, наслаждаясь мирным течением жизни и общением с друзьями. А наши названия чая – письма гейши, прирученная сила, весенний дракон – пусть помогут вам сочинять легенды про путешествия великого Такамори.
                    </p>
                </div>
            </div>
        </section>
    </GuestLayout>
</template>

<style scoped>
.main-img{
    background: url("/img/main-page.jpg") no-repeat 50% 0;
    background-size: cover;
    height: 700px;
}
.about-takamori{
    padding: 60px 20px;
}
p{
    margin-bottom: 1rem;
}
</style>
