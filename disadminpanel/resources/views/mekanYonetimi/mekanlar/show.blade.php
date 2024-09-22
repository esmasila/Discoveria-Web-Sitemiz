
@extends('layouts.master')

@section('m-show')
<div class="container">
    <h1>Mekan Detayları</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $mekan->mekan_adi }}</h5>
            <p class="card-text">Açılış Saati: {{ $mekan->acilis_saati }}</p>
            <p class="card-text">Kapanış Saati: {{ $mekan->kapanis_saati }}</p>
            <!-- Diğer detaylar burada -->
            <a href="{{ route('mekanlar.edit', $mekan->id) }}" class="btn btn-primary">Düzenle</a>
            <form action="{{ route('mekanlar.destroy', $mekan->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Silmek istediğinize emin misiniz?')">Sil</button>
            </form>
        </div>
    </div>
</div>
<br><br>
@endsection
