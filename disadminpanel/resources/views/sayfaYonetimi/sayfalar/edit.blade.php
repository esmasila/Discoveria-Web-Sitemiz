@extends('layouts.master')

@section('s-edit')
<div class="d-flex justify-content-center align-items-center mt-5">
    <div class="w-75">
        <h1 class="mb-4 text-center" style="color: #f77f00;">Sayfayı Düzenle</h1>
        <form action="{{ route('sayfalar.update', $sayfa->id) }}" method="POST" enctype="multipart/form-data" class="bg-light p-5 rounded shadow-lg border-0">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="slug" class="form-label" style="color: #f77f00;">Slug</label>
                <input type="text" name="slug" id="slug" class="form-control form-control-lg" style="border: 2px solid #000000;" value="{{ $sayfa->slug }}" required>
            </div>
            <div class="mb-4">
                <label for="sayfa_adi" class="form-label" style="color: #f77f00;">Sayfa Adı</label>
                <input type="text" name="sayfa_adi" id="sayfa_adi" class="form-control form-control-lg" style="border: 2px solid #000000;" value="{{ $sayfa->sayfa_adi }}" required>
            </div>
            <div class="mb-4">
                <label for="detay_icerigi" class="form-label" style="color: #f77f00;">Detay İçeriği</label>
                <textarea name="detay_icerigi" id="detay_icerigi" class="form-control form-control-lg" style="border: 2px solid #000000;" rows="6" required>{{ $sayfa->detay_icerigi }}</textarea>
            </div>
            <div class="form-check mb-4">
                <input type="checkbox" name="durum" id="durum" class="form-check-input" style="transform: scale(1.5);">
                <label for="durum" class="form-check-label" style="color: #f77f00;">Yayınla</label>
            </div>
            <div class="mb-5">
                <label for="kapak_resmi" class="form-label" style="color: #f77f00;">Kapak Resmi</label>
                <input type="file" name="kapak_resmi" id="kapak_resmi" class="form-control form-control-lg" style="border: 3px solid #006400; background-color: #f8f8f8;">
            </div>
            <button type="submit" class="btn btn-lg w-100" style="background-color: #f77f00; color: white;">Güncelle</button>
        </form>
    </div>
</div>
@endsection
