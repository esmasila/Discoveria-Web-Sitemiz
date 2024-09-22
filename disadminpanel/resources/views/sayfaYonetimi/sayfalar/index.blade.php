@extends('layouts.master')

@section('s-index')
<div class="container-fluid mt-5 px-4">
    <h1 class="mb-4">Sayfalar Listesi</h1>

    <!-- Sayfa ekleme butonu -->
    <a href="{{ route('sayfalar.create') }}" class="btn btn-success mb-4">Yeni Sayfa Ekle</a>

    <!-- Eğer sayfalar verisi varsa tabloyu göster -->
    @if(isset($sayfalar) && count($sayfalar) > 0)
        <div class="card w-100">
            <div class="card-header">
                <h3 class="card-title">Sayfalar Listesi</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th style="width: 5%">ID</th>
                            <th style="width: 15%">Kapak Resmi</th>
                            <th style="width: 20%">Sayfa Adı</th>
                            <th style="width: 20%">Slug</th>
                            <th style="width: 15%">Durum</th>
                            <th style="width: 25%">İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sayfalar as $sayfa)
                            <tr>
                                <td>{{ $sayfa->id }}</td>
                                <td>
                                    @if($sayfa->kapak_resmi)
                                        <img src="{{ asset($sayfa->kapak_resmi) }}" alt="Kapak Resmi" style="width: 100px; height: auto;">
                                    @else
                                        <span>Resim yok</span>
                                    @endif
                                </td>
                                <td>{{ $sayfa->sayfa_adi }}</td>
                                <td>{{ $sayfa->slug }}</td>
                                <td>
                                    <span class="badge {{ $sayfa->durum ? 'badge-success' : 'badge-secondary' }}">
                                        {{ $sayfa->durum ? 'Yayınlandı' : 'Taslak' }}
                                    </span>
                                </td>
                                <td class="project-actions text-right">
                                    <a href="{{ route('sayfalar.edit', $sayfa->id) }}" class="btn btn-info btn-sm">
                                        <i class="fas fa-pencil-alt"></i> Düzenle
                                    </a>
                                    <form action="{{ route('sayfalar.destroy', $sayfa->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Bu sayfayı silmek istediğinizden emin misiniz?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i> Sil
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @else
        <div class="alert alert-info" role="alert">
            Gösterilecek sayfa yok.
        </div>
    @endif
</div>

@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
@endsection
