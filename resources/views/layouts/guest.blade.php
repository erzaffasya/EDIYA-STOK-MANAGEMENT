<!DOCTYPE html>
<html class="no-js" lang="en">
 <meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    @include('landingpage.partials.head')
  </head>
  <body>
    <div class="cs_preloader cs_accent_color cs_white_bg">
      <div class="cs_preloader bg-white d-flex justify-content-center align-items-center">
        <div class="cs_preloader_in">
          <img src="{{asset('tlandingpage/assets/img/favicon.png')}}" alt="Logo">
        </div>
      </div>
    </div>
    <!-- Start Header Section -->
    <header class="cs_site_header cs_style_1 cs_sticky_header cs_site_header_full_width">
      @include('landingpage.partials.header')
    </header>
    <!-- End Header Section -->

    <!-- Start Hero -->
    {{$slot}}
    <!-- End Blog Section -->
    <!-- Start Footer -->
    <footer class="cs_footer background-filled text-white" data-src="{{asset('tlandingpage/assets/img/footer_bg.jpeg')}}">
      @include('landingpage.partials.footer')
    </footer>

    @include('landingpage.partials.scripts')
  </body>
</html>
