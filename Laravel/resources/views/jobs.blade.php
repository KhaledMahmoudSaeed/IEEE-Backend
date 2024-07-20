<x-layout>
    <x-slot:heading>
        Jobs list
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{$job['id']}}" class="text-blue-500 hover-underline">{{ $job['id'] }} pays
                    {{$job['salary']}}</a>
            </li>
        @endforeach
    </ul>
</x-layout>