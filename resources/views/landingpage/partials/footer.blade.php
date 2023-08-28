<div class="container">
    <div class="cs_footer_main cs_pt_30 cs_pb_30">
        <div class="row">
            <div class="col-lg-4">
                <div class="cs_footer_item cs_pt_20 cs_pb_20">
                    <div class="cs_text_widget">
                        @if ($getProfil)
                            <p>{!! $getProfil->profil !!}</p>
                        @endif
                    </div>
                    <!-- <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5">
              <a href="#" class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 text-white rounded-circle"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#" class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 text-white rounded-circle"><i class="fa-brands fa-twitter"></i></a>
              <a href="#" class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 text-white rounded-circle"><i class="fa-brands fa-linkedin-in"></i></a>
              <a href="#" class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 text-white rounded-circle"><i class="fa-brands fa-dribbble"></i></a>
            </div> -->
                </div>
            </div>
            <div class="col-lg-4 offset-lg-1">
                <div class="cs_footer_item cs_pt_20 cs_pb_20">
                    <h2 class="cs_widget_title text-white cs_fs_22 cs_mb_22">Quick Link</h2>
                    <ul class="cs_menu_widget text-uppercase">
                        <li><a href="/">Home</a></li>
                        <li><a href="{{url('about')}}">About</a></li>
                        <li><a href="{{url('contact')}}">Contact</a></li>
                        <li><a href="{{url('career')}}">Career</a></li>
                        <li><a href="{{url('member')}}">Our Member</a></li>
                        @foreach ($getKategoriProduk as $item)
                            <li><a href="{{ route('landingpage.business', $item->slug) }}">{{ $item->judul }}</a></li>
                        @endforeach
                        <!-- <li><a href="blog-list-with-sidebar.html">Blog</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="contact.html">Contact</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="cs_footer_item cs_pt_20 cs_pb_20">
                    <div class="cs_newsletter cs_style_1">
                        <h2 class="cs_newsletter_title text-white cs_fs_22 cs_mb_9">Get In Touch</h2>
                        @if ($getProfil)
                            <p>{!! $getProfil->alamat !!}</p>
                            <p>Phone: <a href="tel:+{{ $getProfil->phone }}">+{{ $getProfil->phone }}</a></p>
                            <p>Mobile: <a href="https://wa.me/{{ $getProfil->mobile }}">+{{ $getProfil->mobile }}</a>
                            </p>
                            <p>Email: <a href="mailto:{{ $getProfil->email }}">{{ $getProfil->email }}</a></p>
                        @endif

                        <!-- <p class="cs_newsletter_subtitle cs_mb_26"> At vero eos et accusamus et iusto odio as part dignissimos ducimus qui blandit. </p>
              <form action="#" class="cs_newsletter_form position-relative">
                <input type="email" class="cs_newsletter_input text-white cs_fs_14 cs_rounded_5 border-0 w-100 cs_pt_10" placeholder="Enter your mail">
                <button class="cs_newsletter_btn cs_fs_14 cs_rounded_5 cs_transition_4 bg-accent position-absolute text-uppercase">
                  <span>Go</span>
                </button>
              </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cs_copyright text-center cs_fs_124 cs_lh_lg cs_pt_36 cs_pb_36">
    <div class="container">
        <p class="m-0">Copyright © 2023 <a href="/">Elang Mandiri Sakti</a>. All rights reserved.</p>
    </div>
</div>
