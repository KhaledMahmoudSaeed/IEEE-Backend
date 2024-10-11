@extends('layouts.app')

@section('content')
    <div>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <div class="container mt-5">
        <h1 class="text-4xl text-blue-400 mb-4">All Students</h1>
        <a href="{{ url('admin/students') }}" class="btn btn-outline-light mb-4">Back</a>

        <form action="{{ route('admin.searchStudent') }}" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="student_id" class="form-control bg-gray-800 text-black border border-gray-600"
                    placeholder="Search by name or email" value="{{ request()->query('search') }}">
                <button type="submit" class="btn btn-primary ml-2">Search</button>
            </div>
        </form>


        <table
            class="table-auto w-full bg-gray-800 text-gray-200 border-collapse border border-gray-700 rounded-lg shadow-lg">
            <thead class="bg-blue-600 text-white">
                <tr>
                    <th class="p-4 border-b border-gray-700 text-left">ID</th>
                    <th class="p-4 border-b border-gray-700 text-left">Name</th>
                    <th class="p-4 border-b border-gray-700 text-left">Email</th>
                    <th class="p-4 border-b border-gray-700 text-left">Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr class="hover:bg-gray-700">
                        <td class="p-4 border-b border-gray-700">{{ $student->id }}</td>
                        <td class="p-4 border-b border-gray-700">{{ $student->name }}</td>
                        <td class="p-4 border-b border-gray-700">{{ $student->email }}</td>
                        <td class="p-4 border-b border-gray-700">{{ $student->role }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>
@endsection
