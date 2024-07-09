<x-layout>
    <x-slot name="page_heading">
        Job Details
    </x-slot>

    <h1 class="text-3xl">{{$job['name']}}</h1>
    <ul>
        <li>Salary: {{$job['salary']}}</li>
        <li>Location: {{$job['location']}}</li>
    </ul>

    <p>{{$job['description']}}</p>
</x-layout>