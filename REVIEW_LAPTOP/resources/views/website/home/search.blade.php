@include('website.include.menu')
@include('website.include.menu_right')
<div class="search_form_menu_personal">
    <div class="menu_mobile_large_close"> <span class="jl_close_wapper search_form_menu_personal_click"><span
                class="jl_close_1"></span><span class="jl_close_2"></span></span></div>
    <form method="get" class="searchform_theme" action="{{route('searchhome')}}">
        @csrf
        <input type="text" placeholder="Nhập từ cần tìm" name="key" class="search_btn" />
        <button type="submit" class="button"><i class="jli-search"></i></button>
    </form>
</div>
<div class="mobile_menu_overlay"></div>
<div class="jl_home_bw">
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
                                    <h3 class="jl_title_c"><span>Trang chủ</span></h3>
                                    <p>Tìm thấy {!!count($searchnew) + count($searchreview)!!} bài viết với từ khóa
                                        "{!!$req->key!!}"</p>
                                </div>
                                <!--startloop 6 bài viết đầu-->
                                @foreach($searchnew as $new)
                                <div class="jl-grid-cols">
                                    <div class="p-wraper post-2959">
                                        <div class="jl_grid_w">
                                            <div class="jl_img_box jl_radus_e"><a
                                                    href="{{route('readnews',$new->id)}}"><img width="500" height="350"
                                                        src="{{Storage::url($new->hinh_anh)}}"
                                                        class="attachment-sprasa_slider_grid_small size-sprasa_slider_grid_small wp-post-image"
                                                        alt="" loading="lazy"></a> <span class="jl_f_cat"></span>
                                            </div>
                                            <div class="text-box">
                                                <span class="jl_post_meta"> <span class="jl_author_img_w"><i
                                                            class="jli-user"></i><a
                                                            href="{{route('readnews',$new->id)}}"
                                                            title="Posts by Spraya" rel="author">New</a></span><span
                                                        class="post-date"><i
                                                            class="jli-pen"></i>{{$new->updated_at->format('d/m/Y h:m:s')}}</span></span>
                                                <p style="text-overflow: ellipsis;
                                                        overflow: hidden;
                                                        display: -webkit-box;
                                                        -webkit-box-orient: vertical;
                                                        -webkit-line-clamp: 3;">
                                                <h6><a href="{{route('readnews',$new->id)}}">{{$new->tieu_de}}</a></h6>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @foreach($searchreview as $review)
                                <div class="jl-grid-cols">
                                    <div class="p-wraper post-2959">
                                        <div class="jl_grid_w">
                                            <div class="jl_img_box jl_radus_e"><a
                                                    href="{{route('readreview',$review->id)}}"><img width="500"
                                                        height="350"
                                                        src="{{ Storage::url($review->maytinh->hinh_anh) }}"
                                                        class="attachment-sprasa_slider_grid_small size-sprasa_slider_grid_small wp-post-image"
                                                        alt="" loading="lazy"></a>
                                            </div>
                                            <div class="text-box">
                                                <h3><a
                                                        href="{{route('readreview',$review->id)}}">{{$review->maytinh->Ten_may}}</a>
                                                </h3><span class="jl_post_meta"> <span class="jl_author_img_w"><i
                                                            class="jli-user"></i><a
                                                            href="{{route('readreview',$review->id)}}"
                                                            title="Posts by Spraya" rel="author">Review</a></span><span
                                                        class="post-date"><i
                                                            class="jli-pen"></i>{{$review->updated_at->format('d/m/Y h:m:s')}}</span></span>
                                                <p style="text-overflow: ellipsis;
                                                        overflow: hidden;
                                                        display: -webkit-box;
                                                        -webkit-box-orient: vertical;
                                                        -webkit-line-clamp: 3;">{{$review->ND_ngan}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!--endloop-->
                            </div>
                            <!--end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include('website.include.footer')