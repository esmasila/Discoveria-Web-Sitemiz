@extends('layouts.master')

@section('i-show')
<div class="container">
    <h1>Contact Form Details</h1>

    <!-- İletişim Formu -->
    <h3>İletişim Formu</h3>
    @if($form)
    <table class="table">
        <tr>
            <th>Ad Soyad:</th>
            <td>{{ $form->ad_soyad }}</td>
        </tr>
        <tr>
            <th>Email:</th>
            <td>{{ $form->email }}</td>
        </tr>
        <tr>
            <th>Konu:</th>
            <td>{{ $form->konu }}</td>
        </tr>
        <tr>
            <th>Mesaj:</th>
            <td>{{ $form->mesaj }}</td>
        </tr>
    </table>
    @else
        <p>İletişim formu bulunamadı.</p>
    @endif

    <a href="{{ route('forms.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
