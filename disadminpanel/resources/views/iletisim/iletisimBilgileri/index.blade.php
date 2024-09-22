@extends('layouts.master')

@section('content')
    <h1>İletişim Bilgileri</h1>
    <a href="{{ route('iletisim_bilgileri.create') }}">Yeni İletişim Bilgisi Ekle</a>
    <table>
        <thead>
            <tr>
                <th>Adres</th>
                <th>Telefon 1</th>
                <th>Telefon 2</th>
                <th>Email 1</th>
                <th>Email 2</th>
                <th>Destek</th>
                <th>İşlemler</th>
            </tr>
        </thead>
        <tbody>
            @foreach($iletisimBilgileri as $bilgi)
                <tr>
                    <td>{{ $bilgi->adres }}</td>
                    <td>{{ $bilgi->telefon1 }}</td>
                    <td>{{ $bilgi->telefon2 }}</td>
                    <td>{{ $bilgi->email1 }}</td>
                    <td>{{ $bilgi->email2 }}</td>
                    <td>{{ $bilgi->destek }}</td>
                    <td>
                        <a href="{{ route('iletisim_bilgileri.show', $bilgi->id) }}">Göster</a>
                        <a href="{{ route('iletisim_bilgileri.edit', $bilgi->id) }}">Düzenle</a>
                        <form action="{{ route('iletisim_bilgileri.destroy', $bilgi->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Sil</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
