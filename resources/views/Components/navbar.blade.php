<div class="hidden lg:flex lg:gap-x-8">
    <x-nav-link type="link" href="/" :active="request()->is('/')" id="home-link">Home</x-nav-link>
    <x-nav-link href="/jobs" id="about-link" :active="request()->is('jobs')">Jobs</x-nav-link>
    <x-nav-link href="/employers" id="about-link" :active="request()->is('employers')">Companies</x-nav-link>
    <x-nav-link href="/about" id="about-link" :active="request()->is('about')">About</x-nav-link>
    <x-nav-link type="link" href="contact" id="about-link" :active="request()->is('contact')">Contact</x-nav-link>
</div>
<div class="hidden lg:flex lg:flex-1 lg:justify-end gap-3 items-center">
    @guest
    <a href="/login" class="text-sm font-semibold leading-6 text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
    <x-button type="link" href="/register" class="bg-black">Register</x-button>
    @endguest

    @auth
    <form method="POST" action="/logout">
        @csrf
        <x-button type="submit" class="bg-black">Log Out</x-button>
    </form>
    @endauth
</div>