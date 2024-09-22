@extends('layouts.master')

@section('k-show')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h4>Kategori Detayları</h4>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="parent_id" class="form-label">Üst Kategori:</label>
                <p>{{ $kategori->parent ? $kategori->parent->kategori_adi : 'Ana Kategori' }}</p>
            </div>
            <div class="mb-3">
                <label for="kategori_adi" class="form-label">Kategori Adı:</label>
                <p>{{ $kategori->kategori_adi }}</p>
            </div>
            <div class="mb-3">
                <label for="icerikler" class="form-label">İçerik:</label>
                <p>{{ $kategori->icerikler }}</p>
            </div>
            <div class="mb-3">
                <label for="durum" class="form-label">Durum:</label>
                <p>{{ $kategori->durum ? 'Aktif' : 'Pasif' }}</p>
            </div>
            <div class="mb-3">
                <label for="kapak_resmi" class="form-label">Kapak Resmi:</label>
                @if($kategori->kapak_resmi)
                    <img src="/{{ $kategori->kapak_resmi }}" alt="Kapak Resmi" width="100" class="mt-2">
                @else
                    <p>Kapak Resmi Yok</p>
                @endif
            </div>
            <a href="{{ route('kategoriler.edit', $kategori->id) }}" class="btn btn-warning">Düzenle</a>
            <a href="{{ route('kategoriler.index') }}" class="btn btn-secondary">Geri Dön</a>
        </div>
    </div>
</div>
@endsection
