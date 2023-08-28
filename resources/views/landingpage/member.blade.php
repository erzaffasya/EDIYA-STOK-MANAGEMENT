<x-guest-layout>
    <!-- Start Our Latest Project -->
    <section class="cs_pt_140 cs_pt_lg_80 cs_pb_140 cs_pb_lg_80">
        <div class="container">
            <div class="row">
                @foreach ($member as $item)
                    <div class="col-lg-4">
                        <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
                            <div class="cs_team_member position-relative cs_rounded_50">
                                <img class="w-100 cs_rounded_50" src="{{asset($item->foto)}}" alt="Member" style="max-height: 400px; min-height: 400px;">
                                <div
                                    class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                                    <a href="#"
                                        class="d-flex align-items-center justify-content-center cs_height_45 cs_width_45 border-0 text-white rounded-circle"><i
                                            class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"
                                        class="d-flex align-items-center justify-content-center cs_height_45 cs_width_45 border-0 text-white rounded-circle"><i
                                            class="fa-brands fa-twitter"></i></a>
                                    <a href="#"
                                        class="d-flex align-items-center justify-content-center cs_height_45 cs_width_45 border-0 text-white rounded-circle"><i
                                            class="fa-brands fa-dribbble"></i></a>
                                </div>
                            </div>
                            <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                                <h2 class="text-white m-0 cs_fs_26 cs_mb_3">{{$item->nama}}</h2>
                                <p class="text-white m-0">{{$item->jabatan}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Our Latest Project -->
</x-guest-layout>
