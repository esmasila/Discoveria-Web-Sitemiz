@extends('site.sablon')
@section('icerikalani')
    <!-- Start Hero Section -->
    <section class="cs_page_header cs_bg_filed cs_primary_bg" data-src="site/assets/images/destination_header_bg.jpg">
        <div class="container">
          <div class="cs_page_header_text text-center">
            <h1 class="cs_page_title cs_fs_70 cs_white_color cs_bold">
                Tek Blog</h1>
            <p class="cs_page_subtitle cs_fs_24 cs_semibold cs_white_color mb-0">Rahat & Harika Bir Gezi</p>
          </div>
        </div>
      </section>
      <!-- End Hero Section -->
     <!-- Start Blog Section -->
     <section>
      <div class="cs_height_140 cs_height_lg_80"></div>
      <div class="container">
        <div class="row cs_gap_y_50">
          <div class="col-lg-8">
            <article class="cs_post_details">
              <div class="position-relative">
                <img src="{{$blog->image}}" alt="Post Thumb">
                <span class="cs_post_label">{{$blog->title}}</span>
              </div>
              <ul class="cs_post_meta cs_mp0 cs_primary_color">
                <li><i class="fa-solid fa-calendar-days cs_accent_color"></i></li>
                <li><i class="fa-regular fa-user cs_accent_color"></i></li>
              </ul>


              <p>{{$blog->content}}</p>
              <blockquote></blockquote>

              <div class="row">
                <div class="col-sm-5">
                  <img src="{{$blog->image}}" alt="Destination Image">
                </div>
                <div class="col-sm-7">
                  <img src="site/assets/images/post_details_3.jpg" alt="Destination Image">
                </div>
              </div>
              <p></p>
            </article>
            <div class="cs_social_btns cs_primary_color">
              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
              <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
             </div>

     </section>
     @endsection
