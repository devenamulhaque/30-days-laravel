<x-layout>
    <x-slot name="header">
        Register
    </x-slot>

    <form method="POST" action="/register">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form.label for="name">Name</x-form.label>
                        <div class="mt-2">
                            <x-form.input field="name" id="name" name="name" type="text" placeholder="Full Name" :value="old('name')" />
                        </div>
                        @error('title')
                        <p class="text-red-500 mt-1 italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="sm:col-span-4">
                        <x-form.label for="email">Email Address</x-form.label>
                        <div class="mt-2">
                            <x-form.input field="email" id="email" name="email" type="email" placeholder="Email Address" :value="old('email')" />
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

                    <!-- <div class="sm:col-span-4">
                        <x-form.label for="confirm-password">Confirm Password</x-form.label>
                        <div class="mt-2">
                            <x-form.input field="password" id="confirm-password" name="confirm-password" type="password" placeholder="......" />
                        </div>
                        @error('password')
                        <p class="text-red-500 mt-1 italic">{{ $message }}</p>
                        @enderror
                    </div> -->
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <x-button type="submit" class="bg-black">Register</x-button>
            <div>
                Already have an account? <a href="/login" class="text-indigo-600">Log in</a>
            </div>
        </div>
    </form>
</x-layout>