@extends('layouts.master')

@section('k-edit')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">Kategori Düzenle</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('kategoriler.update', $kategori->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="parent_id" class="form-label">Üst Kategori</label>
                            <select name="parent_id" id="parent_id" class="form-select">
                                <option value="">Ana Kategori</option>
                                @foreach($kategoriler as $cat)
                                    <option value="{{ $cat->id }}" {{ $cat->id == $kategori->parent_id ? 'selected' : '' }}>
                                        {{ $cat->kategori_adi }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="kategori_adi" class="form-label">Kategori Adı</label>
                            <input type="text" name="kategori_adi" id="kategori_adi" class="form-control" value="{{ $kategori->kategori_adi }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="icerikler" class="form-label">İçerik</label>
                            <textarea name="icerikler" id="icerikler" class="form-control" rows="3">{{ $kategori->icerikler }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="durum" class="form-label">Durum</label>
                            <select name="durum" id="durum" class="form-select">
                                <option value="1" {{ $kategori->durum ? 'selected' : '' }}>Aktif</option>
                                <option value="0" {{ !$kategori->durum ? 'selected' : '' }}>Pasif</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="kapak_resmi" class="form-label">Kapak Resmi</label>
                            <input type="file" name="kapak_resmi" id="kapak_resmi" class="form-control">
                            @if($kategori->kapak_resmi)
                                <img src="{{ asset('storage/' . $kategori->kapak_resmi) }}" alt="Kapak Resmi" width="100" class="mt-2 img-thumbnail">
                            @endif
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success">Güncelle</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
