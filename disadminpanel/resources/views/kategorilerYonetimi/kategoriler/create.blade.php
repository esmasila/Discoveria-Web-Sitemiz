@extends('layouts.master')

@section('k-create')
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white text-center">
            <h4>Kategori Ekle</h4>
        </div>
        <div class="card-body p-4">
            <form action="{{ route('kategoriler.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="parent_id" class="form-label">Üst Kategori</label>
                    <select name="parent_id" id="parent_id" class="form-select">
                        <option value="">Ana Kategori</option>
                        @foreach($kategoriler as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->kategori_adi }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="kategori_adi" class="form-label">Kategori Adı</label>
                    <input type="text" name="kategori_adi" id="kategori_adi" class="form-control" placeholder="Kategori Adı Giriniz" required>
                </div>
                <div class="mb-3">
                    <label for="icerikler" class="form-label">İçerik</label>
                    <textarea name="icerikler" id="icerikler" class="form-control" rows="3" placeholder="Kategori İçeriğini Giriniz"></textarea>
                </div>
                <div class="mb-3">
                    <label for="durum" class="form-label">Durum</label>
                    <select name="durum" id="durum" class="form-select">
                        <option value="1">Yayında</option>
                        <option value="0">Yayında Değil</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="kapak_resmi" class="form-label">Kapak Resmi</label>
                    <input type="file" name="kapak_resmi" id="kapak_resmi" class="form-control">
                </div>
                <button type="submit" class="btn btn-success w-100">Kaydet</button>
            </form>
        </div>
    </div>
</div>
@endsection
