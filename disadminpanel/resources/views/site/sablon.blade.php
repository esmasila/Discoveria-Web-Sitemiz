<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from travelpropreview.netlify.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Aug 2024 07:36:24 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Discoveria">
  <!-- Favicon Icon -->
  <link rel="icon"  href="/site/assets/images/converted_image_new.jpg">
  <!-- Site Title -->
  <title> Discoveria </title>
  <link rel="stylesheet" href="/site/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="/site/assets/css/fontawesome.min.css">
  <link rel="stylesheet" href="/site/assets/css/animate.css">
  <link rel="stylesheet" href="/site/assets/css/slick.min.css">
  <link rel="stylesheet" href="/site/assets/css/odometer.css">
  <link rel="stylesheet" href="/site/assets/css/select2.min.css">
  <link rel="stylesheet" href="/site/assets/css/light_gallerr.min.css">
  <link rel="stylesheet" href="/site/assets/css/style.css">
  <link rel="stylesheet" href="/site/assets/css/style.css">
</head>

<body>


  <!-- Start Header Section -->
  <header class="cs_site_header cs_style_1 cs_fs_18 cs_sticky_header">
    <div class="cs_main_header">
      <div class="cs_main_header_in">
        <div class="cs_main_header_left">
          <a class='cs_site_branding' href='index.html'>
            <div class="icon-travel"></div>
            <img id="logo" src="/site/assets/images/converted_image_new.jpg" alt="">
          </a>
          <div class="main_h1"> DISCOVERIA</div>
        </div>
        <div class="cs_main_header_center">
          <div class="cs_nav cs_medium cs_primary_font">
            <ul class="cs_nav_list">
              <li >
                <a href="{{route('anasayfa')}}">Anasayfa</a>
              </li>
              <li class="menu-item-has-children"><a href="{{route('sayfa')}}">Hakkımızda</a>
                <ul>
                  <li><a href='index.html'>Misyonumuz</a></li>
                  <li><a href='index-v2.html'>Vizyonumuz</a></li>

                </ul>

              </li>
              <li >
                <a href="{{route('destination')}}">Bölgeler</a>

              </li>

              <li >
                <a href="{{route('site.blog')}}">Blog</a>
                <ul>
                  <li><a href='blog-details.html'>Blog Details</a></li>
                </ul>
              </li>
              <li><a href="{{route('site.contact')}}">İletişim</a></li>
            </ul>
          </div>
        </div>
        <div class="cs_main_header_right">
          <div class="cs_header_toolbox">
            <div>
              <button class="cs_search_btn cs_fs_24" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <div class="cs_fs_20 cs_medium">+90(530)414 1730</div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="cs_header_search">
    <div class="cs_header_search_in">
      <div class="container">
        <div class="cs_header_search_box">
          <form action="#" class="cs_search_form">
            <input type="text" placeholder="Search Here...">
            <button class="cs_search_btn">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M8.07914 0C3.62682 0 0 3.62558 0 8.07641C0 12.5272 3.62682 16.1599 8.07914 16.1599C9.98086 16.1599 11.7299 15.4936 13.1122 14.3875L16.4775 17.7498C16.6473 17.9126 16.8741 18.0024 17.1094 18C17.3446 17.9975 17.5695 17.9032 17.736 17.737C17.9025 17.5708 17.9972 17.3461 17.9999 17.111C18.0027 16.8758 17.9132 16.6489 17.7506 16.4789L14.3853 13.1148C15.4928 11.7308 16.16 9.97968 16.16 8.07641C16.16 3.62558 12.5315 0 8.07914 0ZM8.07914 1.79517C11.561 1.79517 14.3625 4.59577 14.3625 8.07641C14.3625 11.557 11.561 14.3647 8.07914 14.3647C4.59732 14.3647 1.79575 11.557 1.79575 8.07641C1.79575 4.59577 4.59732 1.79517 8.07914 1.79517Z"
                  fill="currentColor"></path>
              </svg>
            </button>
          </form>
          <button class="cs_close" type="button"><img src="/site/assets/images/close.svg" alt="Close"></button>
        </div>
      </div>
    </div>
    <div class="cs_sidenav_overlay"></div>
  </div>
  <!-- End Header Section -->
  @yield('icerikalani')


  <footer class="cs_footer cs_style_1 cs_white_color cs_bg_filed cs_primary_bg" data-src="/site/assets/images/footer_bg.jpg">
    <div class="cs_newsletter_1_wrap">
      <div class="container-fluid">
        <div class="cs_newsletter cs_style_1 cs_accent_bg">
          <div class="cs_newsletter_icon"><img src="/site/assets/images/icons/envlop.png" alt="Icon"></div>
          <h2 class="cs_newsletter_title cs_fs_40 cs_bold mb-0 cs_white_color">
            Haber bültenimize abone olun</h2>
          <form action="#" class="cs_newsletter_form">
            <input type="text" class="cs_newsletter_form_field" placeholder="Enter your email address ...">
            <button type="submit" class="cs_btn cs_style_1 cs_fs_18 cs_medium">
              Subscribe<svg width="20" height="10" viewBox="0 0 20 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M19.5866 5.69629H0.41235C0.184269 5.69629 0 5.46776 0 5.1849C0 4.90204 0.184269 4.67352 0.41235 4.67352H18.5906L16.0881 1.57004C15.927 1.37028 15.927 1.04587 16.0881 0.846109C16.2492 0.646349 16.5108 0.646349 16.6718 0.846109L19.8792 4.82374C19.9977 4.97076 20.0325 5.1897 19.9681 5.38147C19.9036 5.57164 19.7529 5.69629 19.5866 5.69629Z"
                  fill="currentColor"></path>
                <path
                  d="M16.3435 9.11986C16.2384 9.11986 16.1333 9.08012 16.0538 8.99935C15.8935 8.83909 15.8935 8.57884 16.0538 8.41858L19.2487 5.22371C19.4089 5.06345 19.6692 5.06345 19.8294 5.22371C19.9897 5.38396 19.9897 5.64422 19.8294 5.80448L16.6346 8.99935C16.5538 9.08012 16.4487 9.11986 16.3435 9.11986Z"
                  fill="currentColor"></path>
              </svg>
            </button>
          </form>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="cs_footer_main">
        <div class="cs_footer_main_col">
          <div class="cs_footer_widget">
            <div class="cs_text_widget">
              <img id="footer_logo1" src="/site/assets/images/converted_image_new.jpg" alt="Logo" />
              <span id="footer_text">DISCOVERIA</span>


            </div>
            <ul class="cs_contact_widget mb-0">
              <li>
                <p>
                    Bizi Arayın</p>
                <p class="cs_fs_20">+90(530)414 1730</p>
              </li>
              <li>
                <p>
                    Bize Mail Gönderin</p>
                <p class="cs_fs_20">hello@discoveria.com</p>
              </li>
              <li>
                <p>
                    Bizi takip edin</p>
                <div class="cs_social_btn cs_style_1 d-flex">
                  <a href="https://www.linkedin.com/" target="_blank" class="cs_center"><i
                      class="fa-brands fa-linkedin-in"></i>
                  </a>
                  <a href="https://twitter.com/" target="_blank" class="cs_center">
                    <i class="fa-brands fa-x-twitter"></i>
                  </a>
                  <a href="https://www.youtube.com/" target="_blank" class="cs_center"><i
                      class="fa-brands fa-youtube"></i>
                  </a>
                  <a href="https://slack.com/" target="_blank" class="cs_center">
                    <i class="fa-brands fa-slack"></i></a>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="cs_footer_main_col">
          <div class="cs_footer_widget">
            <h3 class="cs_footer_widget_title cs_fs_24 cs_semibold cs_white_color">Kullanışlı Linkler</h3>
            <ul class="cs_menu_widget">
              <li><a href="{{route('site.contact')}}">İletişim</a></li>
              <li><a href="{{route('site.blog')}}">Blog</a></li>
              <li><a href="#">Bazı Mekan Önerileri</a></li>
              <li><a href="#team">Takım Üyeleri</a></li>
            </ul>
          </div>
        </div>
        <div class="cs_footer_main_col">
          <div class="cs_footer_widget">
            <h3 class="cs_footer_widget_title cs_fs_24 cs_semibold cs_white_color">
                İletişim Bilgileri</h3>
            <ul class="cs_menu_widget">
              <li><a href='destination-details.html'>Emirates, United Arabian</a></li>
              <li><a href='destination-details.html'>Emirates, United Arabian</a></li>
              <li><a href='destination-details.html'>New York City, USA</a></li>
              <li><a href='destination-details.html'>New York City, USA</a></li>
              <li><a href='destination-details.html'>One Bridge, Belguim</a></li>
              <li><a href='destination-details.html'>One Bridge, Belguim</a></li>
              <li><a href='destination-details.html'>Golden Frame, Dubai</a></li>
              <li><a href='destination-details.html'>Golden Frame, Dubai</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="cs_footer_bottom">
        <div class="cs_copyright">Copyright © 2024 Discoveria All rights reserved.</div>
        <ul class="cs_menu_widget_2 cs_mp0">
          <li><a href="#">
            Hizmet Şartları</a></li>
        </ul>
      </div>
    </div>
  </footer>
  <!-- End footer -->
  <!-- Script -->
  <script src="/site/assets/js/jquery-3.6.0.min.js"></script>
  <script src="/site/assets/js/wow.min.js"></script>
  <script src="/site/assets/js/jquery.slick.min.js"></script>
  <script src="/site/assets/js/odometer.js"></script>
  <script src="/site/assets/js/ripples.min.js"></script>
  <script src="/site/assets/js/select2.min.js"></script>
  <script src="/site/assets/js/light_gallery.min.js"></script>
  <script src="/site/assets/js/main.js"></script>
</body>

<!-- Mirrored from travelpropreview.netlify.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Aug 2024 07:38:52 GMT -->

</html>
