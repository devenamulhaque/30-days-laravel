@props(['active' => false, 'type' => 'link'])

@if ($type === 'link')
<a class="{{$active ? 'bg-gray-100 text-gray-900': 'text-gray-500'}} text-sm font-semibold leading-6 px-3 py-1 rounded-sm hover:text-gray-900" {{ $attributes }}>{{ $slot }}</a>
@else
<button class="{{$active ? 'bg-gray-100 text-gray-900': 'text-gray-500'}} text-sm font-semibold leading-6 px-3 py-1 rounded-sm hover:text-gray-900" {{ $attributes }}>{{ $slot }}</button>
@endif