@extends('layouts.master')

@section('i-create')
<div class="container mt-5">
    <h1 class="text-center" style="color: #6f42c1;">Create New Record</h1> <!-- Mor başlık -->
    <form action="{{ route('contactInfo.store') }}" method="POST" class="mt-4">
        @csrf
        <h3 style="color: #6f42c1;">İletişim Bilgileri</h3> <!-- Mor alt başlık -->
        <div class="form-group mb-3">
            <label for="adres" style="color: #6f42c1;">Adres</label> <!-- Mor etiket -->
            <input type="text" class="form-control" id="adres" name="adres" required style="border-color: #6f42c1;">
        </div>
        <div class="form-group mb-3">
            <label for="telefon1" style="color: #6f42c1;">Telefon 1</label> <!-- Mor etiket -->
            <input type="text" class="form-control" id="telefon1" name="telefon1" required style="border-color: #6f42c1;">
        </div>
        <div class="form-group mb-3">
            <label for="telefon2" style="color: #6f42c1;">Telefon 2</label> <!-- Mor etiket -->
            <input type="text" class="form-control" id="telefon2" name="telefon2" style="border-color: #6f42c1;">
        </div>
        <div class="form-group mb-3">
            <label for="email1" style="color: #6f42c1;">Email 1</label> <!-- Mor etiket -->
            <input type="email" class="form-control" id="email1" name="email1" required style="border-color: #6f42c1;">
        </div>
        <div class="form-group mb-3">
            <label for="email2" style="color: #6f42c1;">Email 2</label> <!-- Mor etiket -->
            <input type="email" class="form-control" id="email2" name="email2" style="border-color: #6f42c1;">
        </div>
        <div class="form-group mb-3">
            <label for="destek" style="color: #6f42c1;">Destek</label> <!-- Mor etiket -->
            <input type="text" class="form-control" id="destek" name="destek" style="border-color: #6f42c1;">
        </div>

        <button type="submit" class="btn btn-primary w-100" style="background-color: #0b6244; border-color: #09713b;">
            Submit
        </button>
    </form>
</div>
@endsection
