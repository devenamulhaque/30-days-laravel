@props(['active' => false])

<a class="{{$active ? 'bg-purple-500 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium" {{$attributes}}>{{$slot}}</a>