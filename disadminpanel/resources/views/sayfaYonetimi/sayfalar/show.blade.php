@extends('layouts.master')

@section('s-show')
<div class="container mt-5">
    <h1 class="mb-4">{{ $sayfa->sayfa_adi }}</h1>

    <div class="mb-3">
        <label class="form-label">Slug:</label>
        <p>{{ $sayfa->slug }}</p>
    </div>

    <div class="mb-3">
        <label class="form-label">Detay İçeriği:</label>
        <p>{{ $sayfa->detay_icerigi }}</p>
    </div>

    <div class="mb-3">
        <label class="form-label">Durum:</label>
        <p>{{ $sayfa->durum ? 'Yayınlandı' : 'Taslak' }}</p>
    </div>

    <div class="mb-3">
        <label class="form-label">Kapak Resmi:</label>
        @if($sayfa->kapak_resmi)
            <img src="{{ asset($sayfa->kapak_resmi) }}" alt="Kapak Resmi" class="img-fluid">
        @else
            <p>Kapak resmi yok.</p>
        @endif
    </div>

    <a href="{{ route('sayfalar.index') }}" class="btn btn-secondary">Geri Dön</a>
    <a href="{{ route('sayfalar.edit', $sayfa->id) }}" class="btn btn-warning">Düzenle</a>
    <form action="{{ route('sayfalar.destroy', $sayfa->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Bu sayfayı silmek istediğinizden emin misiniz?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Sil</button>
    </form>
</div>
@endsection
