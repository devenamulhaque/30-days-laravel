<x-layout>
    <x-slot name="header">
        {{ $employer->name }}
    </x-slot>
    <p class="mb-4">{{$employer->bio}}</p>
    <hr>
    <ul class="my-4 space-y-3">
        <li>Email: {{$employer->email}}</li>
        <li>Position: {{$employer->position}}</li>
    </ul>
    <hr>
    <p class="mt-4 mb-8">We're hiring! Check out our job listings below:</p>
    <table class="w-full mb-4">
        <thead>
            <tr>
                <th class="text-left border px-4 py-2">SL</th>
                <th class="text-left border px-4 py-2">Job Title</th>
                <th class="text-left border px-4 py-2">Location</th>
                <th class="text-left border px-4 py-2">Type</th>
                <th class="text-right
                border px-4 py-2">Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employer->jobs as $job)
            <tr>
                <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                <td class="border px-4 py-2">{{ $job['title'] }}</td>
                <td class="border px-4 py-2">{{ $job['location'] }}</td>
                <td class="border px-4 py-2">{{ $job['status'] }}</td>
                <td class="border px-4 py-2 text-right"><a class="underline" href="/jobs/{{ $job['id'] }}">Read More</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a class="underline" href="/employers">Back to Company Listings</a>
</x-layout>