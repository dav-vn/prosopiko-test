<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
</script>

<template>
    <div class="
        min-h-screen
        flex flex-col
        sm:justify-center
        items-center
        pt-6
        sm:pt-0
        bg-slate-100"
    >
        <div
            class="
            min-w-[34%]
            mt-6 px-10 py-4
            bg-white shadow-2xl
            overflow-hidden
            rounded-[34px]"
        >
            <slot/>
        </div>
    </div>
</template>
