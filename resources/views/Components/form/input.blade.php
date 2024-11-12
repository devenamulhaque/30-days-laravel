@props(['field'])

<input {{ $attributes->merge([
    'class' => 'block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-inset placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-3 ' . ($errors->has($field) ? 'ring-2 ring-red-500' : 'ring-1 ring-gray-300')
]) }}>