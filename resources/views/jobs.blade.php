<x-layout>
    <x-slot name="page_heading">
        Job Listings
    </x-slot>

    <p>This is the job listings page of our Laravel 8 application</p>
    <ul>
        @foreach($jobs as $job)
        <li class="border-b py-3">
            <p><strong>Name:</strong> {{$job['name']}}</p>
            <p><strong>Description:</strong> {{$job['description']}}</p>
            <p><strong>Location:</strong> {{$job['location']}}</p>
            <p><strong>Salary:</strong> {{$job['salary']}}</p>
            <p><a class="text-blue-500 font-medium underline" href="/jobs/{{$job['id']}}">Read More</a></p>
        </li>
        @endforeach
    </ul>
</x-layout>