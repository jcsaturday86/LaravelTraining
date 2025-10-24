<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Students') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!-- Success Message -->
                    @if (session('success'))
                        <div class="mb-4 p-3 bg-green-100 border border-green-400 text-green-700 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Header + Add Button -->
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">List of Students</h2>
                        <a href="{{ route('students.create') }}">
                            <x-button color="add">+ Add Student</x-button>
                        </a>
                    </div>

                    <!-- Student Cards -->
                    @php
                        $students = [
                            ['name' => 'John Doe', 'course' => 'BS Computer Science - 3rd Year'],
                            ['name' => 'Jane Smith', 'course' => 'BS Information Technology - 2nd Year'],
                            ['name' => 'Jenny Lim', 'course' => 'BS Accountancy - 1st Year'],
                        ];
                    @endphp

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        @foreach ($students as $student)
                            <div class="bg-white dark:bg-gray-700 shadow-md rounded-2xl overflow-hidden transition transform hover:scale-[1.02] hover:shadow-lg">
                                <!-- Student Photo -->
                                <div class="bg-gray-400 flex items-center justify-center text-white text-sm p-2">
                                    <img 
                                        src="{{ asset('images/student.jpg') }}" 
                                        alt="Student Photo" 
                                        class="max-w-full h-auto"
                                    >
                                </div>

                                <!-- Student Info -->
                                <div class="p-4 text-center">
                                    <h5 class="text-lg font-semibold text-indigo-600 dark:text-indigo-300">{{ $student['name'] }}</h5>
                                    <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">{{ $student['course'] }}</p>

                                    <div class="flex justify-center gap-2">
                                        <x-button color="edit">Edit</x-button>
                                        <x-button color="delete" type="submit">Delete</x-button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
