<script setup lang="ts">
import Main from '@/components/layouts/Main.vue';
import { home, whoami } from '@/routes';
import { Head } from '@inertiajs/vue3';

interface Requirement {
    name: string;
    additionalInfo: string | null;
}

const mustHaveRequirements: Requirement[] = [
    {
        name: '2-3 years of professional software engineering experience',
        additionalInfo: '*at least* 2-3 years',
    },
    {
        name: 'Expertise in at least one modern programming languages (e.g., PHP, Python, JavaScript, TypeScript)',
        additionalInfo: 'I have expertise in PHP (Laravel) and JavaScript/TypeScript (Vue, Node.js).',
    },
    {
        name: 'Experience with at least one PHP MVC framework (Laravel or Symfony)',
        additionalInfo: 'The backend for this site is built with Laravel, and I have used it professionally for several years.',
    },
    {
        name: 'Strong frontend experience with Vue, React, or similar frameworks',
        additionalInfo: 'The frontend for this site is written in Vue. I have also built projects with React in the past.',
    },
    {
        name: 'Familiarity with relational databases (MySQL, PostgreSQL, etc.)',
        additionalInfo: 'I have experience working with MySQL and PostgreSQL in various projects.',
    },
    {
        name: 'Comfortable writing and maintaining automated tests (unit, integration, E2E)',
        additionalInfo: 'I have written unit and integration tests for both backend and frontend applications.',
    },
    {
        name: 'Passion for clean code, system design, and scalable architecture',
        additionalInfo: 'I try to follow conventions whenever possible and avoid hacky solutions that will cause technical debt.',
    },
    {
        name: 'Strong communication skills, positive attitude, and a collaborative mindset',
        additionalInfo:
            "I am all about clear and transparent communication, and I try to maintain a positive and collaborative attitude in all my work. If anyone has any questions or needs clarification on anything, I'm always happy to chat and help out however I can.",
    },
];

const niceToHaveRequirements: Requirement[] = [
    {
        name: 'Laravel, Vue, or TailwindCSS experience',
        additionalInfo: 'I have experience with all three technologies, and am using them to effect on this site.',
    },
    {
        name: 'Experience working with 3rd-party APIs and async job queues (SQS, Redis)',
        additionalInfo:
            "I have experience authenticating with Oauth2 APIs and have used Laravel's cache and queue driver capabilities to integrate with Redis for projects involving async processing of large and highspeed JSON payloads.",
    },
    {
        name: 'Knowledge of AI tooling, LLM integration, or computer vision',
        additionalInfo: 'I am an AI-native engineer who frequently experiments with and uses AI in his workflows.',
    },
    {
        name: 'Exposure to agile methodologies (Scrum, Kanban, XP)',
        additionalInfo: 'I have read on agile methodologies and am familiar with Scrum and Kanban.',
    },
];

const otherConsiderations = [
    {
        question: 'Our stack includes React Native applications? How can you leverage your skills to help us in this area?',
        answer: '<p class="mb-2">While I have not touched React Native as much as other technologies in the past, I am currently building native iOS/macOS apps with Swift, which gives me insight into mobile development for the Apple platform.</p><p>I also have exposure to React and its ecosystem, which would allow me to adapt quickly to React Native development.</p>',
    },
    {
        question:
            'We use Python for internal tools and ML/LLM-based features. How comfortable are you working with Python, and how would you approach contributing to these areas?',
        answer: '<p class="mb-2">I have used Python for scripting and automation tasks, and I am comfortable working with it. To contribute to Python-based internal tools and ML/LLM features, I would start by familiarizing myself with the existing codebase and understanding the specific requirements of the projects.</p><p  class="mb-2">I would leverage my experience with AI tooling and LLM integration to contribute effectively, and I am eager to learn more about Python\'s capabilities in these areas to make meaningful contributions.</p><p  class="mb-2">As a quick reference, I have recently released a Python CLI tool for syncing with Anki flashcards, which is available on GitHub: <a href="https://github.com/danielh-official/anki-yaml-sync" target="_blank" class="text-blue-500 hover:underline">https://github.com/danielh-official/anki-yaml-sync</a></p>',
    },
    {
        question:
            'How comfortable are you working with Terraform, AWS Fargate, and a Jenkins-based CI/CD pipeline? Do you have experience with infrastructure as code and cloud deployment?',
        answer: '<p class="mb-2">While my general deployment patterns involve GitHub Actions and GitHub Pages (for open-source projects); with Laravel deployments tending to go through Forge, Vapor, or Laravel Cloud; I have a solid understanding of infrastructure as code principles and am eager to apply them to your specific stack.</p>',
    },
];

const placesWhereYouCanFindMe = [
    {
        name: 'My GitHub',
        url: 'https://github.com/danielh-official',
    },
    {
        name: 'My LinkedIn',
        url: 'https://www.linkedin.com/in/danielh0/',
    },
    {
        name: 'My Twitter',
        url: 'https://twitter.com/danielhaven0',
    },
];
</script>

<template>
    <Head title="Determining Fit" />
    <Main>
        <div>
            <p><a :href="whoami().url" class="text-blue-500 hover:underline">&larr; Go Back</a></p>
        </div>
        <h1 class="text-4xl font-bold">How do I fit with what you're looking for?</h1>
        <h2 class="text-2xl font-bold">Must-Haves</h2>
        <div class="mx-auto flex w-full max-w-2xl flex-col items-center gap-6 text-center">
            <div class="w-full items-center gap-4 text-left" v-for="(requirement, index) in mustHaveRequirements" :key="index">
                <input type="checkbox" checked disabled /> {{ requirement.name }}
                <div v-if="requirement.additionalInfo" class="text-sm text-gray-500">
                    {{ requirement.additionalInfo }}
                </div>
            </div>
        </div>
        <h2 class="mt-12 text-2xl font-bold">Nice-to-Haves</h2>
        <div class="mx-auto flex w-full max-w-2xl flex-col items-center gap-6 text-center">
            <div class="w-full items-center gap-4 text-left" v-for="(requirement, index) in niceToHaveRequirements" :key="index">
                <input type="checkbox" checked disabled /> {{ requirement.name }}
                <div v-if="requirement.additionalInfo" class="text-sm text-gray-500">
                    {{ requirement.additionalInfo }}
                </div>
            </div>
        </div>
        <h2 class="mt-12 text-2xl font-bold">Other Considerations</h2>
        <div
            v-for="(consideration, index) in otherConsiderations"
            :key="index"
            class="mx-auto flex w-full max-w-2xl flex-col items-center gap-6 text-center"
        >
            <blockquote class="my-4 border-l-4 border-gray-300 bg-gray-50 p-4 text-gray-700 italic">{{ consideration.question }}</blockquote>
            <p class="text-left" v-html="consideration.answer"></p>
        </div>
        <h2 class="mt-12 text-2xl font-bold">This is all great. Where else can we find you?</h2>
        <div class="mx-auto flex w-full max-w-2xl flex-col gap-6 text-center">
            <ul class="list-inside list-disc text-left">
                <li v-for="(place, index) in placesWhereYouCanFindMe" :key="index">
                    <a :href="place.url" class="text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">{{ place.name }}</a>
                </li>
            </ul>
        </div>
        <div class="mt-12 text-center">
            <a :href="home().url" class="text-blue-500 hover:underline">Return Home 🏠</a>
        </div>
    </Main>
</template>
