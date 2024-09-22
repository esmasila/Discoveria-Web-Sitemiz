@extends('layouts.master')

@section('s-create')
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <form action="{{ route('sayfalar.store') }}" method="POST" enctype="multipart/form-data" class="bg-light p-5 rounded shadow-lg border-0 w-100" style="max-width: 800px;">
        @csrf
        <h1 class="mb-4 text-center" style="color: #6f42c1;">Yeni Sayfa Oluştur</h1>
        <div class="mb-4">
            <label for="slug" class="form-label" style="color: #6f42c1;">Slug</label>
            <input type="text" name="slug" id="slug" class="form-control form-control-lg" style="border: 2px solid #6f42c1;" required>
        </div>
        <div class="mb-4">
            <label for="sayfa_adi" class="form-label" style="color: #6f42c1;">Sayfa Adı</label>
            <input type="text" name="sayfa_adi" id="sayfa_adi" class="form-control form-control-lg" style="border: 2px solid #6f42c1;" required>
        </div>
        <div class="mb-4">
            <label for="detay_icerigi" class="form-label" style="color: #6f42c1;">Detay İçeriği</label>
            <textarea name="detay_icerigi" id="detay_icerigi" class="form-control form-control-lg" style="border: 2px solid #6f42c1;" rows="6" required></textarea>
        </div>
        <div class="form-check mb-4">
            <input type="checkbox" name="durum" id="durum" class="form-check-input" style="transform: scale(1.5);">
            <label for="durum" class="form-check-label" style="color: #6f42c1;">Yayınla</label>
        </div>
        <div class="mb-5">
            <label for="kapak_resmi" class="form-label" style="color: #6f42c1;">Kapak Resmi</label>
            <input type="file" name="kapak_resmi" id="kapak_resmi" class="form-control form-control-lg" style="border: 2px solid #6f42c1;">
        </div>
        <button type="submit" class="btn btn-lg w-100" style="background-color: #6f42c1; color: white;">Kaydet</button>
    </form>
</div>
@endsection

@section('styles')
    <!-- Bootstrap Default Theme -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('scripts')
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
