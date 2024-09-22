@extends('site.sablon')

@section('icerikalani')
    <!-- Start Hero Section -->
    <section class="cs_page_header cs_bg_filed cs_primary_bg" data-src="site/assets/images/destination_header_bg.jpg">
        <div class="container">
            <div class="cs_page_header_text text-center">
                <h1 class="cs_page_title cs_fs_70 cs_white_color cs_bold">İletişim</h1>
                <p class="cs_page_subtitle cs_fs_24 mb-0">Rahat & Harika Bir Gezi</p>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- Start Contact Section -->
    <section>
        <div class="cs_height_140 cs_height_lg_80"></div>
        <div class="container">
            <div class="row cs_gap_y_40">

                @foreach($contactInfos as $info)
                @if($info->id == $lastRecord->id)




                                <!-- Office Address -->
<div class="col-lg-3 col-md-6">
    <div class="cs_iconbox cs_style_5 cs_gray_bg cs_radius_5 text-center">
        <div class="cs_iconbox_icon cs_accent_bg cs_white_color cs_center cs_radius_5">
            <i class="fa-solid fa-location-dot"></i>
        </div>
        <h2 class="cs_iconbox_title cs_fs_24 cs_semibold">Ofis Adres</h2>
        <p class="cs_iconbox_subtitle mb-0">
            {{ $info->adres ?? 'Adres yok' }}<br>
        </p>
    </div>
</div>

<!-- Phone Call -->
<div class="col-lg-3 col-md-6">
    <div class="cs_iconbox cs_style_5 cs_gray_bg cs_radius_5 text-center">
        <div class="cs_iconbox_icon cs_accent_bg cs_white_color cs_center cs_radius_5">
            <i class="fa-solid fa-phone"></i>
        </div>
        <h2 class="cs_iconbox_title cs_fs_24 cs_semibold">Telefonlar</h2>
        <p class="cs_iconbox_subtitle mb-0">
            {{ $info->telefon1 ?? 'No Phone' }} <br>
            {{ $info->telefon2 ?? 'No Phone' }}
        </p>
    </div>
</div>

<!-- E-Mail Us -->
<div class="col-lg-3 col-md-6">
    <div class="cs_iconbox cs_style_5 cs_gray_bg cs_radius_5 text-center">
        <div class="cs_iconbox_icon cs_accent_bg cs_white_color cs_center cs_radius_5">
            <i class="fa-solid fa-envelope"></i>
        </div>
        <h2 class="cs_iconbox_title cs_fs_24 cs_semibold">E-Mail </h2>
        <p class="cs_iconbox_subtitle mb-0">
            {{ $info->email1 ?? 'No Email' }} <br>
            {{ $info->email2 ?? 'No Email' }}
        </p>
    </div>
</div>

<!-- Supports -->
<div class="col-lg-3 col-md-6">
    <div class="cs_iconbox cs_style_5 cs_gray_bg cs_radius_5 text-center">
        <div class="cs_iconbox_icon cs_accent_bg cs_white_color cs_center cs_radius_5">
            <i class="fa-solid fa-headset"></i>
        </div>
        <h2 class="cs_iconbox_title cs_fs_24 cs_semibold">Destekler</h2>
        <p class="cs_iconbox_subtitle mb-0">
            {{ $info->destek ?? 'No Support Info' }}
        </p>
    </div>
</div>
@endif
@endforeach
            </div>
        </div>
        <div class="cs_height_140 cs_height_lg_80"></div>
    </section>
    <!-- End Contact Section -->

    <!-- Start Contact Form Section -->
    <section class="cs_gray_bg">
        <div class="cs_height_135 cs_height_lg_75"></div>
        <div class="container">
            <div class="cs_section_heading cs_style_1 text-center">
                <h3 class="cs_section_title_up cs_ternary_font cs_accent_color cs_normal cs_fs_24">İLETİŞİM</h3>
                <h2 class="cs_section_title cs_semibold cs_fs_56 mb-0">İletişim Bilgileri</h2>
            </div>
            <div class="cs_height_55 cs_height_lg_40"></div>
            <form action="{{ route('forms.store') }}" method="POST" class="cs_contact_form row cs_gap_y_24">
                @csrf
                <div class="col-lg-6">
                    <div class="cs_input_field">
                        <input type="text" name="ad_soyad" placeholder="Enter Your Name" class="cs_form_field cs_radius_5">
                        <span><i class="fa-regular fa-user"></i></span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cs_input_field">
                        <input name="email" class="cs_form_field cs_radius_5 cs_white_bg" type="email" placeholder="Enter Your E-Mail">
                        <span><i class="fa-regular fa-envelope"></i></span>
                    </div>
                </div>
                <div class="col-lg-12">
                    <input name="konu" class="cs_form_field cs_radius_5 cs_white_bg" type="text" placeholder="Select Subjects">
                </div>
                <div class="col-lg-12">
                    <textarea name="mesaj" rows="5" class="cs_form_field cs_radius_5 cs_white_bg" placeholder="Write Message..."></textarea>
                </div>
                <div class="col-lg-12 text-center">
                    <button type="submit" class="cs_btn cs_style_1 cs_fs_18 cs_medium cs_radius_4">
                        <i class="fa-regular fa-envelope"></i> Mesaj Gönder
                    </button>
                </div>
            </form>
        </div>
        <div class="cs_height_100 cs_height_lg_60"></div>
    </section>
    <!-- End Contact Form Section -->

    <!-- Start Location Section -->
    <div class="cs_google_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1852.123499220757!2d34.742378720378824!3d38.674441455742155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1str!2str!4v1723537909161!5m2!1str!2str"
        allowfullscreen=""></iframe>
    </div>
    <!-- End Location Section -->
@endsection
