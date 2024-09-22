@extends('layouts.master')

@section('k-index')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h4>Kategoriler</h4>
            <a href="{{ route('kategoriler.create') }}" class="btn btn-primary float-end">Yeni Kategori Ekle</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kategori Adı</th>
                        <th>İçerik</th>
                        <th>Durum</th>
                        <th>Kapak Resmi</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kategoriler as $kategori)
                    <tr>
                        <td>{{ $kategori->id }}</td>
                        <td>{{ $kategori->kategori_adi }}</td>
                        <td>{{ $kategori->icerikler }}</td>
                        <td>{{ $kategori->durum ? 'Yayında' : 'Yayında Değil' }}</td>
                        <td>
                            @if($kategori->kapak_resmi)
                                <img src="/{{ $kategori->kapak_resmi }}" alt="Kapak Resmi" width="50">
                            @else
                                Resim Yok
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('kategoriler.edit', $kategori->id) }}" class="btn btn-warning btn-sm">Düzenle</a>
                            <form action="{{ route('kategoriler.destroy', $kategori->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Sil</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('styles')
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('scripts')
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
