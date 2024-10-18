<x-layout>
    <x-slot name="header">
        Edit job: {{ $job->title }}
    </x-slot>
    <p class="mb-8">Update the job by editing following felds:</p>
    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Job Title</label>
                        <div class="mt-2">
                            <input id="title" name="title" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-inset placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-3 @error('title') ring-2 ring-red-500 @else ring-1 ring-gray-300 @enderror" placeholder="Software Engineer" value="{{ $job->title }}">
                        </div>
                        @error('title')
                        <p class="text-red-500 mt-1 italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Job Salary</label>
                        <div class="mt-2">
                            <input id="salary" name="salary" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-3" placeholder="$50,000/year" value="{{ $job->salary }}">
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="location" class="block text-sm font-medium leading-6 text-gray-900">Location</label>
                        <div class="mt-2">
                            <input id="location" name="location" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-3" placeholder="Hamillland" value="{{ $job->location }}">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="type" class="block text-sm font-medium leading-6 text-gray-900">Type</label>
                        <div class="mt-2">
                            <select id="type" name="type" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option value="contractual" {{ $job->type == 'contractual' ? 'selected' : '' }}>Contractual</option>
                                <option value="remote" {{ $job->type == 'remote' ? 'selected' : '' }}>Remote</option>
                                <option value="part-time" {{ $job->type == 'part-time' ? 'selected' : '' }}>Part-time</option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="company" class="block text-sm font-medium leading-6 text-gray-900">Comapany</label>
                        <div class="mt-2">
                            <input id="company" name="company" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-3" placeholder="Harber Ltd" value="{{ $job->employer->name }}">
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Job Description</label>
                        <div class="mt-2">
                            <textarea id="about" name="description" rows="10" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-3" placeholder="Write job description">{{ $job->description }}</textarea>
                        </div>
                    </div>
                </div>

                @if ($errors->any())
                <ul class="mt-8">
                    @foreach ($errors->all() as $error)
                    <li class="text-red-500">{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/jobs/{{$job->id}}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
        </div>
    </form>

</x-layout>