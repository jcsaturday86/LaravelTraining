@props([
    'type' => 'button',
    'color' => 'primary', // primary, secondary, danger, etc.
])

@php
    $baseClasses = 'inline-flex items-center px-4 py-2 border text-sm font-medium rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 transition';
    $colorClasses = match ($color) {
        'edit' => 'bg-blue-600 text-white hover:bg-blue-700 focus:ring-blue-500',
        'add' => 'bg-green-600 text-white  hover:bg-green-700 focus:ring-gray-500',
        'delete' => 'bg-red-600 text-white hover:bg-red-700 focus:ring-red-500',
        default => 'bg-gray-500 text-white hover:bg-gray-600 focus:ring-gray-400',
    };
@endphp

<button type="{{ $type }}" {{ $attributes->merge(['class' => "$baseClasses $colorClasses"]) }}>
    {{ $slot }}
</button>
