<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import Project from "@/Components/Project.vue";

defineProps({
    projects: Object
})
</script>

<template>
    <Head title="Donate"/>

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Donate
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 space-y-3">
                <Project
                    v-for="project in projects.data"
                    :key="project.id"
                    :project="project"
                />
            </div>
        </div>
    </AuthenticatedLayout>
</template>
