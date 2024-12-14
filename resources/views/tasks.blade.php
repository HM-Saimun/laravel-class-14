<x-layout>
    <x-slot:heading>
        Tasks
    </x-slot:heading>
    <ul>
        @foreach ($tasks as $task)
        <li>
            <a href="/tasks/{{$task['id']}}" class="text-blue-500 hover:underline">
                <strong>{{$task['task']}}</strong>
            </a>
        </li>
        @endforeach
    </ul>
</x-layout>