<script setup lang="ts">
import { usePage } from '@inertiajs/vue3';
import { computed } from 'vue';

interface Page {
    props: {
        version: string;
    };
}

const page: Page = usePage();

const version = computed(() => {
    return page.props.version;
});
</script>

<template>
    <div class="flex min-h-screen flex-col items-center justify-center p-20">
        <main class="flex w-full max-w-4xl flex-col gap-10 rounded-lg">
            <slot />
        </main>
    </div>
    <footer class="flex flex-col gap-2 py-4 text-center text-sm p-20">
        <div>&copy; {{ new Date().getFullYear() }} Daniel Haven. All rights reserved.</div>
        <div>
            The repository for this website is available at
            <a
                href="https://github.com/danielh-official/sportsrecruitsdemo"
                target="_blank"
                rel="noopener noreferrer"
                class="text-blue-500 hover:underline"
                >GitHub</a
            >
        </div>
        <div v-if="version">
            Current Version:
            <a
                :href="`https://github.com/danielh-official/sportsrecruitsdemo/releases/tag/v${version}`"
                target="_blank"
                rel="noopener noreferrer"
                class="text-blue-500 hover:underline"
                >{{ version }}</a
            >
        </div>
    </footer>
</template>
