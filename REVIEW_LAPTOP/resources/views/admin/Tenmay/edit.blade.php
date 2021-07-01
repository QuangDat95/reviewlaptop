@extends('admin.home')
@section('content')
@section('title','Sửa danh sách máy')
<body>
    <!--Preloader-->
    <div class="preloader-it">
        <div class="la-anim-1"></div>
    </div>
    <!--/Preloader-->
    <div class="wrapper  theme-3-active pimary-color-blue">
        <!-- Top Menu Items -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="mobile-only-brand pull-left">
                <div class="nav-header pull-left">
                    <div class="logo-wrap">
                        <a href="index.html">			 
							<span class="brand-text">Mục quản lý</span>
						</a>
                    </div>
                </div>
                <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
                <a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
                <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
                <form action="{{route('tenmaysearch')}}" method="GET" id="search_form" role="search" class="top-nav-search collapse pull-left">
                    <div class="input-group">
                        <input type="text" name="key" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
						<button type="button" class="btn  btn-default"  data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
						</span>
                    </div>
                </form>
            </div>
            <div id="mobile_only_nav" class="mobile-only-nav pull-right">
                <ul class="nav navbar-right top-nav pull-right">
                    <li class="dropdown auth-drp">
                        <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="{{ url('/') }}/theme/elmer/img/user1.png" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
                        <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                            <!-- <li>
                                <a href="profile.html"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
                            </li> -->
                            <!-- <li>
                                <a href="#"><i class="zmdi zmdi-card"></i><span>my balance</span></a>
                            </li>
                            <li>
                                <a href="inbox.html"><i class="zmdi zmdi-email"></i><span>Inbox</span></a>
                            </li> -->
                            <!-- <li>
                                <a href="#"><i class="zmdi zmdi-settings"></i><span>Settings</span></a>
                            </li> -->
                            <li class="divider"></li>
                            <!-- <li class="sub-menu show-on-hover">
                                <a href="#" class="dropdown-toggle pr-0 level-2-drp"><i class="zmdi zmdi-check text-success"></i> available</a>
                                <ul class="dropdown-menu open-left-side">
                                    <li>
                                        <a href="#"><i class="zmdi zmdi-check text-success"></i><span>available</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="zmdi zmdi-circle-o text-warning"></i><span>busy</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="zmdi zmdi-minus-circle-outline text-danger"></i><span>offline</span></a>
                                    </li>
                                </ul>
                            </li> -->
                            <li class="divider"></li>
                            <li>
                                <a href="{{route('getLogout')}}"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /Top Menu Items -->
        <!-- Left Sidebar Menu -->
        <div class="fixed-sidebar-left">
            <ul class="nav navbar-nav side-nav nicescroll-bar">
                <li class="navigation-header">
                    <span>Main</span>
                    <i class="zmdi zmdi-more"></i>
                </li>
                <li>
                    <a class="active" href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr">
                        <div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Danh mục bài viết</span></div>
                        <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
                        <div class="clearfix"></div>
                    </a>
                    <ul id="dashboard_dr" class="collapse collapse-level-1">
                        <li>
                            <a href="{{ route('theloai.index') }}">Hãng laptop</a>
                        </li>
                        <li>
                            <a href="{{ route('tenmay.index') }}">Tên laptop</a>
                        </li>
                        <li>
                            <a href="{{ route('noidung.index') }}">Nội dung</a>
                        </li>
                        <li>
                            <a href="{{ route('tintuc.index') }}">Tin tức</a>
                        </li>
                    </ul>
                </li>
            </div>
<div class="container">
    <div class="row">
        <!-- Basic Table -->
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark"></h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="container">
                    <div class="panel-body">
                        <div class="col-12 col-md-12">
                            <div class="row">
                                <div class="col-12" style="padding-top:15px">
                                    <h3>Chỉnh sửa tên máy</h3>
                                </div>
                                <div class="col-12">
                                    <form method="post" action="{{ route('tenmay.update',$tenmay->id) }}" enctype= "multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group" style="padding-right:50px">
                                            <label>Tên máy</label>
                                            <input type="text" class="form-control" name="Ten_may"
                                                value="{{$tenmay->Ten_may}}">
                                        </div>
                                        <div class="form-group" style="padding-right:50px">
                                            <label>Tên hãng</label><br>
                                            <select class="custom-select" name="TL_id" style="width:100%">
                                                @foreach($theloais as $theloai)
                                                <option value="{{$theloai->id}}" <?php
                                                if ($tenmay->theloai->Ten_hang == $theloai->Ten_hang){
                                                    echo "selected";
                                                }   
                                                ?>>{{$theloai->Ten_hang}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group" style="padding-right:50px">
                                            <label for="exampleInputFile">Hình ảnh</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="form-control-file" id="exampleInputFile"
                                                        name="hinh_anh">
                                                </div>
                                            </div>
                                        </div>
                                         <div class="form-group" style="padding-right:50px">
                                            {{ $tenmay->hinh_anh }}
                                        </div>
                                        <?php
                                            $checked_tags = $tenmay->tinhnangs->pluck('id')->toArray();
                                        ?>
                                        <div class="form-group mb-2" style="padding-right:50px">
                                            <label for="">Tính năng</label>
                                            <?php foreach( $tinhnangs as $tinhnang ):?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    value="<?= $tinhnang->id; ?>" id="tinhnang_<?= $tinhnang->id; ?>"
                                                    name="tinhnangs[]"
                                                    <?php if(in_array($tinhnang->id,$checked_tags)): ?> checked
                                                    <?php endif; ?>>
                                                <label class="form-check-label" for="tinhnang_<?= $tinhnang->id; ?>">
                                                    <?= $tinhnang->tinh_nang; ?>
                                                </label>
                                            </div>
                                            <?php endforeach;?>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                                        <button class="btn btn-success"
                                            onclick="window.history.go(-1); return false;">Hủy</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection