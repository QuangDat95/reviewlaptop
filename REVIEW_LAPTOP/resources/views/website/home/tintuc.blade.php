<section class="home_section1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jl_mright_wrapper jl_clear_at">
                    <div class="jl_mix_post">
                        <!-- giữ nguyên để đưa nội dung mới nhất đầu tiên -->

                        <div class="jl_m_center blog-style-one blog-small-grid">
                            <div class="jl_m_center_w jl_radus_e">
                                <div class="jl_f_img_bg"
                                    style="background-image: url('{{Storage::url($firstnews->hinh_anh)}}');">
                                </div><a href="{{route('readnews',$firstnews->id)}}" class="jl_f_img_link"></a> </span>
                                <div class="text-box"> <span class="jl_f_cat"><a class="post-category-color-text"
                                            style="background: #eba845;"
                                            href="{{route('readnews',$firstnews->id)}}">News</a></span>
                                    <h3> <a href="{{route('readnews',$firstnews->id)}}">{{$firstnews->tieu_de}}</a>
                                    </h3><span class="jl_post_meta"> <span class="jl_author_img_w"><i
                                                class="jli-user"></i><a href="{{route('readnews',$firstnews->id)}}"
                                                title="Posts by Spraya" rel="author">News</a></span><span
                                            class="post-date"><i
                                                class="jli-pen"></i>{{$firstnews->updated_at->format('d/m/Y h:m:s')}}</span></span>
                                </div>
                            </div>
                        </div>
                        <!-- đưa 4 nội dung ngẫu nhiên tiếp theo -->
                        @foreach($randomnews as $new)
                        <div class="jl_m_right">
                            <div class="jl_m_right_w">
                                <div class="jl_m_right_img jl_radus_e"><a href="{{route('readnews',$new->id)}}"><img
                                            width="120" height="120" src="{{Storage::url($new->hinh_anh)}}"
                                            class="attachment-sprasa_small_feature size-sprasa_small_feature wp-post-image"
                                            alt="" loading="lazy"></a></div>
                                <div class="jl_m_right_content">
                                    <h3 class="entry-title"><a
                                            href="{{route('readnews',$new->id)}}">{{$new->tieu_de}}</a></h3><span
                                        class="jl_post_meta"> <span class="jl_author_img_w"><i class="jli-user"></i><a
                                                href="{{route('readnews',$new->id)}}" title="Posts by Spraya"
                                                rel="author">News</a></span><span class="post-date"><i
                                                class="jli-pen"></i>{{$new->updated_at->format('d/m/Y h:m:s')}}</span></span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- endloop -->

                        <!-- kết th -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>