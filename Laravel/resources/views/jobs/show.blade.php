<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <ul>
        <h1> This job title :{{$job->title}}</h1>
        <h1> This job has salary :{{$job->salary}}</h1>
    </ul>
    <p>
        <x-button href="/jobs/{{$job->id}}/edit">Edit job</x-button>
    </p>
</x-layout>