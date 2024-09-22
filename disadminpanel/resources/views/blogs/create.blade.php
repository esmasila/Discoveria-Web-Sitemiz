@extends('layouts.master')

@section('bl-create')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">Create a New Blog</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="summery" class="form-label">Özet</label>
                                <textarea name="summery" class="form-control" id="summery" rows="5" required>{{ old('summery') }}</textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="content" class="form-label">Content</label>
                                <textarea name="content" class="form-control" id="content" rows="5" required>{{ old('content') }}</textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="image" class="form-label">Image (optional)</label>
                                <input type="file" name="image" class="form-control" id="image">
                            </div>


                            <div class="form-group mb-3">
                                <label for="created_at" class="form-label">Blog Eklenme Tarihi</label>
                                <input type="date" name="created_at" class="form-control" id="created_at" value="{{ old('created_at') }}" required>
                            </div>


                            <div class="form-group mb-3">
                                <label for="created_by" class="form-label">Blog Yazarı</label>
                                <input type="text" name="created_by" class="form-control" id="created_by" value="{{ old('created_by') }}" required>
                            </div>

                            <div class="form-group mb-4">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" class="form-select" id="status">
                                    <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                                    <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
                                </select>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-block">Create Blog</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection
