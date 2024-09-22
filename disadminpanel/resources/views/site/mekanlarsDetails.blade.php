@extends('site.sablon')

@section('icerikalani')

    <!-- Start Hero Section -->
    <section class="cs_page_header cs_bg_filed cs_primary_bg" data-src="site/assets/images/destination_header_bg.jpg">
      <div class="container">
        <div class="cs_page_header_text text-center">
          <h1 class="cs_page_title cs_fs_70 cs_white_color cs_bold">{{ $mekan->mekan_adi }} Detayı</h1>
          <p class="cs_page_subtitle cs_fs_24 mb-0">Modern ve Güzel Mekanlar</p>
        </div>
      </div>
    </section>
    <!-- End Hero Section -->

    <!-- Start Destination Details Section -->
   <section>
    <div class="cs_height_140 cs_height_lg_80"></div>
    <div class="container">
      <div class="row cs_gap_y_50">
        <div class="col-lg-8">
          <div class="cs_post_details">
            <h2 class="cs_tour_details_title">{{ $mekan->mekan_adi }}</h2>
            <img src="{{ asset($mekan->kapak_resmi) }}" alt="Mekan Resmi">
            <p>{{ $mekan->aciklama }}</p>
            <hr>
          </div>

          <div class="cs_tabs">
            <ul class="cs_tab_links cs_style_1 cs_mp0">
              <li class="active"><a href="#tab_1" class="cs_primary_bg cs_white_color cs_radius_5">Tour Plan</a></li>
              <li><a href="#tab_2" class="cs_primary_bg cs_white_color cs_radius_5">Location</a></li>
              <li><a href="#tab_3" class="cs_primary_bg cs_white_color cs_radius_5">Gallery</a></li>
              <li><a href="#tab_4" class="cs_primary_bg cs_white_color cs_radius_5">Reviews</a></li>
            </ul>
            <div class="cs_tab_body">
              <div class="cs_tab active" id="tab_1">
                <ul class="cs_tour_plan_list cs_mp0">
                  <li class="cs_list_item">
                    <div class="cs_list_index cs_center"><span></span></div>
                    <div class="cs_list_content">
                     <h3 class="cs_list_item_title cs_fs_24 cs_semibold">Day 1: Departure</h3>
                     <p class="cs_list_item_subtitle mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat massa quis enim.</p>
                   </div>
                </li>

                </ul>
              </div>
              <div class="cs_tab" id="tab_2">
                @if($mekan->enlem && $mekan->boylam)
                  <iframe id="map" src="https://www.google.com/maps/embed/v1/place?key=API_KEY&q={{ $mekan->enlem }},{{ $mekan->boylam }}" allowfullscreen></iframe>
                @else
                  <p>Konum bilgisi mevcut değil.</p>
                @endif
              </div>

              <div class="cs_tab" id="tab_3">
                @if (is_string($mekan->resimler) && is_array(json_decode($mekan->resimler, true)))
                    <div class="cs_grid_3 cs_gallery_list cs_style_1">
                        @foreach(json_decode($mekan->resimler, true) as $resim)
                            <a href="{{ asset($resim) }}" class="cs_gallery_item cs_zoom">
                                <img src="{{ asset($resim) }}" alt="Gallery Image" class="cs_zoom_in">
                                <div class="cs_gallery_overlay"></div>
                                <div class="cs_gallery_icon position-absolute">
                                    <img src="{{ asset('site/assets/images/icons/plus_icon.svg') }}" alt="Icon">
                                </div>
                            </a>
                        @endforeach
                    </div>
                @else
                    <p>Galeri resimleri mevcut değil.</p>
                @endif
              </div>

              <div class="cs_tab" id="tab_4">

                <p>Henüz yorum yapılmamış.</p>
              </div>
            </div>
          </div>
        </div>


        <aside class="col-lg-4">
          <div class="cs_sidebar cs_style_1 cs_white_bg cs_right_sidebar">
            <div class="cs_info_widget cs_white_bg">
              <h3 class="cs_widget_title cs_fs_24 cs_medium">Bilgiler:</h3>
              <p class="cs_widget_subtitle">Mekan hakkında detaylı bilgiler aşağıdadır:</p>
              <ul class="cs_info_list cs_mp0">
                <li class="cs_info_item">
                  <h3 class="cs_info_title cs_fs_16 cs_semibold mb-0">Mekan Adı</h3>
                  <p class="cs_info_subtitle mb-0">{{ $mekan->mekan_adi }}</p>
                </li>
                <li class="cs_info_item">
                  <h3 class="cs_info_title cs_fs_16 cs_semibold mb-0">Açılış Saati</h3>
                  <p class="cs_info_subtitle mb-0">{{ $mekan->acilis_saati }}</p>
                </li>
                <li class="cs_info_item">
                  <h3 class="cs_info_title cs_fs_16 cs_semibold mb-0">Kapanış Saati</h3>
                  <p class="cs_info_subtitle mb-0">{{ $mekan->kapanis_saati }}</p>
                </li>
                <li class="cs_info_item">
                  <h3 class="cs_info_title cs_fs_16 cs_semibold mb-0">Yaş Sınırı</h3>
                  <p class="cs_info_subtitle mb-0">{{ $mekan->yas_siniri ?? 'Belirtilmemiş' }}</p>
                </li>
                <li class="cs_info_item">
                  <h3 class="cs_info_title cs_fs_16 cs_semibold mb-0">Ücret</h3>
                  <p class="cs_info_subtitle mb-0">{{ $mekan->ucret ? '$'.$mekan->ucret : 'Ücretsiz' }}</p>
                </li>
              </ul>
            </div>
          </div>
        </aside>
      </div>
    </div>
    <div class="cs_height_140 cs_height_lg_80"></div>
   </section>
   <!-- End Destination Details Section -->

@endsection
