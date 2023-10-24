@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-full pl-5 text-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm py-2']) !!}">
