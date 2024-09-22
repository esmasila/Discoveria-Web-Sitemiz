@extends('layouts.master')

@section('content')
    <h1>İletişim Bilgisi Detayı</h1>
    <p>Adres: {{ $iletisimBilgisi->adres }}</p>
    <p>Telefon 1: {{ $iletisimBilgisi->telefon1 }}</p>
    <p>Telefon 2: {{ $iletisimBilgisi->telefon2 }}</p>
    <p>Email 1: {{ $iletisimBilgisi->email1 }}</p>
    <p>Email 2: {{ $iletisimBilgisi->email2 }}</p>
    <p>Destek: {{ $iletisimBilgisi->destek }}</p>
@endsection
