@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container mt-4">
        <h2 class="text-center mb-4 text-blue-500 text-3xl">User Profile</h2>
        <div class="card bg-gray-800 border-gray-600">
            <div class="card bg-gray-800 border-gray-600 shadow-lg">
                <div class="card-body p-4">
                    <h5 class="card-title text-2xl text-amber-400 font-semibold mb-2">Name: {{ $user->name }}</h5>
                    <p class="card-text text-gray-300 text-lg mb-1">Email: <span class="text-white">{{ $user->email }}</span>
                    </p>
                    <p class="card-text text-gray-300 text-lg mb-1">Role: <span class="text-white">{{ $user->role }}</span>
                    </p>
                    <p class="card-text text-gray-300 text-lg">Created At: <span
                            class="text-white">{{ $user->created_at->format('d-m-Y') }}</span></p>
                </div>
            </div>

        </div>
        <div class="text-center mt-4">
            <a href="{{ route('profile.edit') }}" class="btn btn-success">Edit Profile</a>
            <a href="{{ route('home') }}" class="btn btn-outline-light">Back</a>
        </div>
    </div>
@endsection
