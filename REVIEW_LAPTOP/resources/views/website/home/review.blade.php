<section class="home_section2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="blockid_72be465" class="block-section jl-main-block" data-blockid="blockid_72be465"
                    data-name="jl_mgrid" data-page_max="11" data-page_current="1" data-author="none"
                    data-order="date_post" data-posts_per_page="6" data-offset="5">
                    <div class="jl_grid_wrap_f jl_clear_at g_3col">
                        <div class="jl-roww content-inner jl-col3 jl-col-row">
                            <div class="jl_sec_title">
                                <h3 class="jl_title_c"><span>Review Laptop</span></h3>
                            </div>
                            <!-- loop 6 bài review ngẫu nhiên -->
                            @foreach($noidungs as $noidung)
                            <div class="jl-grid-cols">
                                <div class="p-wraper post-2959">
                                    <div class="jl_grid_w">
                                        <div class="jl_img_box jl_radus_e"><a
                                                href="{{route('readreview',$noidung->id)}}">
                                                <img width="500" height="350"
                                                    src="{{Storage::url($noidung->maytinh->hinh_anh)}}"
                                                    class="attachment-sprasa_slider_grid_small size-sprasa_slider_grid_small wp-post-image"
                                                    alt="" loading="lazy"></a> </div>
                                        <div class="text-box">
                                            <h3><a
                                                    href="{{route('readreview',$noidung->id)}}">{{$noidung->maytinh->Ten_may}}</a>
                                            </h3><span class="jl_post_meta"> <span class="jl_author_img_w"><i
                                                        class="jli-user"></i><a
                                                        href="{{route('readreview',$noidung->id)}}"
                                                        title="Posts by Spraya" rel="author">Review</a></span><span
                                                    class="post-date"><i
                                                        class="jli-pen"></i>{{$noidung->updated_at->format('d/m/Y h:i:s')}}</span></span>
                                            <p style="text-overflow: ellipsis;
                                                        overflow: hidden;
                                                        display: -webkit-box;
                                                        -webkit-box-orient: vertical;
                                                        -webkit-line-clamp: 3;">
                                                {{$noidung->ND_ngan}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- endloop -->
                            <!---->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>