@extends('layouts.master')

@section('b-show')
<div class="container">
    <h1>Bölge Detayları</h1>
    <div class="card">
        <div class="card-header">
            Bölge Adı: {{ $bolge->bolge_adi }}
        </div>
        <div class="card-body">
    <div class="mb-3">
        <label for="bolge_adi" class="form-label">Bölge Adı:</label>
        <p>{{ $bolge->bolge_adi }}</p>
    </div>
    <div class="mb-3">
        <label for="parent_id" class="form-label">Parent Bölge:</label>
        <p>{{ $bolge->parent ? $bolge->parent->bolge_adi : 'Ana Bölge' }}</p>
    </div>
    <div class="mb-3">
        <label for="durum" class="form-label">Durum:</label>
        <p>{{ $bolge->durum ? 'Yayında' : 'Yayında Değil' }}</p>
    </div>
    <div class="mb-3">
        <label for="konum_bilgileri" class="form-label">Konum Bilgileri:</label>
        <p>{{ $bolge->konum_bilgileri }}</p>
    </div>
    <div class="mb-3">
        <label for="aciklama" class="form-label">Açıklama:</label>
        <p>{{ $bolge->aciklama }}</p>
    </div>
    <div class="mb-3">
        <label for="kapak_resmi" class="form-label">Kapak Resmi:</label>
        @if($bolge->kapak_resmi)
            <img src="{{ asset('storage/' . $bolge->kapak_resmi) }}" alt="Kapak Resmi" width="100" class="mt-2">
        @else
            <p>Kapak Resmi Yok</p>
        @endif
    </div>
</div>

        <div class="card-footer">
            <a href="{{ route('bolge.edit', $bolge->id) }}" class="btn btn-warning">Düzenle</a>
            <form action="{{ route('bolge.destroy', $bolge->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Sil</button>
            </form>
            <a href="{{ route('bolge.index') }}" class="btn btn-secondary">Geri Dön</a>
        </div>
    </div>
</div>
@endsection
