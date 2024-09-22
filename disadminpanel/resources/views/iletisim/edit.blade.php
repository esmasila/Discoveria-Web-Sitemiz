@extends('layouts.master')

@section('i-edit')
<div class="container">
    <h1>Edit Contact Form</h1>
    <form action="{{ route('forms.update', $form->id) }}" method="POST">
        @csrf
        @method('PUT')



        <!-- İletişim Formu Alanları -->
        <h3>İletişim Formu</h3>
        <div class="form-group">
            <label for="ad_soyad">Ad Soyad</label>
            <input type="text" class="form-control" id="ad_soyad" name="ad_soyad" value="{{ $form->ad_soyad }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $form->email }}" required>
        </div>
        <div class="form-group">
            <label for="konu">Konu</label>
            <input type="text" class="form-control" id="konu" name="konu" value="{{ $form->konu }}" required>
        </div>
        <div class="form-group">
            <label for="mesaj">Mesaj</label>
            <textarea class="form-control" id="mesaj" name="mesaj" required>{{ $form->mesaj }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
