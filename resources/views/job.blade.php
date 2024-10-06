<x-layout>
    <x-slot name="header">
        {{ $job['title'] }}
    </x-slot>
    <ul class="pl-7 mb-4 ml-[-30px] flex gap-10">
        <li class="list-none underline"><a href="/employers/{{$job->employer->id}}">{{ $job->employer->name }}</a></li>
        <li class="list-disc">{{$job['salary']}}</li>
        <li class="list-disc">{{$job['status']}}</li>
        <li class="list-disc">{{$job['location']}}</li>
    </ul>
    <p class="mb-8">{{$job['description']}}</p>
    <a class="underline" href="/jobs">Back to jobs listing</a>
</x-layout>