<x-layout>
    <x-slot name="header">
        Log in
    </x-slot>

    <form method="POST" action="/register">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <div class="sm:col-span-4">
                        <x-form.label for="email">Email Address</x-form.label>
                        <div class="mt-2">
                            <x-form.input field="email" id="email" name="email" type="email" placeholder="Email Address" :value="old('email')" required />
                        </div>
                        @error('email')
                        <p class="text-red-500 mt-1 italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="sm:col-span-4">
                        <x-form.label for="password">Password</x-form.label>
                        <div class="mt-2">
                            <x-form.input field="password" id="password" name="password" type="password" placeholder="......" />
                        </div>
                        @error('password')
                        <p class="text-red-500 mt-1 italic">{{ $message }}</p>
                        @enderror
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

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <x-button type="submit" class="bg-black">Log in</x-button>
            <div>
                Don't have an account? <a href="/register" class="text-sm font-semibold leading-6 text-indigo-500">Register</a>
            </div>
        </div>
    </form>
</x-layout>