@extends('layouts.master')

@section('content')
    <h1>İletişim Bilgilerini Düzenle</h1>
    <form action="{{ route('iletisim_bilgileri.update', $iletisimBilgisi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="adres">Adres:</label>
        <input type="text" name="adres" id="adres" value="{{ $iletisimBilgisi->adres }}">

        <label for="telefon1">Telefon 1:</label>
        <input type="text" name="telefon1" id="telefon1" value="{{ $iletisimBilgisi->telefon1 }}">

        <label for="telefon2">Telefon 2:</label>
        <input type="text" name="telefon2" id="telefon2" value="{{ $iletisimBilgisi->telefon2 }}">

        <label for="email1">Email 1:</label>
        <input type="email" name="email1" id="email1" value="{{ $iletisimBilgisi->email1 }}">

        <label for="email2">Email 2:</label>
        <input type="email" name="email2" id="email2" value="{{ $iletisimBilgisi->email2 }}">

        <label for="destek">Destek:</label>
        <input type="text" name="destek" id="destek" value="{{ $iletisimBilgisi->destek }}">

        <button type="submit">Güncelle</button>
    </form>
@endsection
