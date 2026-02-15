<script setup lang="ts">
const { version } = defineProps<{
    version: string;
}>();
</script>

<template>
    <div class="flex min-h-screen flex-col items-center justify-center bg-[#FDFDFC] p-20 text-[#1b1b18] dark:bg-[#0a0a0a] dark:text-[#fdfdfc]">
        <main class="flex w-full max-w-4xl flex-col gap-10 rounded-lg">
            <slot />
        </main>
    </div>
    <footer class="flex flex-col gap-2 py-4 text-center text-sm text-gray-500">
        <div>&copy; {{ new Date().getFullYear() }} Daniel Haven. All rights reserved.</div>
        <div>
            This repository is available at
            <a
                href="https://github.com/danielh-official/sportsrecruitsdemo"
                target="_blank"
                rel="noopener noreferrer"
                class="text-blue-500 hover:underline"
                >GitHub</a
            >
        </div>
        <div v-if="version">Current Version: {{ version }}</div>
    </footer>
</template>
