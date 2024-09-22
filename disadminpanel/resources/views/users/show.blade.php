@extends('layouts.master')

@section('u-show')
<div class="container">
    <h2>User Details</h2>
    <div class="card">
        <div class="card-header">
            {{ $user->name }}
        </div>
        <div class="card-body">
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Role:</strong> {{ $user->role->role_name }}</p>
            <p><strong>Status:</strong> {{ ucfirst($user->user_status) }}</p>
            <p><strong>Avatar:</strong> <img src="{{ $user->avatar }}" alt="Avatar" width="100"></p>
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
