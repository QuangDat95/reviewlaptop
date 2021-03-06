<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9" lang="en-US"> <![endif]-->
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- Title-->
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" href="img/favicon.png" type="image/x-icon" />
    <!-- Stylesheets-->
    <link rel="stylesheet" href="{{ url('/') }}/website/css/style.css" type="text/css" media="all" />
    <!-- end head -->
</head>

<body class="mobile_nav_class jl-has-sidebar">
    <div class="options_layout_wrapper jl_clear_at jl_radius jl_none_box_styles jl_border_radiuss jl_en_day_night">
        <div class="options_layout_container full_layout_enable_front">
            <header
                class="header-wraper jl_header_magazine_style two_header_top_style header_layout_style3_custom jl_cus_top_share">
                <!-- Start Main menu -->
                <div class="jl_blank_nav"></div>
                <div id="menu_wrapper" class="menu_wrapper jl_menu_sticky jl_stick">
                    <div class="container">
                        <div class="row">
                            <div class="main_menu col-md-12">
                                <div class="logo_small_wrapper_table">
                                    <div class="logo_small_wrapper">
                                        <!-- begin logo -->
                                        <a href="{{route('home')}}"><img src="{{ url('/') }}/website/img/logo_n.jpg"
                                                alt="sprasa" /></a>
                                        <!-- end logo -->
                                    </div>
                                </div>
                                <div class="search_header_menu jl_nav_mobile">
                                    <div class="menu_mobile_icons">
                                        <div class="jlm_w"><span class="jlma"></span><span class="jlmb"></span><span
                                                class="jlmc"></span></div>
                                    </div>
                                    <div class="search_header_wrapper search_form_menu_personal_click"><i
                                            class="jli-search"></i></div>
                                </div>
                                <div class="menu-primary-container navigation_wrapper jl_cus_share_mnu">
                                    <ul id="mainmenu" class="jl_main_menu">
                                        <li class="menu-item current-menu-item current_page_item"> <a
                                                href="{{route('home')}}">Trang ch???<span class="border-menu"></span></a>
                                        </li>
                                        <li class="menu-item menu-item-has-children"> <a
                                                href="{{route('homereview')}}">T???t c??? c??c h??ng<span
                                                    class="border-menu"></span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="{{ route('dell') }}">DELL</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('asus') }}">ASUS</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('hp')}}">HP</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('lenovo')}}">LENOVO</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('acer')}}">ACER</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menupost"> <a href="{{route('homenew')}}">Tin t???c<span
                                                    class="border-menu"></span> <span class="jl_menu_lb"
                                                    style="background: #f74539 !important;"><span class="jl_lb_ar"
                                                        style="border-top: 3px solid #f74539 !important;"></span>News!</span>
                                            </a>
                                            <ul class="sub-menu menu_post_feature">
                                                <li>
                                                    <div id="sprasa_recent_large_widgets-2"
                                                        class="widget main_post_style">
                                                        <h3 class="widget-title"><span>Recent Posts</span></h3>
                                                        <div class="jl_grid_overlay jl_w_menu jl_clear_at">
                                                            @foreach($news as $new)
                                                            <div class="jl_grid_overlay_col">
                                                                <div class="jl_grid_verlay_wrap jl_radus_e">
                                                                    <div class="jl_f_img_bg"
                                                                        style="background-image: url('{{Storage::url($new->hinh_anh)}}');">
                                                                    </div><a href="{{route('readnews',$new->id)}}"
                                                                        class="jl_f_img_link"></a>
                                                                    <div class="jl_f_postbox">
                                                                        <h3 class="jl_f_title"> <a
                                                                                href="{{route('readnews',$new->id)}}">{{$new->tieu_de}}</a>
                                                                        </h3><span class="jl_post_meta"> <span
                                                                                class="jl_author_img_w"><i
                                                                                    class="jli-user"></i><a
                                                                                    href="{{route('readnews',$new->id)}}"
                                                                                    title="Posts by Spraya"
                                                                                    rel="author">New</a></span>
                                                                            <span class="post-date"><i
                                                                                    class="jli-pen"></i>{{$new->updated_at->format('d/m/Y h:i:s')}}</span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>

                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children"> <a>C???a
                                                h??ng</a><span class="border-menu"></span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"> <a href="https://www.thegioididong.com/">Th??? gi???i
                                                        di ?????ng <span class="border-menu" style="padding-left:40px"><img
                                                                src="data:image/jpeg;base64,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
                                                        MKSxxfQs9paJSXZQY7T1k9pntbW0pW0Nymvi+b+JyKlWVSWZE82TGEAIAQAgBACAEAIAQAgBAEYZ3dUhrKwwae/
                                                        0JW86kQjfVPoH8Jwb3YdOp7VH2X05fY3qN9KOk9UaK4t6lI4dSvfxU+wzzFxZ1aDxUjj+PE6dOrCosxYwNNRxL4HBpXdIwRscTIlksAeRujA/bkbpGA25G6RgXbjdGBNqN0YDak7pOBpaTujBJb0HqHCKW9nAe0zZt7SrXeKcc/x4lKlSFNZkzeWOhKvnVTtn6o9Ae3tnprLYUIYlX9p9OX3ObWvpS0hp/JuVUAYG4DqHCegSSWEaGciyQEAIAQAgBACAEAIAQAgBACAEAIA10DDBAIPEEZErKEZLdksolNp5Rq7rQqTb1zTPdvXwM49xsO3qaw9l93Dw+ht076pHR6msraHWX0dmoO47J8DOLW2DcQ/RiXk/P6m5C+pvjoYVa2qL6dNx/lOPGc2paV6T9qDXyNmNaEuDRiHd3zHlMzLUA8ndJwLtyN0YDbkYIwT0req/oo7exTjxmenaVqn6IN/Ixyq048ZIzqGh129LZpjvOT4CdGjsO5n+rEV4/was7+lHhqbS10Gku9yah79y+AnYt9h29PWftvv4eBp1L6pL9OhtKdMKMKAoHAAYE7MIRgsRWEabbbyx8sQEAIAQAgBACAEAIAQAgBACAEAIAQAgBACAEAIBG9FW4qre0AzHKlCX6op/IspSXBkfkNL9XT+wv4TH6pQ9xeCLdtU95+IeQ0f1VP7C/hHqlD3F4IdtU95+I9KCL6KqvsUCZI0oR/TFL5FXOT4slmQqEAIAQAgBACAEAIAQAgBACAEAIAQAgBACAEAIAQAgBACAEAIAQAgBACAEAIAQAgBACAEAIAQAgBAP//Z"
                                                                data-deferred="1" alt="" class="BcUvif" data-atf="true"
                                                                data-iml="1675" width="30" height="30"></span></a></li>
                                                <li class="menu-item"> <a href="https://fptshop.com.vn/">FPT Shop<span
                                                            class="border-menu" style="float:right"><img
                                                                src="https://mbd.vn/wp-content/uploads/2019/05/fpt-c%E1%BB%ADa-h%C3%A0ng-%C4%91i%E1%BB%87n-tho%E1%BA%A1i.png"
                                                                width="30" height="30"></span></a></li>
                                                <li class="menu-item"> <a href="https://www.nguyenkim.com/">Nguy???n Kim
                                                        <span class="border-menu" style="float:right"><img
                                                                src="https://wwwnguyenkim.com/wp-content/uploads/2020/11/flaticon.png"
                                                                width="30" height="30"></span></a></li>
                                                <li class="menu-item"> <a
                                                        href="http://xuanvinh.vn/may-tinh-xach-tay">Xu??n Vinh
                                                        <span class="border-menu" style="float:right"><img
                                                                src="http://xuanvinh.vn/uploads/logo3.png" width="30"
                                                                height="30"></span></a></li>
                                                <li class="menu-item"> <a href="http://24laptop.vn/">TLD laptop
                                                        <span class="border-menu" style="float:right"><img
                                                                src="https://scontent.fdad1-1.fna.fbcdn.net/v/t1.18169-1/cp0/p50x50/1376450_658714480835650_715569787_n.jpg?_nc_cat=106&ccb=1-3&_nc_sid=dbb9e7&_nc_ohc=7xQ4gqdu5ycAX8vIjMX&_nc_ht=scontent.fdad1-1.fna&tp=27&oh=be12465df7e9c03da459e42bb63d1eae&oe=60E16F90"
                                                                width="30" height="50"></span></a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item"> <a href="{{route('theloai.index')}}">Trang qu???n l??<span
                                                    class="border-menu"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>