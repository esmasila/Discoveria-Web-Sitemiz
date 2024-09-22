@extends('layouts.master')

@section('b-index')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-primary font-weight-bold">Bölgeler</h1>
        <!-- Yeni Bölge Ekle Butonu -->
        <a href="{{ route('bolge.create') }}" class="btn btn-secondary btn-lg shadow-sm">Yeni Bölge Oluştur</a>
    </div>

    <div class="card shadow-lg">
        <div class="card-body">
            <table class="table table-striped table-hover table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Parent ID</th>
                        <th>Bölge Adı</th>
                        <th>Durum</th>
                        <th>Konum Bilgileri</th>
                        <th>Kapak Resmi</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bolgeler as $bolge)
                    <tr>
                        <td>{{ $bolge->id}}</td>
                        <td>{{ $bolge->parent_id}}</td>
                        <td>{{ $bolge->bolge_adi}}</td>
                        <td>
                            <span class="badge {{ $bolge->durum ? 'badge-success' : 'badge-danger' }}">
                                {{ $bolge->durum ? 'Yayında' : 'Yayında Değil' }}
                            </span>
                        </td>
                        <td>{{ $bolge->konum_bilgileri }}</td>
                        <td>
                            <img src="{{ asset($bolge->kapak_resmi) }}" alt="Kapak Resmi" class="img-fluid rounded shadow-sm" style="max-width: 100px;">
                        </td>
                        <td>
                            <div class="btn-group" role="group" aria-label="İşlemler">
                                <a href="{{ route('bolge.edit', $bolge->id) }}" class="btn btn-sm btn-warning">Düzenle</a>
                                <form action="{{ route('bolge.destroy', $bolge->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Sil</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Tüm Bölgeleri Sil Butonu -->


        </div>
    </div>
</div>
<br><br>


@endsection
