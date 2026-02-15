<script setup lang="ts">
import Main from '@/components/layouts/Main.vue';
import { home } from '@/routes';
import { fit } from '@/routes/whoami';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Who Am I" />
    <Main>
        <div>
            <p><Link :href="home().url" class="text-blue-500 hover:underline">&larr; Go Back</Link></p>
        </div>
        <div class="mx-auto flex w-full max-w-2xl flex-col items-center gap-6 text-center">
            <div>
                <h1 class="text-4xl font-bold">Daniel Haven</h1>
            </div>
            <div>
                <h2 class="text-2xl font-semibold">Full-Stack Web Dev w/ AI-Native Workflows</h2>
            </div>
            <div>
                <p class="mb-2">Stack includes:</p>
                <ul class="list-outside list-disc pl-10 text-left">
                    <li><span class="font-semibold text-red-400">Laravel</span></li>
                    <li><span class="font-semibold text-green-400">Vue</span></li>
                    <li><span class="font-semibold text-blue-300">TailwindCSS</span></li>
                    <li><span class="font-semibold text-purple-400">Inertia</span></li>
                </ul>
            </div>
            <div class="flex flex-col items-center justify-center gap-4 lg:flex-row">
                Otherwise known as:
                <a href="https://viltstack.dev/" target="_blank" rel="noopener noreferrer">
                    <span class="vilt-word text-4xl font-bold">
                        <span class="vilt-letter text-green-400">V</span>
                        <span class="vilt-letter text-purple-400">I</span>
                        <span class="vilt-letter text-red-400">L</span>
                        <span class="vilt-letter text-blue-300">T</span>
                    </span>
                </a>
            </div>
            <hr class="my-6 w-full border-t border-gray-300 dark:border-gray-700" />
            <div>
                <p class="mb-2 text-xl italic">That's all fine and dandy&hellip;</p>
                <p class="mb-2 text-2xl">But how do you fit with what we're looking for?</p>
                <p><Link :href="fit().url" class="text-blue-500 underline hover:text-blue-700">Click here to find out why I'd make a great fit</Link></p>
            </div>
        </div>
    </Main>
</template>

<style scoped>
.vilt-letter {
    display: inline-block;
}

.vilt-word:hover .vilt-letter {
    animation: vilt-bounce 0.6s ease-in-out;
}

.vilt-word:hover .vilt-letter:nth-child(1) {
    animation-delay: 0s;
}

.vilt-word:hover .vilt-letter:nth-child(2) {
    animation-delay: 0.08s;
}

.vilt-word:hover .vilt-letter:nth-child(3) {
    animation-delay: 0.16s;
}

.vilt-word:hover .vilt-letter:nth-child(4) {
    animation-delay: 0.24s;
}

@keyframes vilt-bounce {
    0%,
    100% {
        transform: translateY(0);
    }

    50% {
        transform: translateY(-6px);
    }
}
</style>
