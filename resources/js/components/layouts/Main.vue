<template>
    <div
        class="flex min-h-screen flex-col items-center justify-center bg-[#FDFDFC] p-20 text-[#1b1b18] dark:bg-[#0a0a0a] dark:text-[#fdfdfc]">
        <main class="flex w-full max-w-4xl flex-col gap-10 rounded-lg">
            <slot />
        </main>
    </div>
    <footer class="text-center text-sm text-gray-500 py-4">
        &copy; {{ new Date().getFullYear() }} Daniel Haven. All rights reserved.
    </footer>
</template>
