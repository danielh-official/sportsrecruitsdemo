<script setup lang="ts">
import Main from '@/components/layouts/Main.vue';
import { whoami } from '@/routes';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Welcome" />
    <Main>
        <div class="mx-auto flex w-full max-w-2xl flex-col items-center gap-6 text-center">
            <p><a :href="whoami().url" class="text-blue-500 hover:underline">Who am I?</a></p>
        </div>
    </Main>
</template>
