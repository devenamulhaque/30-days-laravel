<x-layout>
    <x-slot name="header">
        {{ $job['title'] }}
    </x-slot>
    <x-slot name="header_buttons">
        <div class="flex items-center gap-3">
            <form method="POST" action="/jobs/{{$job->id}}">
                @csrf
                @method('DELETE')
            <button type="submit" class="text-sm font-semibold leading-6 bg-red-500 text-white px-4 py-2 rounded-md flex items-center gap-1">
                <span aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                </svg>
                </span>
            </button>
            </form>
            <a href="/jobs/{{ $job->id }}/edit" class="text-sm font-semibold leading-6 bg-black text-white px-4 py-2 rounded-md">Edit job <span aria-hidden="true">&rarr;</span></a>
        </div>
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