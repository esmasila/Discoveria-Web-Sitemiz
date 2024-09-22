@extends('layouts.master')

@section('r-show')
<div class="container">
    <h2>Role Details</h2>
    <div class="card">
        <div class="card-header">
            {{ $role->role_name }}
        </div>
        <div class="card-body">
            <p><strong>Description:</strong> {{ $role->description }}</p>
            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
