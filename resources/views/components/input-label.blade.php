@props(['value'])

<label {{ $attributes->merge(['class' => 'w-full block font-medium text-lg text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
