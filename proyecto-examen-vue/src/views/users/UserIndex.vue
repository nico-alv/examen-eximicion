<script setup>
    import { RouterLink } from "vue-router";
    import useUsers from "../../composables/users";
    import { onMounted } from "vue";

    const { users, getUsers } = useUsers();
    onMounted(() => getUsers());
</script>
<template>
    <div class="mt-12">
        <div class="flex justify-end m-2 p-2">
            <RouterLink :to="{name:'UserCreate'}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded">Nuevo usuario</RouterLink>
        </div>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Rut
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="user in users" :key="user.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                            {{user.rut}}
                        </td>
                        <td class="px-6 py-4">
                            {{user.name}}
                        </td>
                        <td class="px-6 py-4 space-x-2">
                            <RouterLink
                            :to="{name: 'UserEdit', params: {id: user.id}}"
                            class="px-4 py-2 bg-green-500 hover:bg-green-700 text-white rounded">
                            Editar
                            </RouterLink>
                            <button class="
                            px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded">
                            Borrar
                            </button>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
