@props(['active' => false])

<li>
    <a {{$attributes}} class="{{ $active ? 'bg-gray-900 text-white' : 'hover:bg-gray-700 hover:text-white' }}
        rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-gray-700 hover:text-white" aria-current="page"> 
        {{$slot}} 
    </a> 
</li>