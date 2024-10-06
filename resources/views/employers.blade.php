<x-layout>
    <x-slot name="header">
        Employers
    </x-slot>
    <p class="mb-8">We listed all of our companies who are hiring.</p>
    <table class="w-full">
        <thead>
            <tr>
                <th class="text-left border px-4 py-2">SL</th>
                <th class="text-left border px-4 py-2">Name</th>
                <th class="text-right border px-4 py-2">Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employers as $employer)
            <tr>
                <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                <td class="border px-4 py-2">{{ $employer->name }}</td>
                <td class="border px-4 py-2 text-right"><a class="underline" href="/employers/{{ $employer->id }}">Read More</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>