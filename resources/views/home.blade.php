<x-layout>
    <x-slot name="header">
        Home
    </x-slot>
    <h2 class="text-2xl font-bold mb-4">
        Welcome to {{$name}}!
    </h2>
    <p class="mb-2">Email: {{ $email }}</p>
    <p>{{ $bio }}</p>
</x-layout>