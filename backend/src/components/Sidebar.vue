<template>

    <div class="min-w-[160px] w-[160px]  transition-all bg-indigo-700 text-white py-4 px-2" id="sideBarContainer" >
        <router-link :to="{name: 'app.dashboard'}"
                    class="flex items-center p-2 rounded transition-colors hover:bg-black/30">
            <span class="mr-2 text-gray-300">
                <BuildingStorefrontIcon class="w-5"/>
            </span>
            <span class="text-xs" >
                Dashboard
            </span>
        </router-link>
        <router-link :to="{name: 'app.products'}"
                    class="flex items-center p-2 rounded transition-colors hover:bg-black/30">
            <span class="mr-2 text-gray-300">
                <RectangleStackIcon class="w-5"/>
            </span>
            <span class="text-xs">
                Products
            </span>
        </router-link>
        <router-link :to="{name: 'app.services'}"
                    class="flex items-center p-2 rounded transition-colors hover:bg-black/30">
            <span class="mr-2 text-gray-300">
                <RectangleStackIcon class="w-5"/>
            </span>
            <span class="text-xs">
                Services
            </span>
        </router-link>
        <router-link :to="{name: 'app.projects'}"
                    class="flex items-center p-2 rounded transition-colors hover:bg-black/30">
            <span class="mr-2 text-gray-300">
                <RectangleStackIcon class="w-5"/>
            </span>
            <span class="text-xs">
                Projects
            </span>
        </router-link>
        <router-link :to="{name: 'app.orders'}"
                    class="flex items-center p-2 rounded transition-colors hover:bg-black/30">
            <span class="mr-2 text-gray-300">
                <ClipboardDocumentListIcon class="w-5"/>
            </span>
            <span class="text-xs">
                Orders
            </span>
        </router-link>
        <router-link :to="{name: 'app.users'}"
                    class="flex items-center p-2 rounded transition-colors hover:bg-black/30">
            <span class="mr-2 text-gray-300">
                <UsersIcon class="w-5"/>
            </span>
            <span class="text-xs">
                Users
            </span>
        </router-link>
        <router-link :to="{name: 'app.customers'}"
                 class="flex items-center p-2 rounded transition-colors hover:bg-black/30">
            <span class="mr-2 text-gray-300">
                <UserGroupIcon class="w-5"/>
            </span>
            <span class="text-xs">
                Customers
            </span>
        </router-link>
        <router-link :to="{name: 'reports'}"
                 class="flex items-center p-2 rounded transition-colors hover:bg-black/30">
            <span class="mr-2 text-gray-300">
                <PresentationChartLineIcon class="w-5"/>
            </span>
            <span class="text-xs">
                Reports
            </span>
        </router-link>
    </div>
  
</template>

<script setup>

import { BuildingStorefrontIcon, RectangleStackIcon, ClipboardDocumentListIcon, UsersIcon, UserGroupIcon, PresentationChartLineIcon } from '@heroicons/vue/24/outline'

</script>

<style scoped lang="scss">

#sideBarContainer{
  display: flex;
  flex-direction: column;
  align-items: center;
  a{
    width: 100%;    
  }
}

</style>