<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Welcome Message -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-2xl font-bold mb-2">Welcome, {{ Auth::user()->name }} 👋</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        You're successfully logged in. Here’s a quick overview of your app.
                    </p>
                </div>
            </div>

            <!-- Dashboard Stats -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-5">
                    <div class="text-gray-500 dark:text-gray-400 text-sm font-semibold mb-1">Total Students</div>
                    <div class="text-3xl font-bold text-indigo-600">120</div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-5">
                    <div class="text-gray-500 dark:text-gray-400 text-sm font-semibold mb-1">Courses</div>
                    <div class="text-3xl font-bold text-green-500">8</div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-5">
                    <div class="text-gray-500 dark:text-gray-400 text-sm font-semibold mb-1">Pending Tasks</div>
                    <div class="text-3xl font-bold text-yellow-500">5</div>
                </div>

                <!-- Card 4 -->
                <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-5">
                    <div class="text-gray-500 dark:text-gray-400 text-sm font-semibold mb-1">Messages</div>
                    <div class="text-3xl font-bold text-red-500">2</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
