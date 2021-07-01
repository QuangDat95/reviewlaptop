@extends('website.tintuc.trangchu')
@section('content')
<section id="content_main" class="clearfix jl_spost">
    <div class="container">
        <div class="row main_content">
            <div class="col-md-8 loop-large-post" id="content">
                <div class="widget_container content_page">
                    <!-- start post -->
                    <div class="post-2970 post type-post status-publish format-gallery has-post-thumbnail hentry category-business tag-inspiration tag-morning tag-tip tag-tutorial post_format-post-format-gallery"
                        id="post-2970">
                        <div class="single_section_content box blog_large_post_style">
                            <!---->
                            {!! $readnew->noi_dung !!}
                            <!---->
                            <div class="clearfix"></div>
                            <div class="postnav_w">
                                <div class="postnav_left">
                                </div>
                            </div>
                            <div class="auth">
                            </div>
                            <div id="respond" class="comment-respond">
                                <h3 id="reply-title" class="comment-reply-title">Để lại đánh giá</h3>
                                <form action="{{route('commentnew',$readnew->id)}}" method="post" id="commentform"
                                    class="comment-form">
                                    @csrf
                                    <!-- <p class="comment-notes"><span id="email-notes">Địa chỉ email được bảo mật</span>
                                    </p> -->
                                    <p class="comment-form-comment"><textarea class="u-full-width" id="comment"
                                            name="comment" cols="45" rows="8" aria-required="true"
                                            placeholder="Comment"></textarea></p>
                                    <div class="form-fields row"><span class="comment-form-author col-md-4"><input
                                                id="author" name="name" type="text" value="" size="30"
                                                placeholder="Họ và tên"></span>
                                        <!--<span
                                            class="comment-form-email col-md-4"><input id="email" name="email"
                                                type="text" value="" size="30" placeholder="Địa chỉ email"></span>-->
                                    </div>
                                    <!--<p class="comment-form-cookies-consent"><input id="checkbox" name="checkbox"
                                            type="checkbox" value="yes"><label for="wp-comment-cookies-consent">Lưu lại
                                            tên, địa chỉ email vào trình duyệt
                                            cho lần bình luận tiếp theo</label></p>-->

                                    <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit"
                                            value="Đăng bình luận"><input type="hidden" name="comment_post_ID"
                                            id="comment_post_ID"></p>
                                </form>

                            </div>
                            <!-- #respond -->
                        </div>
                    </div>
                    <div class="row list-comment">
                        <div class="col-md-12 comment-list">
                            <div class="col-md-9 comment">
                                @foreach($commentnews as $comment)
                                <ul>
                                    <li class="com-title" style="list-style-type: none;">
                                        <strong>{{$comment->name}}</strong><br>
                                        <span>{{date('d/m/Y H:i:s',strtotime($comment->created_at))}}</span>
                                    </li>
                                    <li class="com-review" style="list-style-type: none;">
                                        {{$comment->binh_luan}}
                                    </li>
                                </ul>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- end post -->
                    <div class="brack_space"></div>
                </div>
            </div>
            <div class="col-md-4" id="sidebar">
                <div id="sprasa_recent_post_text_widget-9" class="widget post_list_widget">
                    <div class="widget_jl_wrapper">
                        <div class="ettitle">
                            <div class="widget-title">
                                <h2 class="jl_title_c">Tin tức khác</h2>
                            </div>
                        </div>
                        <div class="bt_post_widget">
                            <!--loop-->
                            @foreach($randomnew as $new)
                            <div class="jl_m_right jl_sm_list jl_ml jl_clear_at">
                                <div class="jl_m_right_w">
                                    <div class="jl_m_right_img jl_radus_e"><a href="{{route('readnews',$new->id)}}"><img
                                                width="120" height="120" src="{{Storage::url($new->hinh_anh)}}"
                                                class="attachment-sprasa_small_feature size-sprasa_small_feature wp-post-image"
                                                alt="" loading="lazy"></a></div>
                                    <div class="jl_m_right_content">
                                        <h2 class="entry-title" style="text-overflow: ellipsis;
    overflow: hidden;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3;"> <a href="{{route('readnews',$new->id)}}" tabindex="-1">{!! $new->tieu_de !!}</a></h2><span
                                            class="jl_post_meta"><span class="jl_author_img_w"><i
                                                    class="jli-user"></i><a href="{{route('readnews',$new->id)}}"
                                                    title="Posts by Spraya" rel="author">New</a></span>
                                            <span class="post-date"><i
                                                    class="jli-pen"></i>{{$new->updated_at->format('d/m/Y h:i:s')}}</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!--loop-->
                        </div>
                    </div>
                </div>
                <!-- <div id="sprasa_recent_post_text_widget-9" class="widget post_list_widget">
                    <div class="widget_jl_wrapper">
                        <div class="ettitle">
                            <div class="widget-title">
                                <h2 class="jl_title_c">Bài viết đã xem</h2>
                            </div>
                        </div>
                        <div class="bt_post_widget">
                            loop
                            <div class="jl_m_right jl_sm_list jl_ml jl_clear_at">
                                <div class="jl_m_right_w">
                                    <div class="jl_m_right_img jl_radus_e"><a href="#"><img width="120" height="120"
                                                src="img/pexels-daria-shevtsova-1257105-120x120.jpg"
                                                class="attachment-sprasa_small_feature size-sprasa_small_feature wp-post-image"
                                                alt="" loading="lazy"></a></div>
                                    <div class="jl_m_right_content">
                                        <h2 class="entry-title"> <a href="#" tabindex="-1">This place really good place
                                                for reading</a></h2><span class="jl_post_meta"><span
                                                class="jl_author_img_w"><i class="jli-user"></i><a href="#"
                                                    title="Posts by Spraya" rel="author">Spraya</a></span>
                                            <span class="post-date"><i class="jli-pen"></i>July 24, 2016</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <loop
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </div>
    </div>
</section>
<!-- end content -->
@endsection