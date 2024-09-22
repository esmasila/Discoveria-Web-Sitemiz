@extends('layouts.master')

@section('m-edit')
<div class="container">
    <h1>Mekan Düzenle</h1>
    <form action="{{ route('mekanlar.update', $mekan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Üst Bölge -->
        <div class="form-group mb-3">
            <label for="parent_id" class="form-label">Üst Bölge</label>
            <select name="parent_id" id="parent_id" class="form-select">
                <option value="">Ana Bölge</option>
                @foreach($bolgeler as $bolgeItem)
                    <option value="{{ $bolgeItem->id }}" {{ $bolgeItem->id == $mekan->parent_id ? 'selected' : '' }}>
                        {{ $bolgeItem->bolge_adi }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Bölge -->
        <div class="form-group">
            <label for="bolge_id">Bölge:</label>
            <select class="form-control" id="bolge_id" name="bolge_id" required>
                @foreach($bolgeler as $bolgeItem)
                    <option value="{{ $bolgeItem->id }}" {{ $mekan->bolge_id == $bolgeItem->id ? 'selected' : '' }}>
                        {{ $bolgeItem->bolge_adi }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Kategori -->
        <div class="form-group">
            <label for="kategori_id">Kategori:</label>
            <select class="form-control" id="kategori_id" name="kategori_id" required>
                @foreach($kategoriler as $kategori)
                    <option value="{{ $kategori->id }}" {{ $mekan->kategori_id == $kategori->id ? 'selected' : '' }}>
                        {{ $kategori->kategori_adi }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Mekan Adı -->
        <div class="form-group">
            <label for="mekan_adi">Mekan Adı:</label>
            <input type="text" class="form-control" id="mekan_adi" name="mekan_adi" value="{{ $mekan->mekan_adi }}" required>
        </div>

        <!-- Açılış Saati -->
        <div class="form-group">
            <label for="acilis_saati">Açılış Saati:</label>
            <input type="time" class="form-control" id="acilis_saati" name="acilis_saati" value="{{ $mekan->acilis_saati }}">
        </div>

        <!-- Kapanış Saati -->
        <div class="form-group">
            <label for="kapanis_saati">Kapanış Saati:</label>
            <input type="time" class="form-control" id="kapanis_saati" name="kapanis_saati" value="{{ $mekan->kapanis_saati }}">
        </div>

        <!-- Açıklama -->
        <div class="form-group">
            <label for="aciklama">Açıklama:</label>
            <textarea class="form-control" id="aciklama" name="aciklama">{{ $mekan->aciklama }}</textarea>
        </div>

        <!-- Kapak Resmi -->
        <div class="form-group">
            <label for="kapak_resmi" class="form-label">Kapak Resmi</label>
            <input type="file" name="kapak_resmi" id="kapak_resmi" class="form-control">
        </div>

        <!-- Resimler -->
        <div class="form-group">
            <label for="resimler">Resimler:</label>
            <textarea class="form-control" id="resimler" name="resimler">{{ $mekan->resimler }}</textarea>
        </div>

        <!-- Yaş Sınırı -->
        <div class="form-group">
            <label for="yas_siniri">Yaş Sınırı:</label>
            <input type="number" class="form-control" id="yas_siniri" name="yas_siniri" value="{{ $mekan->yas_siniri }}">
        </div>

        <!-- Ücret -->
        <div class="form-group">
            <label for="ucret">Ücret:</label>
            <input type="text" class="form-control" id="ucret" name="ucret" value="{{ $mekan->ucret }}">
        </div>
        <div class="form-group">
                <label for="populer_mi">Popüler Mi?</label>
                <select class="form-control" id="populer_mi" name="populer_mi" required>
                    <option value="1">Evet</option>
                    <option value="0">Hayır</option>
                </select>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mt-3">Güncelle</button>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </form>
</div>
<br><br><br>
@endsection
