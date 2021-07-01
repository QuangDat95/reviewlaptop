@include('website.include.menu')
@include('website.include.menu_right')
<div class="search_form_menu_personal">
        <div class="menu_mobile_large_close"> <span class="jl_close_wapper search_form_menu_personal_click"><span
                    class="jl_close_1"></span><span class="jl_close_2"></span></span></div>
        <form method="get" class="searchform_theme" action="{{route('searchreview')}}">
            @csrf
            <input type="text" placeholder="Nhập từ cần tìm" name="key" class="search_btn" />
            <button type="submit" class="button"><i class="jli-search"></i></button>
        </form>
    </div>
    <div class="mobile_menu_overlay"></div>
<div class="jl_home_bw">
@yield('content')
</div>
@include('website.include.footer')
      