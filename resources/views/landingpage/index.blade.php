<x-guest-layout>
        <section class="mainslider" id="mainslider">
            <!-- Slider Hero Starts -->
<div class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
    <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
    <div id="rev_slider_slideshow" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
        <ul>
            @foreach ($Hero as $item)
            <!-- SLIDE  -->
            <li data-index="rs-{{ $item->urut }}" data-transition="boxslide" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="" data-rotate="0" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" data-title="Intro" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ asset($item->foto) }}" alt="" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['70','70','70','45']" data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 5; white-space: nowrap;">{{ $item->judul }}
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;">{{ $item->deskripsi }}
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-style_hover="cursor:default;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;"><i class="pe-7s-refresh"></i>
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['57','57','57','57']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:500;e:Power2.easeInOut;" data-transform_out="y:[100%];s:500;e:Power2.easeInOut;s:500;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2250" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 8; white-space: nowrap;">
                    <a href="{{ $item->link }}" class="btn">{{ $item->tombol }}</a>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>

        </section>
        <!-- Main Slider Section Ends -->
        <!-- About Section Starts -->
        <section id="tentangkami" class="about">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>TENTANG</span> KAMI</h1>
                    <h4></h4>
                </div>
                <!-- Main Heading Ends -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-user" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div>
                <!-- Divider Ends -->
                <!-- About Content Starts -->
                <div class="row about-content">
                    <div class="col-sm-12 col-md-6 col-lg-6 about-left-side">
                        <h3 class="title-about">Ediya <strong>Stock Management</strong></h3>
                        <hr>
                        @foreach ($About as $item)
                            <p>{{$item->deskripsi}}</p>
                        @endforeach
                        <!-- Tabs Heading Starts -->
                        <!-- <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#menu1">Our Mission</a></li>
                            <li><a data-toggle="tab" href="#menu2">Our advantages</a></li>
                            <li><a data-toggle="tab" href="#menu3">Our guarantees</a></li>
                        </ul> -->
                        <!-- Tabs Heading Ends -->
                        <!-- Tabs Content Starts -->
                        <!-- <div class="tab-content">
                            <div id="menu1" class="tab-pane fade in active">
                                <p>Kami berkomitmen untuk menyediakan alat dan pengetahuan terbaik dalam manajemen saham, membantu Anda mencapai tujuan keuangan Anda.</p>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <p>Keunggulan kami terletak pada kombinasi antara teknologi mutakhir dan keahlian investasi untuk memberikan solusi saham yang unggul dan mudah digunakan.</p>
                            </div>
                            <div id="menu3" class="tab-pane fade">
                                <p>Kami menawarkan jaminan kepuasan pelanggan yang lengkap, dengan dukungan pelanggan 24/7 dan akses ke sumber daya investasi yang berharga.</p>
                            </div>
                        </div> -->
                        <!-- Tabs Content Ends -->
                        <a class="custom-button" href="#">Klik Untuk Mendaftar</a>
                    </div>
                    <div class="col-md-6 col-lg-6 about-right-side">
                        <div class="full-image-container hovered">
                            <img class="img-responsive hidden-xs" src="{{ asset('tlandingpage/assets/img/slider-1.jpg')}}" alt="">
                            <div class="full-image-overlay">
                                <h3>Mengapa Memilih<strong> Ediya</strong></h3>
                                <ul class="list-why-choose-us">
                                    @foreach ($Benefit as $item)
                                        <li>{{$item->benefit}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Content Ends -->
            </div>
            <!-- Container Ends -->
        </section>
        <!-- About Section Ends -->
        <!-- Video Section Starts -->
        <section class="videopromotion">
            <div class="section-overlay">
                <!-- Container Starts -->
                <div class="container">
                    <!-- Main Heading Starts -->
                   @foreach ($VideoPromo as $item)
                   <div class="text-center top-text">
                        <h1>{{$item->judul}}</h1>
                        <h4>{{$item->subjudul}}</h4>
                    </div>
                    <!-- Main Heading Ends -->
                    <div class="video-content">
                        <p class="text-center">{{$item->deskripsi}}</p>
                        <!-- Video Play Starts -->
                        <div class="magnific-popup-gallery">
                            <div class="btn-wrapper text-center"><a class="image-wrap mfp-youtube" href="{{$item->video}}"></a></div>
                        </div>
                        <!-- Video Play Ends -->
                    </div>
                   @endforeach
                </div>
                <!-- Container Ends -->
            </div>
        </section>
        <!-- Video Section Ends -->
        <!-- Services Section Starts -->
        <section id="layanan" class="services">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>Dukungan dan</span> Layanan</h1>
                    <h4>Ediya Stock Management</h4>
                </div>
                <!-- Main Heading Starts -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-user-clock" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div>
                <!-- Divider Ends -->
                <!-- Services Starts -->
                <div class="row services-box">
                    <!-- Service Item Starts -->
                    @foreach ($Layanan as $item)
                    <div class="col-lg-4 col-md-6 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover fa {{$item->icon_layanan}}" data-headline="Sinyal Saham Unggul"></span>
                        <!-- Service Item Cover Ends -->
                        <!-- Service Item Content Starts -->
                        <div class="services-box-item-content fa {{$item->icon_layanan}}">
                            <h2>{{$item->nama_layanan}}</h2>
                            <p>{{$item->deskripsi_layanan}}</p>
                        </div>
                        <!-- Service Item Content Ends -->
                    </div>
                    @endforeach
                    <!-- Service Item Ends -->



                </div>
                <!-- Services Ends -->
            </div>
        </section>
        <!-- Services Section Ends -->
        <!-- Testimonials Section Starts -->
        <section class="testimonials">
            <div class="section-overlay">
                <!-- Container Starts -->
                <div class="container">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1>Apa kata Member <span>Ediya VIP Member ?</span></h1>
                    </div>
                    <!-- Main Heading Starts -->
                    <!-- Blockquotes Starts -->
                    <div id="quote-carousel" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper For Sliders Starts -->
                    <!-- Indicators Starts -->
                    <ol class="carousel-indicators">
                        @foreach ($Testimonial as $key => $item)
                            <li data-target="#quote-carousel" data-slide-to="{{ $key }}" {{ $key === 0 ? 'class=active' : '' }}></li>
                        @endforeach
                    </ol>
                    <!-- Indicators Ends -->

                    <div class="carousel-inner">
                        @foreach ($Testimonial as $key => $item)
                            <div class="item {{ $key === 0 ? 'active' : '' }}">
                                <blockquote>
                                    <img class="img-circle img-responsive" src="{{ asset($item->foto) }}" alt="client" style="width: 112px; height: 112px;">
                                    <p>"{{ $item->isi }}"</p>
                                    <h5>{{ $item->nama }}</h5>
                                    <h6>{{ $item->jabatan }}</h6>
                                </blockquote>
                            </div>
                        @endforeach
                    </div>
                    <!-- Wrapper For Sliders Ends -->
                </div>

                    <!-- Blockquotes Ends -->
                </div>
                <!-- Container Ends -->
            </div>
        </section>
        <!-- Testimonials Section Ends -->
        <!-- Portfolio Section Starts -->

        <!-- Portfolio Section Ends -->
        <!-- Facts Section Starts -->

        <!-- facts Section Ends -->
        <!-- Pricing Starts -->
        <section class="pricing" id="program">
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>Pilihan Program</span> Ediya VIP</h1>
                    <h4></h4>
                </div>
                <!-- Main Heading Starts -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-dollar" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div>
                <!-- Divider Ends -->
                <!-- Section Content Starts -->
                <div class="row pricing-tables-content">
                    <div class="pricing-container">
                        <!-- Pricing Tables Starts -->
                        <ul class="pricing-list bounce-invert">
                            @foreach ($PilihanProgam as $item)
                                <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <ul class="pricing-wrapper">
                                        <!-- Monthly Pricing Table Starts -->
                                        <li data-type="monthly" class="is-visible">
                                            <header class="pricing-header">
                                                <h2>{{ $item->namapaket }}</h2>
                                                <div class="price-content">
                                                    <span class="currency">Rp.</span>
                                                    <span class="value">{{ number_format($item->harga / 1000, 0) }}K</span>
                                                    <span class="duration">Bulan</span>
                                                </div>
                                            </header>
                                            <div class="pricing-body">
                                                <ul class="pricing-features">
                                                    <li><em>{{ $item->benefit1 }}</em></li>
                                                    <li><em>{{ $item->benefit2 }}</em></li>
                                                    <li><em>{{ $item->benefit3 }}</em></li>
                                                </ul>
                                            </div>
                                            <footer class="pricing-footer">
                                                <a class="custom-button slider-button scroll-to-target" href="#">Pilih Program</a>
                                            </footer>
                                        </li>
                                        <!-- Monthly Pricing Table Ends -->
                                        <!-- Yearly Pricing Table Starts -->
                                        <li data-type="yearly" class="is-hidden">
                                            <header class="pricing-header">
                                                <h2>{{ $item->namapaket }}</h2>
                                                <div class="price-content">
                                                    <span class="currency">Rp.</span>
                                                    <span class="value">{{ $item->harga * 12 }}</span>
                                                    <span class="duration">Tahun</span>
                                                </div>
                                            </header>
                                            <div class="pricing-body">
                                                <ul class="pricing-features">
                                                    <!-- Add Yearly-specific benefits here -->
                                                </ul>
                                            </div>
                                            <footer class="pricing-footer">
                                                <a class="custom-button" href="#">Pilih Program</a>
                                            </footer>
                                        </li>
                                        <!-- Yearly Pricing Table Ends -->
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Ends -->
        <!-- Newsletter Section Starts -->

        <!-- Newsletter Section Ends -->
        <!-- Blog Section Starts -->

        <!-- Blog Section Ends -->
        <section class="blog">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>Blog</span> Posts</h1>
                    <h4>Latest Articles</h4>
                </div>
                <!-- Main Heading Starts -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-comments" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div>
                <!-- Divider Ends -->
                <div class="row latest-posts-content">
                    <!-- Article Starts -->
                    @foreach ($Blog as $post)
                    <div class="col-sm-4 col-md-4 col-xs-12">
                            <div class="latest-post">
                                <!-- Featured Image Starts -->
                                <a class="img-thumb" href="{{ route('blog.show', $post->id) }}">
                                    <img class="img-responsive" src="{{ asset($post->gambar) }}" alt="{{ $post->judul }}">
                                </a>
                                <!-- Featured Image Ends -->
                                <!-- Article Content Starts -->
                                <div class="post-body">
                                    <h4 class="post-title">
                                        @php
                                        $words = explode(' ', $post->judul);
                                        $limit = 15;
                                        $ellipsis = count($words) > $limit ? '...' : '';
                                        $truncatedText = implode(' ', array_slice($words, 0, $limit)) . $ellipsis;
                                        @endphp
                                        <a href="{{ route('blog.show', $post->id) }}">{{ $truncatedText }}</a>
                                    </h4>
                                    <div class="post-text">
                                        @php
                                        $words = explode(' ', $post->isi);
                                        $limit = 15;
                                        $ellipsis = count($words) > $limit ? '...' : '';
                                        $truncatedText = implode(' ', array_slice($words, 0, $limit)) . $ellipsis;
                                        @endphp
                                        <p>{{ $truncatedText }}</p>
                                    </div>

                                    </div>
                                </div>
                                <!-- Post Date Starts -->
                                <div class="post-date">
                                    <span>{{ $post->created_at->format('d') }}</span>
                                    <span>{{ $post->created_at->format('M') }}</span>
                                </div>
                                <!-- Post Date Ends -->
                                <a class="custom-button" href="{{ route('landingpage.blog-detail', ($post->id)) }}">Read more</a>
                                <!-- Article Content Ends -->
                            </div>
                            @endforeach
                        </div>
                        <!-- Article Ends -->
                </div>

                <!-- Latest Blog Posts Ends -->
            </div>
        </section>
        <!-- Call To Action Section Starts -->

        <!-- facts Section Ends -->
        <!-- Logos Section Starts -->

</x-guest-layout>
