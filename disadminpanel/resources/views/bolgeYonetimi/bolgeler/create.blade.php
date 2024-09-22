@extends('layouts.master')

@section('b-create')
<div class="container mt-5">
    <div class="card shadow-lg border-0" style="background-color: #f7f9fc;">
        <div class="card-header" style="background-color: #6f42c1; color: white;">
            <h4 class="mb-0">Bölge Oluştur</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('bolge.store') }}" method="POST" enctype="multipart/form-data">
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

                <div class="mb-4">
                    <label for="bolge_adi" class="form-label fw-bold" style="color: #6f42c1;">Bölge Adı</label>
                    <input type="text" name="bolge_adi" id="bolge_adi" class="form-control form-control-lg" placeholder="Bölge adını girin" style="border-color: #6f42c1;">
                </div>

                <div class="mb-4">
                    <label for="durum" class="form-label fw-bold" style="color: #6f42c1;">Durum</label>
                    <select name="durum" id="durum" class="form-select form-select-lg" style="border-color: #6f42c1;">
                        <option value="1">Yayında</option>
                        <option value="0">Yayında Değil</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="konum" class="form-label fw-bold" style="color: #6f42c1;">Konum Bilgileri</label>
                    <input type="text" name="konum_bilgileri" id="konum_bilgileri" class="form-control form-control-lg" placeholder="Konum bilgilerini girin" style="border-color: #6f42c1;">
                </div>

                <div class="mb-4">
                    <label for="aciklama" class="form-label fw-bold" style="color: #6f42c1;">Açıklama</label>
                    <textarea name="aciklama" id="aciklama" class="form-control form-control-lg" rows="4" placeholder="Açıklama yazın" style="border-color: #6f42c1;"></textarea>
                </div>

                <div class="mb-4">
                    <label for="kapak_resmi" class="form-label fw-bold" style="color: #6f42c1;">Kapak Resmi</label>
                    <input type="file" name="kapak_resmi" id="kapak_resmi" class="form-control form-control-lg" style="border-color: #6f42c1;">
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-lg" style="background-color: #6f42c1; color: white;">Oluştur</button>
                </div>
            </form>
        </div>
    </div>
</div>
<br><br>
@endsection
