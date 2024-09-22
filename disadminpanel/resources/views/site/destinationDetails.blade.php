@extends('site.sablon')

@section('icerikalani')
    <!-- Start Hero Section -->
    <section class="cs_page_header cs_bg_filed cs_primary_bg" data-src="/site/assets/images/destination_single_bg.jpg">
        <div class="container">
            <div class="cs_page_header_text text-center">
                <h1 class="cs_page_title cs_fs_70 cs_white_color cs_bold">{{ $ustBolge->bolge_adi }}</h1>
                <p class="cs_page_subtitle cs_fs_24 mb-0">Alt Bölgeler</p>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- Start Alt Bölgeler Section -->
    <section>
        <div class="cs_height_140 cs_height_lg_80"></div>
        <div class="container">
            <div class="cs_grid_1">
                @foreach($altBolgeler as $bolge)
                <div class="cs_grid_item">
                    <a class='cs_card cs_style_2 cs_zoom position-relative cs_radius_8' href="{{route('bolge.mekanlar', ['bolgeID' => $bolge->id])}}">
                        <div class="cs_card_thumb w-100 h-100">
                            <img src="{{ asset($bolge->kapak_resmi) }}" alt="{{ $bolge->bolge_adi }} Resmi" class="w-100 h-100 cs_zoom_in">
                        </div>
                        <div class="cs_card_content position-absolute">
                            <h2 class="cs_card_title cs_fs_35 cs_medium cs_white_color">{{ $bolge->bolge_adi }}</h2>
                            <p class="cs_card_subtitle cs_fs_18 cs_medium cs_white_color mb-0">{{ $bolge->ozet }}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <div class="cs_height_140 cs_height_lg_80"></div>
    </section>
@endsection
