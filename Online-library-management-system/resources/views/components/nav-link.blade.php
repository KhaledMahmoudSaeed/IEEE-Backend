@props(['active'])

@php
    $classes =
        'inline-flex items-center px-1 pt-1 border-b-2 ' .
        ($active ? 'border-indigo-400 dark:border-indigo-600 ' : 'border-transparent ') .
        'text-sm font-medium leading-5 ' .
        ($active ? 'text-gray-900 dark:text-gray-100 ' : 'text-gray-500 dark:text-gray-400 ') .
        'focus:outline-none ' .
        ($active
            ? 'focus:border-indigo-700 '
            : 'focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 ') .
        'transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
