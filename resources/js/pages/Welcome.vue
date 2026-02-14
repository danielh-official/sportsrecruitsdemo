<script setup lang="ts">
import Main from '@/components/layouts/Main.vue';
import { whoami } from '@/routes';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Welcome" />
    <Main>
        <div class="mx-auto flex w-full max-w-2xl flex-col items-center gap-6 text-center">
            <p>
                <a
                    :href="whoami().url"
                    class="group inline-flex items-center gap-2 rounded-full bg-linear-to-r from-amber-500 via-orange-500 to-rose-500 px-6 py-3 text-sm font-semibold tracking-widest text-white uppercase shadow-lg ring-2 shadow-orange-500/30 ring-orange-400/40 transition duration-300 hover:-translate-y-0.5 hover:shadow-xl hover:shadow-orange-500/40 focus-visible:ring-4 focus-visible:ring-orange-400/50 focus-visible:outline-none"
                    >Who am I?</a
                >
            </p>
        </div>
    </Main>
</template>
