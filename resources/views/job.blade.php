<x-layout>
    <x-slot name="header">
        {{ $job['title'] }}
    </x-slot>
    <ul class="pl-7 mb-4 list-disc flex gap-10">
        <li>{{$job['salary']}}</li>
        <li>{{$job['status']}}</li>
        <li>{{$job['location']}}</li>
    </ul>
    <p class="mb-8">{{$job['description']}}</p>
    <a class="underline" href="/jobs">Back to jobs listing</a>
</x-layout>