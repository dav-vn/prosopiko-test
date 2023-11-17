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
            <div class="
            my-14
            flex flex-col sm:justify-center items-center">

                <ApplicationLogo class="
                    w-60 h-30
                    mb-0
                    fill-current"
                />

                <h1 class="
                    mt-0
                    font-sf font-semibold text-3xl
                    user-select-none"
                >
                    Добро пожаловать
                </h1>
            </div>
            <slot/>
        </div>
    </div>
</template>
