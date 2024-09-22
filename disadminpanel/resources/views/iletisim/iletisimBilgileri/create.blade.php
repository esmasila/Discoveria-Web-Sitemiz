@extends('layouts.master')

@section('content')
    <h1>Yeni İletişim Bilgisi Ekle</h1>
    <form action="{{ route('iletisim_bilgileri.store') }}" method="POST">
        @csrf
        <label for="adres">Adres:</label>
        <input type="text" name="adres" id="adres">

        <label for="telefon1">Telefon 1:</label>
        <input type="text" name="telefon1" id="telefon1">

        <label for="telefon2">Telefon 2:</label>
        <input type="text" name="telefon2" id="telefon2">

        <label for="email1">Email 1:</label>
        <input type="email" name="email1" id="email1">

        <label for="email2">Email 2:</label>
        <input type="email" name="email2" id="email2">

        <label for="destek">Destek:</label>
        <input type="text" name="destek" id="destek">

        <button type="submit">Kaydet</button>
    </form>
@endsection
