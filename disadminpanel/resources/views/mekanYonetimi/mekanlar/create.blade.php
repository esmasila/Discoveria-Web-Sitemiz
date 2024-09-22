@extends('layouts.master')

@section('m-create')
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-purple text-white">
            <h3 class="mb-0">Yeni Mekan Ekle</h3>
        </div>
        <div class="card-body">
            <!-- Validation Hatalarını Göster -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('mekanlar.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label for="parent_id" class="form-label">Üst Bölge</label>
                    <select name="parent_id" id="parent_id" class="form-select">
                        <option value="">Ana Bölge</option>
                        @foreach($bolgeler as $bolge)
                            <option value="{{ $bolge->id }}">{{ $bolge->bolge_adi }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="bolge_id">Bölge:</label>
                    <select class="form-control" id="bolge_id" name="bolge_id" required>
                        @foreach($bolgeler as $bolge)
                            <option value="{{ $bolge->id }}">{{ $bolge->bolge_adi }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="kategori_id">Kategori:</label>
                    <select class="form-control" id="kategori_id" name="kategori_id" required>
                        @foreach($kategoriler as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->kategori_adi }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="mekan_adi">Mekan Adı:</label>
                    <input type="text" class="form-control" id="mekan_adi" name="mekan_adi" required>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="acilis_saati">Açılış Saati:</label>
                        <input type="time" class="form-control" id="acilis_saati" name="acilis_saati">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="kapanis_saati">Kapanış Saati:</label>
                        <input type="time" class="form-control" id="kapanis_saati" name="kapanis_saati">
                    </div>
                </div>

                <div class="form-group">
                    <label for="aciklama">Açıklama:</label>
                    <textarea class="form-control" id="aciklama" name="aciklama" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="kapak_resmi" class="form-label">Kapak Resmi</label>
                    <input type="file" name="kapak_resmi" id="kapak_resmi" class="form-control">
                </div>

                <div class="form-group">
                    <label for="resimler">Resimler:</label>
                    <input type="text" name="resimler[]" id="resimler" class="form-control" multiple>
                </div>

                <div class="form-group">
                    <label for="yas_siniri">Yaş Sınırı:</label>
                    <input type="number" class="form-control" id="yas_siniri" name="yas_siniri">
                </div>

                <div class="form-group">
                    <label for="ucret">Ücret:</label>
                    <input type="text" class="form-control" id="ucret" name="ucret">
                </div>

                <div class="form-group">
                    <label for="populer_mi">Popüler Mi?</label>
                    <select class="form-control" id="populer_mi" name="populer_mi" required>
                        <option value="1">Evet</option>
                        <option value="0">Hayır</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary btn-block mt-3">Kaydet</button>
            </form>
        </div>
    </div>
</div>
<br><br>
@endsection
