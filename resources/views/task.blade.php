
<x-layout>
    <x-slot:heading>
        Task
    </x-slot:heading>
    <h2 class="font-bold text-lg"> {{ $task ['task'] }} </h2>
    <p>
        {{ $task ['is_complete'] }}
    </p>
</x-layout>
