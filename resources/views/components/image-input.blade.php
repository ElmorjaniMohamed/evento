@props(['name', 'label'])

<div class="mt-4">
    <x-input-label :for="$name" :value="$label" />
    <input id="{{ $name }}" {{ $attributes->merge(['class' => 'block mt-1 w-full bg-none border-gray-700 outline-none dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']) }} type="file" name="{{ $name }}" required accept="image/*" />
    <x-input-error :messages="$errors->get($name)" class="mt-2" />
</div>
