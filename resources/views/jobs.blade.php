<x-layout>
    <x-slot name="header">
        Jobs
    </x-slot>
    <p class="mb-8">We're hiring! Check out our job listings below:</p>
    <table class="w-full mb-8">
        <thead>
            <tr>
                <th class="text-left border px-4 py-2">SL</th>
                <th class="text-left border px-4 py-2">Title</th>
                <th class="text-left border px-4 py-2">Company</th>
                <th class="text-left border px-4 py-2">Location</th>
                <th class="text-left border px-4 py-2">Type</th>
                <th class="text-right border px-4 py-2">Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jobs as $job)
            <tr>
                <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                <td class="border px-4 py-2">{{ $job['title'] }}</td>
                <td class="border px-4 py-2"><a class="underline" href="/employers/{{$job->employer->id}}">{{ $job->employer->name }}</a></td>
                <td class="border px-4 py-2">{{ $job['location'] }}</td>
                <td class="border px-4 py-2">{{ $job['status'] }}</td>
                <td class="border px-4 py-2 text-right"><a class="underline" href="/jobs/{{ $job['id'] }}">Read More</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4>
        {{ $jobs->links() }}
    </div>

</x-layout>