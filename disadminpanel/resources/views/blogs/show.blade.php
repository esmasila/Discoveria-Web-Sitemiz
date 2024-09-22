@extends('layouts.master')

@section('bl-show')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-info text-white">
                        <h4 class="mb-0">{{ $blog->title }}</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Created By:</strong> {{ $blog->created_by }}</p>
                        <p><strong>Created At:</strong> {{ $blog->created_at->format('Y-m-d') }}</p>
                        <p><strong>Status:</strong> {{ ucfirst($blog->status) }}</p>
                        <hr>
                        <h5>Summary</h5>
                        <p>{{ $blog->summery }}</p>
                        <hr>
                        <h5>Content</h5>
                        <p>{{ $blog->content }}</p>

                        @if ($blog->image)
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" class="img-thumbnail mt-2" style="width: 100%;">
                        @endif
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-warning">Edit Blog</a>
                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this blog?')">Delete Blog</button>
                        </form>
                        <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Back to Blog List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
