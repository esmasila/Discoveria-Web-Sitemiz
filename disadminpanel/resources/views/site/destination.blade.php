@extends('site.sablon')

@section('icerikalani')
    <!-- Start Hero Section -->
    <section class="cs_page_header cs_bg_filed cs_primary_bg" data-src="/site/assets/images/destination_header_bg.jpg">
        <div class="container">
          <div class="cs_page_header_text text-center">
            <h1 class="cs_page_title cs_fs_70 cs_white_color cs_bold">Popüler Bölgeler</h1>
            <p class="cs_page_subtitle cs_fs_24 mb-0">Modern & Güzel Yerler</p>
          </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- Start Destination Section -->
    <section>
        <div class="cs_height_140 cs_height_lg_80"></div>
        <div class="container">
            <div class="cs_grid_1">
                @foreach($bolgeler as $bolge)
                    @if($bolge->parent_id == null)  <!-- Sadece üst bölgeleri göster -->
                    <div class="cs_grid_item">
                        <a class='cs_card cs_style_2 cs_zoom position-relative cs_radius_8' href="{{ route('bolge.detay', ['bolgeID' => $bolge->id]) }}">
                            <div class="cs_card_thumb w-100 h-100">
                                <img src="{{ $bolge->kapak_resmi }}" alt="Card Image" class="w-100 h-100 cs_zoom_in">
                            </div>
                            <div class="cs_card_content position-absolute">
                                <h2 class="cs_card_title cs_fs_35 cs_medium cs_white_color">{{ $bolge->bolge_adi }}</h2>
                                <p class="cs_card_subtitle cs_fs_18 cs_medium cs_white_color mb-0">{{ $bolge->ozet }}</p>
                            </div>
                        </a>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="cs_height_140 cs_height_lg_80"></div>
    </section>
    <!-- End Destination Section -->
@endsection
