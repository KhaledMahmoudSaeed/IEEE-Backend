<x-layout>
    <x-slot:heading>
        Jobs list
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/job/{{$job['id']}}"
                    class="text-blue-500 hover-underline">id:{{ $job['id'] }}---{{ $job['first_name'] }}
                    last:
                    {{$job['last_name']}}</a>
            </li>
        @endforeach
    </ul>
</x-layout>