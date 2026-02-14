<script setup lang="ts">
import Main from '@/components/layouts/Main.vue';
import { home } from '@/routes';
import { fit } from '@/routes/whoami';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Who Am I" />
    <Main>
        <div>
            <p><a :href="home().url" class="text-blue-500 hover:underline">&larr; Go Back</a></p>
        </div>
        <div class="mx-auto flex w-full max-w-2xl flex-col items-center gap-6 text-center">
            <div>
                <h1 class="text-4xl font-bold">Daniel Haven</h1>
            </div>
            <div>
                <h2 class="text-2xl font-semibold">Full-Stack Web Dev w/ AI-Native Workflows</h2>
            </div>
            <div>
                <p>Stack includes:</p>
                <ul class="list-inside list-disc">
                    <li><span class="font-semibold text-red-400">Laravel</span></li>
                    <li><span class="font-semibold text-green-400">Vue</span></li>
                    <li><span class="font-semibold text-blue-300">TailwindCSS</span></li>
                    <li><span class="font-semibold text-purple-400">Inertia</span> (to tie everything together in a neat 🎀)</li>
                </ul>
            </div>
            <div>
                Otherwise known as:
                <a href="https://viltstack.dev/" target="_blank" rel="noopener noreferrer">
                    <span class="text-4xl font-bold">
                        <span class="text-green-400">V</span>
                        <span class="text-purple-400">I</span>
                        <span class="text-red-400">L</span>
                        <span class="text-blue-300">T</span>
                    </span>
                </a>
            </div>
            <hr class="my-6 w-full border-t border-gray-300 dark:border-gray-700" />
            <div>
                <p class="mb-2 text-xl italic">That's all fine and dandy&hellip;</p>
                <p class="mb-2 text-2xl">But how do you fit with what we're looking for?</p>
                <p><a :href="fit().url" class="text-blue-500 underline hover:text-blue-700">Click here to find out why I'd make a great fit</a></p>
            </div>
        </div>
    </Main>
</template>
