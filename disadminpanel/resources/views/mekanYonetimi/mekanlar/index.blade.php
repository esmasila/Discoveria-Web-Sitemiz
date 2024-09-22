@extends('layouts.master')

@section('m-index')
<div class="container">
    <h1>Mekanlar Listesi</h1>
    <a href="{{ route('mekanlar.create') }}" class="btn btn-success">Yeni Mekan Ekle</a>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Mekan Adı</th>
                <th>İşlemler</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mekanlar as $mekan)
            <tr>
                <td>{{ $mekan->id }}</td>
                <td>{{ $mekan->mekan_adi }}</td>
                <td>
                    <a href="{{ route('mekanlar.show', $mekan->id) }}" class="btn btn-info">Görüntüle</a>
                    <a href="{{ route('mekanlar.edit', $mekan->id) }}" class="btn btn-primary">Düzenle</a>
                    <form action="{{ route('mekanlar.destroy', $mekan->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Silmek istediğinize emin misiniz?')">Sil</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<br><br>

@endsection
