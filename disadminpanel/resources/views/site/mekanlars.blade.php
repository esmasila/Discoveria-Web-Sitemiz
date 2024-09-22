@extends('site.sablon')

@section('icerikalani')
    <!-- Start Hero Section -->
    <section class="cs_page_header cs_bg_filed cs_primary_bg" data-src="{{ asset('site/assets/images/tour_header_bg.jpg') }}">
        <div class="container">
            <div class="cs_page_header_text text-center">
                <h1 class="cs_page_title cs_fs_70 cs_white_color cs_bold">Popüler Mekanlar</h1>
                <p class="cs_page_subtitle cs_fs_24 mb-0">Modern & Güzel Mekanlar</p>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->
    <!-- Start Package Section -->
    <section>
        <div class="cs_height_140 cs_height_lg_80"></div>
        <div class="container">
            <div class="row cs_gap_y_24">
                @foreach ($mekanlar as $mekan)
                    <div class="col-lg-4">
                        <div class="cs_card cs_style_3 cs_white_bg">
                            <a class='cs_card_thumb position-relative cs_zoom' href="{{ route('site.mekandetay', ['mekanID' => $mekan->id]) }}">
                                <img src="{{ asset($mekan->kapak_resmi) ?? 'site/assets/images/package_img_5.jpg' }}" alt="Package Thumb" class="cs_zoom_in">
                                <div class="cs_package_badge cs_fs_18 cs_semibold cs_primary_color cs_primary_font position-absolute">{{ $mekan->acilis_saati }}</div>
                            </a>
                            <div class="cs_card_content">
                                <h2 class="cs_card_title cs_fs_24 cs_semibold"><a href="{{ route('site.mekandetay', ['mekanID' => $mekan->id]) }}">{{ $mekan->mekan_adi }}</a></h2>
                                <p class="cs_card_subtitle mb-0"><i class="fa-solid fa-globe cs_accent_color"></i> {{ $mekan->bolge->bolge_adi ?? 'Bölge Bilgisi Yok' }}</p>
                                <hr>
                                <div class="cs_card_action">
                                    <span class="cs_card_price cs_fs_24 cs_semibold cs_primary_color cs_primary_font mb-0">${{ $mekan->ucret }}</span>
                                    <a class='cs_btn cs_style_1 cs_fs_18 cs_semibold' href="{{ route('site.mekandetay', ['mekanID' => $mekan->id]) }}">DETAY</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="cs_height_140 cs_height_lg_80"></div>
    </section>
    <!-- End Package Section -->
@endsection
