@extends('layouts.master')

@section('b-edit')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Bölge Düzenle</h4>
                    <i class="fas fa-map-marker-alt fa-lg"></i>
                </div>
                <div class="card-body">
                    <form action="{{ route('bolge.update', $bolge->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="parent_id" class="form-label">Üst Bölge</label>
                            <select name="parent_id" id="parent_id" class="form-select">
                                <option value="">Ana Bölge</option>
                                @foreach($bolgeler as $bolgeItem)
                                    <option value="{{ $bolgeItem->id }}" {{ $bolgeItem->id == $bolge->parent_id ? 'selected' : '' }}>
                                        {{ $bolgeItem->bolge_adi }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="id" class="form-label">ID</label>
                            <input type="text" name="id" id="id" class="form-control" value="{{ $bolge->id }}" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="bolge_adi" class="form-label">Bölge Adı</label>
                            <input type="text" name="bolge_adi" id="bolge_adi" class="form-control" value="{{ $bolge->bolge_adi }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="durum" class="form-label">Durum (Yayında mı?)</label>
                            <select name="durum" id="durum" class="form-select">
                                <option value="1" {{ $bolge->durum ? 'selected' : '' }}>Yayında</option>
                                <option value="0" {{ !$bolge->durum ? 'selected' : '' }}>Yayında Değil</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="konum_bilgileri" class="form-label">Konum Bilgileri</label>
                            <input type="text" name="konum_bilgileri" id="konum_bilgileri" class="form-control" value="{{ $bolge->konum_bilgileri }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="aciklama" class="form-label">Açıklama</label>
                            <textarea name="aciklama" id="aciklama" class="form-control" rows="3">{{ $bolge->aciklama }}</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="kapak_resmi" class="form-label">Kapak Resmi</label>
                            <input type="file" name="kapak_resmi" id="kapak_resmi" class="form-control">
                            @if ($bolge->kapak_resmi)
                                <img src="{{ asset('storage/' . $bolge->kapak_resmi) }}" alt="Kapak Resmi" class="img-thumbnail mt-2" style="width: 150px;">
                            @endif
                        </div>

                        <button type="submit" class="btn btn-success w-100 mt-3">
                            <i class="fas fa-save me-2"></i> Güncelle
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection
