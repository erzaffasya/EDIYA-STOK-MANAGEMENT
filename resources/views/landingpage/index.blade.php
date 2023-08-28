<x-guest-layout>
    <section class="cs_hero_1-wrap position-relative cs_hero_slider bg-primary">
        <div class="cs_swiper_parallax_slider_wrap">
            <div class="cs_parallax_slider loading">
                @foreach ($Hero as $item)
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div
                                class="cs_hero cs_style_1 d-flex align-items-center justify-content-center background-filled position-relative overflow-hidden">
                                <figure class="cs_swiper_parallax_bg" data-src="{{ asset($item->foto) }}">
                                    <img src="{{ asset($item->foto) }}" alt="Slider" class="cs_entity_img">
                                    <div class="bg-primary opacity-75 position-absolute w-100 h-100 start-0 top-0">
                                    </div>
                                </figure>
                                <div class="container">
                                    <div class="cs_hero_text position-relative cs_zindex_5 d-inline-block">
                                        <h2 class="text-white cs_mb_5 fw-normal cs_fs_18">
                                            {{ $item->title }}
                                        </h2>
                                        <h1 class="text-white cs_mb_16 cs_fs_60 cs_fs_lg_46"
                                            style="padding-right: 80px;">
                                            {{ $item->judul }}
                                        </h1>
                                        <p class="text-white cs_mb_20" style="padding-right: 90px;">
                                            {!! $item->deskripsi !!}
                                        </p>
                                        <div class="cs_hero_btn">
                                            <a href="/contact"
                                                class="cs_btn cs_style_1 cs_fs_14 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden"><span>Contact
                                                    Us</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- If we need navigation buttons -->
                <div
                    class="cs_slider_navigation d-flex cs_row_gap_15 flex-column position-absolute
            cs_zindex_4">
                    <div
                        class="cs_swiper_button_prev filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4">
                        <svg width="20" height="8" viewBox="0 0 20 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.461063 4.4077H19.538C19.7649 4.4077 19.9482 4.22437 19.9482 3.99745C19.9482 3.77052 19.7649 3.58719 19.538 3.58719H1.45209L3.94183 1.09745C4.10209 0.937189 4.10209 0.676933 3.94183 0.516677C3.78158 0.35642 3.52132 0.35642 3.36106 0.516677L0.170038 3.7077C0.0520878 3.82565 0.0174732 4.00129 0.0815754 4.15514C0.145678 4.3077 0.295677 4.4077 0.461063 4.4077Z"
                                fill="black" />
                            <path
                                d="M3.65549 7.60253C3.76062 7.60253 3.86575 7.56278 3.94524 7.48202C4.10549 7.32176 4.10549 7.0615 3.94524 6.90125L0.750365 3.70637C0.590108 3.54612 0.329853 3.54612 0.169597 3.70637C0.00934029 3.86663 0.00934029 4.12689 0.169597 4.28714L3.36447 7.48202C3.44524 7.56278 3.55036 7.60253 3.65549 7.60253Z"
                                fill="black" />
                        </svg>
                    </div>
                    <div
                        class="cs_swiper_button_next filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4">
                        <svg width="20" height="8" viewBox="0 0 20 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.5389 4.4077H0.462014C0.235091 4.4077 0.0517578 4.22437 0.0517578 3.99745C0.0517578 3.77052 0.235091 3.58719 0.462014 3.58719H18.5479L16.0582 1.09745C15.8979 0.937189 15.8979 0.676933 16.0582 0.516677C16.2184 0.35642 16.4787 0.35642 16.6389 0.516677L19.83 3.7077C19.9479 3.82565 19.9825 4.00129 19.9184 4.15514C19.8543 4.3077 19.7043 4.4077 19.5389 4.4077Z"
                                fill="#18191D" />
                            <path
                                d="M16.3445 7.60253C16.2394 7.60253 16.1342 7.56278 16.0548 7.48202C15.8945 7.32176 15.8945 7.0615 16.0548 6.90125L19.2496 3.70637C19.4099 3.54612 19.6701 3.54612 19.8304 3.70637C19.9907 3.86663 19.9907 4.12689 19.8304 4.28714L16.6355 7.48202C16.5548 7.56278 16.4496 7.60253 16.3445 7.60253Z"
                                fill="#18191D" />
                        </svg>
                    </div>
                </div>
                <div class="cs_hero_shape_1 position-absolute bottom-0 d-flex align-items-end h-100 cs_zindex_1">
                    <svg width="434" height="759" viewBox="0 0 434 759" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M240 0H660L430 759H0L240 0Z" fill="url(#paint0_linear_81_287)" />
                        <defs>
                            <linearGradient id="paint0_linear_81_287" x1="145" y1="256.5" x2="484"
                                y2="738" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#D9D9D9" stop-opacity="0" offset="none" />
                                <stop offset="1" stop-color="#0a98f5" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="cs_hero_shape_2 position-absolute start-0 cs_zindex_1">
                    <svg width="572" height="572" viewBox="0 0 572 572" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M572 -6.10352e-05L6.10352e-05 572L1.10293e-05 -1.10293e-05L572 -6.10352e-05Z"
                            fill="url(#paint0_linear_81_258)" fill-opacity="0.7" />
                        <defs>
                            <linearGradient id="paint0_linear_81_258" x1="388.254" y1="307.69" x2="-127.973"
                                y2="-227.83" gradientUnits="userSpaceOnUse">
                                <stop offset="0.0457759" stop-color="#18191D" stop-opacity="0" />
                                <stop offset="0.514455" stop-color="#FEC63F" stop-opacity="0.35" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->

    <!-- Animated Text -->
    <div class="cs_moving_wrap background-filled text-uppercase text-white d-flex align-items-center"
        data-src="tlandingpage/assets/img/moving_text_shape.png">

        <div class="cs_moving_text cs_fs_30 cs_fs_lg_26 d-flex align-items-center text-nowrap">
            @foreach ($HeroText as $item)
                <span>*{{ $item->hero }}</span>
            @endforeach
        </div>
        <div class="cs_moving_text cs_fs_30 d-flex align-items-center text-nowrap">
            @foreach ($HeroText as $item)
                <span>*{{ $item->hero }}</span>
            @endforeach
        </div>
        <div class="cs_moving_text cs_fs_30 d-flex align-items-center text-nowrap">
            @foreach ($HeroText as $item)
                <span>*{{ $item->hero }}</span>
            @endforeach
        </div>
    </div>
    <!-- End Animated Text -->


    <!-- Start About Section -->
    <section class="cs_pt_135 cs_pt_lg_75 cs_pb_140 cs_pb_lg_80 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 cs_mb_lg_55">
                    @if ($TentangSingkat)
                    <div class="cs_experience cs_style_1 position-relative">
                        <div class="cs_experience_thumb">
                            <img src="{{ asset($TentangSingkat->foto_1) }}" alt="Thumb"
                                class="position-relative cs_zindex_3 cs_rounded_15">
                                <div class="cs_experience_shape"><img src="tlandingpage/assets/img/experience_shape_1.png"
                                alt="Shape" class="moving_x"></div>
                            </div>
                            <div class="cs_experience_box background-filled text-center bg-white cs_rounded_10 position-absolute bottom-0 end-0 cs_zindex_3 d-flex flex-column justify-content-center align-items-center"
                            data-src="{{ asset($TentangSingkat->foto_2) }}">
                            <img src="tlandingpage/assets/img/experience_icon.svg" alt="Icon" class="cs_mb_5">
                            <h3
                            class="text-white cs_fs_60 cs_fs_lg_46 fw-bold lh_1 mb-0 d-flex justify-content-between">
                            <span data-count-to="{{ $TentangSingkat->experience }}" class="odometer"></span>
                            <span class="fw-light">+</span>
                        </h3>
                        <h2 class="cs_fs_18 fw-normal text-white m-0">Year Experience</h2>
                    </div>
                </div>
            </div>
                <div class="col-lg-6">
                    <div class="cs_about cs_style_1">
                        <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_15">
                            <div class="cs_section_heading_in">
                                <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft cs_mt_30"
                                    data-wow-duration="0.8s" data-wow-delay="0.2s">About Us</h3>
                                <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">{{ $TentangSingkat->judul }}</h2>
                                <p class="m-0">{!! $TentangSingkat->deskripsi !!}</p>
                            </div>
                        </div>

                        @endif
                        <div
                            class="d-flex align-items-center cs_row_gap_20 cs_column_gap_30 cs_column_gap_lg_20 flex-wrap">
                            <a href="{{ url('/about') }}"
                                class="cs_btn cs_style_1 cs_fs_14 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden"><span>Read
                                    More</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- End About Section -->

    <!-- Start Why Choose Us -->
    <section
        class="position-relative cs_iconbox_2_wrap cs_pt_135 cs_pt_lg_75 cs_pb_100 cs_pb_lg_40  cs_pt_20 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="position-relative cs_zindex_3">
                        <div
                            class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_60 cs_mb_lg_40 cs_column_gap_15 cs_row_gap_15">
                            <div class="cs_section_heading_in">
                                <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft"
                                    data-wow-duration="0.8s" data-wow-delay="0.2s">Why Choose Us</h3>
                                @if ($Benefit)
                                    <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20 text-white">{{ $Benefit->judul }}</h2>
                                    <p class="text-white m-0">
                                        {{ $Benefit->deskripsi }}
                                    </p>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($BenefitDetail as $item)
                                <div class="col-sm-6">
                                    <div class="cs_iconbox cs_style_1 d-flex align-items-center cs_mb_40">
                                        <div class="cs_iconbox_icon d-flex align-items-center justify-content-center cs_height_70 cs_width_70 cs_rounded_10 flex-none cs_mr_20 bg-accent cs_transition_4 wow zoomIn"
                                            data-wow-duration="0.8s" data-wow-delay="0.2s">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                                viewBox="0 0 100 100">
                                                <path
                                                    d="M60.53 10C64.66 15.41 65.52 22.42 63.11 28.8 64.3 26.96 65.05 24.91 65.33 22.74 66.11 16.61 63.41 10 60.53 10Z"
                                                    fill="#FFFFFF" />
                                                <path
                                                    d="M84.07 30.18C79.08 24.35 71.64 20 63.11 20 54.58 20 47.14 24.35 42.15 30.18 34.87 25.96 27.48 24 20 24V76C27.48 76 34.87 74.04 42.15 69.82 47.14 75.65 54.58 80 63.11 80 71.64 80 79.08 75.65 84.07 69.82 91.35 74.04 98.74 76 102.22 76V24C94.74 24 87.35 25.96 84.07 30.18Z"
                                                    fill="#FFFFFF" />
                                            </svg>

                                        </div>
                                        <div>
                                            <h2 class="text-white m-0 cs_fs_20 cs_fs_lg_18 cs_lh_base">{{$item->judul}}
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="col-xl-6"></div>
            </div>
        </div>
        <div class="cs_iconbox_left-img position-absolute bottom-0 start-0 h-100 background-filled"
            data-src="tlandingpage/assets/img/why_choose_us_left_img.jpeg"></div>
        @if ($Benefit)
            <div class="cs_iconbox_right-img position-absolute cs_zindex_1 bottom-0 end-0 background-filled"
                data-src="{{ asset($Benefit->foto) }}"></div>
        @endif
        <div class="cs_iconbox_logo position-absolute semi_rotate">
            <svg width="191" height="197" viewBox="0 0 191 197" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M100.397 107.26C113.305 117.648 127.237 124.564 139.602 126.736C139.678 126.749 139.75 126.756 139.825 126.77L155.856 32.5327C156.421 29.2004 153.306 26.3917 150.454 27.6622L68.5886 64.126C72.5569 77.7763 84.1472 94.1815 100.397 107.26Z"
                    fill="#888888" fill-opacity="0.2" />
                <path
                    d="M134.283 136.497C121.573 133.528 107.766 126.385 95.0023 116.124C77.395 101.968 65.2019 84.7963 60.4863 69.405L19.093 87.8249C15.8591 89.2634 16.1251 94.3774 19.5029 95.6938L80.2458 119.392C83.8188 120.786 86.8631 123.528 88.8105 127.109L121.922 187.961C123.762 191.345 128.37 190.622 129.013 186.848L137.475 137.15C136.42 136.96 135.357 136.747 134.283 136.497Z"
                    fill="#888888" fill-opacity="0.2" />
                <path
                    d="M135.873 127.406C123.172 124.44 109.376 117.306 96.6244 107.06C66.6205 82.949 52.3161 50.0723 64.0597 32.2106C75.8041 14.3519 108.507 19.2476 138.51 43.3581C148.326 51.2452 156.884 60.5001 163.258 70.1219C164.637 72.2018 164.251 75.0376 162.4 76.4586C160.549 77.878 157.932 77.3443 156.556 75.2663C150.711 66.4452 142.82 57.9237 133.733 50.622C108.446 30.3012 79.6787 24.3911 70.9164 37.7191C62.1543 51.0456 76.1154 79.4713 101.404 99.7925C114.23 110.099 128.065 116.965 140.36 119.115C151.717 121.106 160.191 118.825 164.221 112.695C168.424 106.304 166.766 97.4981 164.635 91.2345C163.822 88.8441 164.914 86.2656 167.073 85.4735C169.232 84.6816 171.642 85.9765 172.455 88.3683C176.466 100.157 175.977 110.755 171.077 118.207C165.196 127.151 153.932 130.671 139.362 128.118C138.21 127.918 137.045 127.679 135.873 127.406Z"
                    fill="#888888" fill-opacity="0.2" />
            </svg>
        </div>
    </section>
    <!-- End Why Choose Us -->

    <!-- Start Service Section -->
    <section class="background-filled cs_pt_133 cs_pt_lg_75 cs_pb_140 cs_pb_lg_80"
        data-src="tlandingpage/assets/img/services_bg.jpeg">
        <div class="container">
            <div
                class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_60 cs_mb_lg_40 cs_column_gap_15 cs_row_gap_15">
                <div class="cs_section_heading_in">
                    <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft"
                        data-wow-duration="0.8s" data-wow-delay="0.2s">Our Service List</h3>
                    <h2 class="cs_fs_48 cs_fs_lg_36 m-0">We Provide The Solution <br>For Our Clients</h2>
                </div>
                <div class="cs_section_heading_right">
                    <p class="cs_section_text m-0">{!! $getProfil->service!!}</p>
                </div>
            </div>
            <div class="row">
                @foreach ($KategoriProduk as $item)
                    <div class="col-xl-3 col-md-6">
                        <div
                            class="cs_service cs_style_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                            <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                                <div
                                    class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                                    <svg width="38" height="40" viewBox="0 0 38 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.44607 10.4345C7.69334 10.65 8.06841 10.62 8.27881 10.3706L9.70521 8.6801C9.91388 8.43275 9.88255 8.06315 9.63521 7.8544C9.38779 7.64572 9.01818 7.67713 8.80951 7.9244L7.76701 9.15994L7.40154 8.84158C7.15755 8.62893 6.78748 8.65432 6.57482 8.89846C6.36224 9.14244 6.38771 9.51252 6.63177 9.7251L7.44607 10.4345Z"
                                            fill="white" />
                                        <path
                                            d="M9.63521 18.7069C9.38779 18.4983 9.01818 18.5297 8.80951 18.7769L7.76701 20.0125L7.40154 19.6941C7.15755 19.4815 6.78748 19.5069 6.57482 19.751C6.36224 19.995 6.38771 20.3651 6.63177 20.5776L7.44607 21.2871C7.69334 21.5026 8.06841 21.4726 8.27881 21.2233L9.70521 19.5327C9.91388 19.2854 9.88248 18.9157 9.63521 18.7069Z"
                                            fill="white" />
                                        <path
                                            d="M9.63521 29.5595C9.38779 29.3508 9.01818 29.3822 8.80951 29.6295L7.76701 30.865L7.40154 30.5467C7.15755 30.334 6.78748 30.3594 6.57482 30.6035C6.36224 30.8475 6.38771 31.2176 6.63177 31.4302L7.44607 32.1396C7.69334 32.3552 8.06841 32.3252 8.27881 32.0758L9.70521 30.3853C9.91388 30.1379 9.88248 29.7682 9.63521 29.5595Z"
                                            fill="white" />
                                        <path
                                            d="M15.2129 8.30664H27.5983C27.922 8.30664 28.1842 8.04438 28.1842 7.7207C28.1842 7.39703 27.922 7.13477 27.5983 7.13477H15.2129C14.8892 7.13477 14.627 7.39703 14.627 7.7207C14.627 8.04438 14.8892 8.30664 15.2129 8.30664Z"
                                            fill="white" />
                                        <path
                                            d="M15.2129 11.1606H27.5983C27.922 11.1606 28.1842 10.8984 28.1842 10.5747C28.1842 10.251 27.922 9.98877 27.5983 9.98877H15.2129C14.8892 9.98877 14.627 10.251 14.627 10.5747C14.627 10.8984 14.8892 11.1606 15.2129 11.1606Z"
                                            fill="white" />
                                        <path
                                            d="M10.7185 4.84326H5.5559C4.6059 4.84326 3.83301 5.61615 3.83301 6.56615V7.72045C3.83301 8.04412 4.09527 8.30639 4.41895 8.30639C4.74262 8.30639 5.00488 8.04412 5.00488 7.72045V6.56615C5.00488 6.26232 5.25207 6.01514 5.5559 6.01514H10.7185C11.0223 6.01514 11.2694 6.26232 11.2694 6.56615V11.7287C11.2694 12.0326 11.0223 12.2797 10.7185 12.2797H5.5559C5.25207 12.2797 5.00488 12.0326 5.00488 11.7287V10.5169C5.00488 10.1933 4.74262 9.931 4.41895 9.931C4.09527 9.931 3.83301 10.1933 3.83301 10.5169V11.7287C3.83301 12.6787 4.6059 13.4515 5.5559 13.4515H10.7185C11.6684 13.4515 12.4413 12.6787 12.4413 11.7287V6.56615C12.4412 5.61615 11.6684 4.84326 10.7185 4.84326Z"
                                            fill="white" />
                                        <path
                                            d="M10.7185 15.6958H5.5559C4.6059 15.6958 3.83301 16.4687 3.83301 17.4187V22.5813C3.83301 23.5312 4.6059 24.3041 5.5559 24.3041H10.7185C11.6684 24.3041 12.4413 23.5312 12.4413 22.5813V17.4187C12.4412 16.4687 11.6684 15.6958 10.7185 15.6958ZM11.2693 22.5813C11.2693 22.8851 11.0222 23.1322 10.7184 23.1322H5.5559C5.25207 23.1322 5.00488 22.8851 5.00488 22.5813V17.4187C5.00488 17.1149 5.25207 16.8677 5.5559 16.8677H10.7185C11.0223 16.8677 11.2694 17.1149 11.2694 17.4187L11.2693 22.5813Z"
                                            fill="white" />
                                        <path
                                            d="M10.7185 26.5483H5.5559C4.6059 26.5483 3.83301 27.3212 3.83301 28.2712V33.4338C3.83301 34.3837 4.6059 35.1566 5.5559 35.1566H10.7185C11.6684 35.1566 12.4413 34.3837 12.4413 33.4338V28.2712C12.4412 27.3212 11.6684 26.5483 10.7185 26.5483ZM11.2693 33.4338C11.2693 33.7376 11.0222 33.9847 10.7184 33.9847H5.5559C5.25207 33.9847 5.00488 33.7376 5.00488 33.4338V28.2712C5.00488 27.9674 5.25207 27.7202 5.5559 27.7202H10.7185C11.0223 27.7202 11.2694 27.9674 11.2694 28.2712L11.2693 33.4338Z"
                                            fill="white" />
                                        <path
                                            d="M36.0414 5.19195C34.5098 4.52484 32.721 5.22773 32.0537 6.7593L31.8784 7.16164V4.14C31.8784 1.85719 30.0212 0 27.7384 0H4.27867C1.99586 0 0.138672 1.85719 0.138672 4.14V35.86C0.138672 38.1428 1.99586 40 4.27867 40H27.7384C30.0212 40 31.8784 38.1428 31.8784 35.86V22.3316C32.1787 21.6423 37.2757 9.94398 37.6087 9.17969C38.2777 7.64445 37.5766 5.86086 36.0414 5.19195ZM21.1896 31.6934H15.213C14.8894 31.6934 14.6271 31.9557 14.6271 32.2794C14.6271 32.603 14.8894 32.8653 15.213 32.8653H20.6816C20.4048 33.5308 20.2655 34.2334 20.2702 34.9561V34.9562L20.2962 38.8281H4.27867C2.64203 38.8281 1.31055 37.4966 1.31055 35.86V4.14C1.31055 2.50336 2.64203 1.17188 4.27867 1.17188H27.7384C29.375 1.17188 30.7065 2.50336 30.7065 4.14V9.85125C29.9661 11.5505 27.8855 16.3256 27.1616 17.9872H15.2131C14.8895 17.9872 14.6272 18.2495 14.6272 18.5731C14.6272 18.8968 14.8895 19.1591 15.2131 19.1591H26.651L25.9182 20.841H15.2131C14.8895 20.841 14.6272 21.1033 14.6272 21.427C14.6272 21.7506 14.8895 22.0129 15.2131 22.0129H25.4076L22.4331 28.8396H15.2131C14.8895 28.8396 14.6272 29.1019 14.6272 29.4255C14.6272 29.7492 14.8895 30.0115 15.2131 30.0115H21.9225L21.1896 31.6934ZM21.4421 34.9483C21.4409 34.7615 21.4532 34.5766 21.4762 34.3937C21.9887 34.617 21.2743 34.3057 24.572 35.7425C24.4537 35.8839 24.3267 36.0188 24.1891 36.1451L21.4669 38.642L21.4421 34.9483ZM30.7065 35.86C30.7065 37.4966 29.375 38.8281 27.7384 38.8281H22.9977L24.9812 37.0088C25.5362 36.4996 25.9702 35.8914 26.2712 35.2008L30.7065 25.0211V35.86ZM25.1968 34.7327C25.1963 34.7337 25.1958 34.7347 25.1953 34.7358L24.0294 34.2278L26.7874 27.8978C26.9166 27.6011 26.7809 27.2559 26.4843 27.1266C26.1875 26.9974 25.8423 27.1331 25.713 27.4297L22.955 33.7597L21.7891 33.2517C21.7896 33.2507 21.7899 33.2496 21.7904 33.2486L30.7481 12.6898L31.9141 13.1977L26.8071 24.9187C26.6779 25.2155 26.8136 25.5607 27.1102 25.69C27.4086 25.8199 27.7529 25.682 27.8815 25.3869L32.9884 13.6658L34.1544 14.1737C34.0119 14.5009 25.3323 34.4216 25.1968 34.7327ZM34.6226 13.0994L31.2162 11.6153L31.7977 10.2808L35.2041 11.7649L34.6226 13.0994ZM36.5344 8.71156L35.6721 10.6905L32.2658 9.20641L33.128 7.22742C33.5371 6.28828 34.6341 5.85711 35.5733 6.26633C36.5145 6.67633 36.9448 7.77 36.5344 8.71156Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ $item->slug }}"
                                        class="inline-block">{{ $item->judul }}</a></h2>
                            </div>
                            <p class="cs_mb_24">
                                {!! $item->deskripsi_singkat !!}
                            </p>
                            <div class="cs_service_thumb position-relative cs_rounded_5">
                                <a href="{{ route('landingpage.business', $item->slug) }}"
                                    class="cs_service_btn d-flex align-items-center justify-content-center rounded-circle position-absolute text-white">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20.8491 11.347C20.855 11.3381 20.8602 11.3289 20.8656 11.3198C20.8706 11.3114 20.8759 11.3032 20.8805 11.2946C20.8855 11.2853 20.8897 11.2757 20.8942 11.2663C20.8984 11.2573 20.9029 11.2484 20.9067 11.2392C20.9105 11.23 20.9136 11.2206 20.9169 11.2113C20.9205 11.2014 20.9243 11.1916 20.9274 11.1814C20.9302 11.1721 20.9322 11.1626 20.9346 11.1532C20.9372 11.1429 20.9401 11.1327 20.9422 11.1222C20.9444 11.1113 20.9456 11.1003 20.9472 11.0894C20.9485 11.0801 20.9503 11.0711 20.9512 11.0617C20.9532 11.0415 20.9543 11.0213 20.9543 11.001C20.9543 11.0007 20.9543 11.0004 20.9543 11.0001C20.9543 10.9998 20.9543 10.9994 20.9543 10.9991C20.9542 10.9789 20.9532 10.9586 20.9512 10.9384C20.9503 10.929 20.9485 10.92 20.9472 10.9108C20.9456 10.8998 20.9444 10.8888 20.9422 10.8779C20.9401 10.8674 20.9372 10.8572 20.9346 10.8469C20.9322 10.8375 20.9302 10.828 20.9274 10.8187C20.9243 10.8086 20.9205 10.7988 20.9169 10.7889C20.9136 10.7795 20.9105 10.7701 20.9067 10.7609C20.9029 10.7517 20.8984 10.7428 20.8941 10.7338C20.8897 10.7244 20.8855 10.7148 20.8805 10.7055C20.8759 10.6969 20.8706 10.6887 20.8656 10.6803C20.8602 10.6712 20.855 10.662 20.8491 10.6531C20.8428 10.6438 20.8359 10.635 20.8292 10.6261C20.8237 10.6187 20.8186 10.6112 20.8127 10.604C20.7996 10.588 20.7858 10.5727 20.7713 10.5581L15.026 4.81285C14.7819 4.56877 14.3862 4.56877 14.1421 4.81285C13.898 5.05692 13.898 5.45264 14.1421 5.69672L18.8204 10.375L0.88388 10.375C0.53871 10.375 0.258878 10.6548 0.258878 11C0.258878 11.3452 0.53871 11.625 0.88388 11.625L18.8204 11.625L14.1421 16.3033C13.8981 16.5474 13.8981 16.9431 14.1421 17.1872C14.3862 17.4312 14.7819 17.4313 15.026 17.1872L20.7713 11.442C20.7858 11.4274 20.7996 11.4121 20.8127 11.3962C20.8186 11.389 20.8237 11.3814 20.8292 11.374C20.8359 11.3651 20.8428 11.3563 20.8491 11.347Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                                <div class="cs_service_thumb-in position-relative-in background-filled h-100"
                                    data-src="{{ asset($item->foto) }}"></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Service Section -->

    <!-- Start Contact Section  -->
    <section class="background-filled overflow-hidden cs_pt_133 cs_pt_lg_75 cs_pb_140 cs_pb_lg_80"
        data-src="tlandingpage/assets/img/cta_bg.jpeg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_40">
                        <div class="cs_section_heading_in">
                            <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft"
                                data-wow-duration="0.8s" data-wow-delay="0.2s">Contact With Us</h3>
                            <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20 text-white">Let’s Work Together?</h2>
                            <p class="text-white m-0">{!!$getProfil->contact!!}</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center cs_mb_30">
                        <div
                            class="d-flex align-items-center justify-content-center cs_height_90 cs_width_90 cs_height_lg_80 cs_width_lg-80 cs_rounded_10 flex-none cs_mr_20 bg-accent">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M31.6128 24.7786C30.7939 23.9259 29.8062 23.47 28.7593 23.47C27.7209 23.47 26.7247 23.9175 25.8721 24.7701L23.2043 27.4295C22.9848 27.3113 22.7653 27.2015 22.5543 27.0918C22.2503 26.9398 21.9633 26.7963 21.7185 26.6443C19.2196 25.0572 16.9486 22.9888 14.7705 20.3126C13.7152 18.9787 13.006 17.8559 12.4911 16.7162C13.1833 16.083 13.8249 15.4245 14.4497 14.7914C14.6861 14.555 14.9224 14.3102 15.1588 14.0738C16.9317 12.3009 16.9317 10.0046 15.1588 8.23172L12.8541 5.92698C12.5924 5.66527 12.3222 5.39512 12.0689 5.12497C11.5624 4.60155 11.0305 4.06124 10.4818 3.5547C9.6629 2.74425 8.6836 2.31369 7.65364 2.31369C6.62368 2.31369 5.62749 2.74425 4.78327 3.5547C4.77482 3.56315 4.77482 3.56315 4.76638 3.57159L1.89601 6.46729C0.815398 7.5479 0.199112 8.86489 0.0640356 10.3929C-0.138579 12.8581 0.587457 15.1544 1.14465 16.6571C2.5123 20.3464 4.55533 23.7655 7.60299 27.4295C11.3007 31.8448 15.7498 35.3314 20.832 37.7881C22.7738 38.7083 25.3655 39.7974 28.2612 39.9831C28.4385 39.9916 28.6242 40 28.7931 40C30.7433 40 32.3811 39.2993 33.6643 37.9063C33.6727 37.8894 33.6896 37.881 33.6981 37.8641C34.1371 37.3322 34.6436 36.851 35.1755 36.3361C35.5385 35.9899 35.9099 35.6269 36.2729 35.247C37.1087 34.3774 37.5477 33.3644 37.5477 32.326C37.5477 31.2791 37.1003 30.2745 36.2476 29.4303L31.6128 24.7786ZM34.6351 33.6683C34.6267 33.6683 34.6267 33.6767 34.6351 33.6683C34.3059 34.0229 33.9682 34.3437 33.6052 34.6983C33.0564 35.2217 32.4993 35.7704 31.9758 36.3867C31.1232 37.2985 30.1185 37.729 28.8015 37.729C28.6749 37.729 28.5398 37.729 28.4132 37.7206C25.9058 37.5602 23.5758 36.5809 21.8282 35.7451C17.0499 33.4319 12.8541 30.1479 9.36742 25.9858C6.48861 22.5161 4.56377 19.308 3.28898 15.8635C2.50385 13.7614 2.21682 12.1236 2.34345 10.5787C2.42787 9.59093 2.80777 8.77203 3.50848 8.07132L6.3873 5.19251C6.80097 4.80416 7.23997 4.5931 7.67052 4.5931C8.20239 4.5931 8.63294 4.91391 8.9031 5.18406C8.91154 5.19251 8.91998 5.20095 8.92842 5.20939C9.4434 5.6906 9.93305 6.18869 10.448 6.72056C10.7097 6.99071 10.9799 7.26086 11.25 7.53946L13.5548 9.8442C14.4497 10.7391 14.4497 11.5664 13.5548 12.4613C13.31 12.7061 13.0736 12.951 12.8288 13.1873C12.1196 13.9134 11.4442 14.5888 10.7097 15.2473C10.6929 15.2641 10.676 15.2726 10.6675 15.2895C9.9415 16.0155 10.0766 16.7247 10.2285 17.2059C10.237 17.2312 10.2454 17.2565 10.2539 17.2818C10.8533 18.7339 11.6975 20.1016 12.9807 21.7309L12.9892 21.7394C15.3192 24.6097 17.7759 26.8469 20.4859 28.5607C20.832 28.7802 21.1866 28.9575 21.5243 29.1264C21.8282 29.2783 22.1153 29.4218 22.3601 29.5738C22.3938 29.5907 22.4276 29.616 22.4614 29.6329C22.7484 29.7764 23.0186 29.8439 23.2972 29.8439C23.9979 29.8439 24.4369 29.4049 24.5804 29.2614L27.4677 26.3742C27.7547 26.0871 28.2106 25.741 28.7424 25.741C29.2659 25.741 29.6964 26.0702 29.9581 26.3573C29.9666 26.3657 29.9666 26.3657 29.975 26.3742L34.6267 31.0259C35.4963 31.887 35.4963 32.7734 34.6351 33.6683Z"
                                    fill="white" />
                                <path
                                    d="M21.6168 9.51496C23.8287 9.88642 25.838 10.9333 27.442 12.5373C29.046 14.1413 30.0844 16.1506 30.4643 18.3625C30.5572 18.9197 31.0384 19.308 31.5872 19.308C31.6547 19.308 31.7138 19.2996 31.7813 19.2911C32.4061 19.1898 32.8197 18.5989 32.7184 17.9741C32.2625 15.2979 30.9962 12.8581 29.0629 10.9248C27.1296 8.99154 24.6898 7.7252 22.0136 7.26932C21.3889 7.16801 20.8064 7.58168 20.6966 8.19797C20.5869 8.81425 20.9921 9.41365 21.6168 9.51496Z"
                                    fill="white" />
                                <path
                                    d="M39.9542 17.6449C39.2028 13.238 37.126 9.22793 33.9349 6.03675C30.7437 2.84557 26.7336 0.768768 22.3267 0.017406C21.7104 -0.0923436 21.1279 0.32977 21.0182 0.946056C20.9169 1.57078 21.3305 2.1533 21.9553 2.26305C25.8894 2.92999 29.4773 4.79573 32.3308 7.64078C35.1843 10.4943 37.0416 14.0822 37.7086 18.0163C37.8014 18.5735 38.2826 18.9619 38.8314 18.9619C38.8989 18.9619 38.958 18.9534 39.0256 18.945C39.6418 18.8521 40.0639 18.2612 39.9542 17.6449Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-accent cs_mb_7">Have Any Question?</p>
                            <h2 class="text-white m-0 fw-medium cs_fs_22 cs_fs_lg_18 cs_lh_base"><a
                                    href="tel:+{{$getProfil->phone}}">+{{$getProfil->phone}}</a></h2>
                        </div>
                    </div>
                    <div class="d-flex align-items-center cs_mb_30">
                        <div
                            class="d-flex align-items-center justify-content-center cs_height_90 cs_width_90 cs_height_lg_80 cs_width_lg-80 cs_rounded_10 flex-none cs_mr_20 bg-accent">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M34.1388 5H5.86125C4.63868 5.00132 3.46656 5.48758 2.60207 6.35207C1.73758 7.21656 1.25132 8.38868 1.25 9.61125V30.3888C1.25132 31.6113 1.73758 32.7834 2.60207 33.6479C3.46656 34.5124 4.63868 34.9987 5.86125 35H34.1388C35.3613 34.9987 36.5334 34.5124 37.3979 33.6479C38.2624 32.7834 38.7487 31.6113 38.75 30.3888V9.61125C38.7487 8.38868 38.2624 7.21656 37.3979 6.35207C36.5334 5.48758 35.3613 5.00132 34.1388 5ZM5.86125 7.5H34.1388C34.6985 7.50066 35.2351 7.72331 35.6309 8.1191C36.0267 8.51489 36.2493 9.05151 36.25 9.61125V10.5675L20 21.0138L3.75 10.5675V9.61125C3.75066 9.05151 3.97331 8.51489 4.3691 8.1191C4.76489 7.72331 5.30151 7.50066 5.86125 7.5ZM34.1388 32.5H5.86125C5.30151 32.4993 4.76489 32.2767 4.3691 31.8809C3.97331 31.4851 3.75066 30.9485 3.75 30.3888V13.54L19.3237 23.5512C19.5254 23.681 19.7602 23.75 20 23.75C20.2398 23.75 20.4746 23.681 20.6763 23.5512L36.25 13.54V30.3888C36.2493 30.9485 36.0267 31.4851 35.6309 31.8809C35.2351 32.2767 34.6985 32.4993 34.1388 32.5Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-accent cs_mb_7">Send Email</p>
                            <h2 class="text-white m-0 fw-medium cs_fs_22 cs_fs_lg_18 cs_lh_base"> <a
                                    href="mailto:{{$getProfil->email}}">{{$getProfil->email}}</a>
                            </h2>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div
                            class="d-flex align-items-center justify-content-center cs_height_90 cs_width_90 cs_height_lg_80 cs_width_lg-80 cs_rounded_10 flex-none cs_mr_20 bg-accent">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.0002 0C12.0123 0 5.51367 6.49859 5.51367 14.4864C5.51367 24.3995 18.4777 38.9526 19.0296 39.5673C19.548 40.1447 20.4532 40.1437 20.9707 39.5673C21.5227 38.9526 34.4866 24.3995 34.4866 14.4864C34.4865 6.49859 27.988 0 20.0002 0ZM20.0002 36.6976C15.6371 31.5149 8.12242 21.29 8.12242 14.4866C8.12242 7.93703 13.4507 2.60875 20.0002 2.60875C26.5496 2.60875 31.8779 7.93703 31.8779 14.4865C31.8778 21.2902 24.3643 31.5133 20.0002 36.6976Z"
                                    fill="white" />
                                <path
                                    d="M20.0004 7.19797C15.9814 7.19797 12.7119 10.4676 12.7119 14.4865C12.7119 18.5054 15.9815 21.775 20.0004 21.775C24.0192 21.775 27.2887 18.5054 27.2887 14.4865C27.2887 10.4676 24.0192 7.19797 20.0004 7.19797ZM20.0004 19.1662C17.4199 19.1662 15.3207 17.067 15.3207 14.4865C15.3207 11.906 17.42 9.80672 20.0004 9.80672C22.5807 9.80672 24.68 11.906 24.68 14.4865C24.68 17.067 22.5807 19.1662 20.0004 19.1662Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-accent cs_mb_7">Address</p>
                            <h2 class="text-white m-0 fw-medium cs_fs_22 cs_fs_lg_18 cs_lh_base">{!!$getProfil->alamat!!}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1 cs_mt_lg_55">
                    <div class="cs_contact_wrap position-relative">
                        <form action="#"
                            class="cs_contact_form bg-white cs_pt_64 cs_pl_80 cs_pr_80 cs_pb_80 cs_pl_lg_30 cs_pr_lg_30 position-relative cs_rounded_20"
                            data-src="tlandingpage/assets/img/contact_bg_pattern.svg">
                            <div class="cs_section_heading cs_style_1 d-flex align-items-center text-center cs_mb_30">
                                <div class="cs_section_heading_in">
                                    <h2 class="cs_fs_48 cs_fs_lg_36 m-0">Contact Us</h2>
                                </div>
                            </div>
                            <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_15 bg-gray" type="text"
                                placeholder="Your Name">
                            <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_15 bg-gray" type="email"
                                placeholder="Your Email">
                            <textarea class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_30 bg-gray" placeholder="Message here ..."
                                cols="30" rows="4"></textarea>
                            <button
                                class="cs_btn cs_style_1 cs_fs_14 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden"><span>Submit
                                    Now</span></button>
                        </form>
                        <!-- <div class="cs_contact_image d-none d-xl-block wow fadeInRight" data-wow-duration="0.8s"
                            data-wow-delay="0.4s"><img src="tlandingpage/assets/img/contact_img_1.png"
                                alt=""></div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section  -->

    <!-- The Modal -->
    @if ($getPopup != null)
    <div class="modal" id="myModal" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <!-- <h4 class="modal-title">Modal Title</h4> -->
                    <div></div>
                </div>
                <!-- Modal Body with Image -->
                <div class="modal-body">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
                    <img src="{{ asset($getPopup->foto) }}" alt="Image" class="img-fluid">
                </div>
                <!-- Modal Footer -->
                <div class="modal-footer justify-content-between">
                    <!-- Empty column to push the Close button to the right -->
                    <div></div>
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                </div>
            </div>
        </div>
    @endif
</div>

</div>

    <!-- Start Brands -->
    <div class="cs_pt_140 cs_pb_140 cs_pt_lg_80">
        <div class="container">
            <div
                class="cs_brands d-flex justify-content-xl-between align-items-center cs_column_gap_25 cs_row_gap_25 flex-wrap justify-content-center">
                @foreach ($Partner as $item)
                    <div class="cs_brand"><img src="{{ asset($item->logo) }}" alt="{{ $item->judul }}"></div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Brands -->
    @push('scripts')
        <script>
            function breakLongSentence(sentence, maxLength) {
                // The JavaScript function code from the previous example goes here
            }

            // Example usage:
            const longSentence =
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Sed vel turpis nec purus varius ullamcorper eu vel turpis.";
            const maxLength = 30;

            const formattedSentence = breakLongSentence(longSentence, maxLength);

            // Update the content of the 'formattedSentence' div with the formatted result
            document.getElementById("formattedSentence").innerHTML = formattedSentence;
        </script>
    @endpush

    @push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            $('#myModal').modal('show');
        });
    </script>
    @endpush
</x-guest-layout>
