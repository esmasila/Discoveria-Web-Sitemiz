@extends('layouts.master')

@section('i-index')
<div class="container">
    <h1>Contact Information and Forms</h1>
    <a href="{{ route('forms.create') }}" class="btn btn-success">Create New Record</a>

    <!-- İletişim Formları Bölümü -->
    <h3>İletişim Formları</h3>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>#</th>
                <th>Ad Soyad</th>
                <th>Email</th>
                <th>Konu</th>
                <th>Mesaj</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($forms as $form)
                <tr>
                    <td>{{ $form->id }}</td>
                    <td>{{ $form->ad_soyad }}</td>
                    <td>{{ $form->email }}</td>
                    <td>{{ $form->konu }}</td>
                    <td>{{ $form->mesaj }}</td>
                    <td>
                        <a href="{{ route('forms.show', $form->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('forms.edit', $form->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('forms.destroy', $form->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- İletişim Bilgileri Bölümü -->
    <h3>İletişim Bilgileri</h3>
    <div class="table-responsive">
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Adres</th>
                    <th>Telefon 1</th>
                    <th>Telefon 2</th>
                    <th>Email 1</th>
                    <th>Email 2</th>
                    <th>Destek</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contactInfos as $info)
                    <tr>
                        <td>{{ $info->id }}</td>
                        <td>{{ $info->adres }}</td>
                        <td>{{ $info->telefon1 }}</td>
                        <td>{{ $info->telefon2 }}</td>
                        <td>{{ $info->email1 }}</td>
                        <td>{{ $info->email2 }}</td>
                        <td>{{ $info->destek }}</td>
                        <td>
                            <a href="{{ route('contactInfo.show', $info->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('contactInfo.edit', $info->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('contactInfo.destroy', $info->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
