<script setup>
import {Link} from "@inertiajs/vue3";

defineProps({
    project: Object
})
</script>

<template>
    <Link href="#" class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800 block">
        <div class="p-6 text-gray-900 dark:text-gray-100 space-y-3">
            <h2 class="text-lg font-semibold leading-tight">
                {{ project.title }}
            </h2>

            <p class="text-sm text-gray-600 dark:text-gray-400">
                {{ project.sort_description }}
            </p>

            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <div class="text-sm font-semibold text-gray-600 dark:text-gray-400">
                        Status: {{ project.status }}
                    </div>
                    <div class="h-1 w-1 bg-gray-800 rounded-full"></div>
                    <div class="text-sm font-semibold text-gray-600 dark:text-gray-400">
                        {{ project.raised_amount }} TK raised of {{ project.goal_amount }} TK
                    </div>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="text-sm font-semibold text-gray-600 dark:text-gray-400">
                        Start Date: {{ project.start_date }}
                    </div>
                    <div class="h-1 w-1 bg-gray-800 rounded-full"></div>
                    <div class="text-sm font-semibold text-gray-600 dark:text-gray-400">
                        End Date: {{ project.end_date }}
                    </div>
                </div>
            </div>
        </div>
    </Link>
</template>
