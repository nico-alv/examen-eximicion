<script setup>
    import useUsers from '../../composables/users';
    import { onMounted } from 'vue';
    const { user, getUser, updateUser, errors } = useUsers();

    const props = defineProps({
        id: {
            required: true,
            type: String
        }
    })

    onMounted(() => getUser(props.id));
</script>
<template>
<div class="mt-12">
    <form class="max-w-md mx-auto p-4 bg-white shadow-md rounded-md" @submit.prevent="updateUser($route.params.id)">
        <div class="space-y-6">
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Name</label>
                <input type="text" id="name" v-model="user.name" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <div v-if="errors.name">
                    <span class="text-sm text-red-400">{{ errors.name[0] }}</span>
                </div>
            </div>
            <div class="mb-6">
                <label for="rut" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">rut</label>
                <input type="text" id="rut" v-model="user.rut" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <div v-if="errors.rut">
                    <span class="text-sm text-red-400">{{ errors.rut[0] }}</span>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <button class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded">Store</button>
        </div>
    </form>
</div>

</template>
