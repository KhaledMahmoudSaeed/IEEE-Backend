@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2 class="text-center mb-4 text-blue-500 text-3xl">Update Profile</h2>
        <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name" class="text-blue-500">Name</label>
                <input type="text" name="name" class="form-control rounded" id="name" value="{{ $user->name }}"
                    required style="background-color: #343a40; color: white;">
            </div>
            <div class="form-group">
                <label for="email" class="text-blue-500">Email</label>
                <input type="email" name="email" class="form-control rounded" id="email" value="{{ $user->email }}"
                    required style="background-color: #343a40; color: white;">
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-success btn-lg">Update Profile</button>
                <a href="{{ route('profile') }}" class="btn btn-outline-light btn-lg d-inline-block">Back</a>
            </div>

        </form>
    </div>
@endsection
