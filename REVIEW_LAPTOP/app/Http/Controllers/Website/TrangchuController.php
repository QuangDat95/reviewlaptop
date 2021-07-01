<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\TintucModel;
use App\Models\Admin\NoidungModel;
use Illuminate\Pagination\Paginator;

class TrangchuController extends Controller
{
   
    public function home()
    {
        $firstnews = TintucModel::inrandomOrder()->first();
        $randomnews = TintucModel::where('id','<>',$firstnews->id)->inrandomOrder()->limit(6)->get();
        $noidungs = NoidungModel::inrandomOrder()->limit(6)->get();
        $news = TintucModel::orderBy('created_at', 'desc')->limit(4)->get();
      // dd($news);
        return view('website.home.index', compact('firstnews','randomnews','noidungs','news'));
    }
    
    public function allreview()
    {
        $reviews = NoidungModel::paginate(6);
        $counts = NoidungModel::all();
        $news = TintucModel::orderBy('created_at', 'desc')->limit(4)->get();
        return view('website.baiviet.cacbaiviet',compact('reviews','news','counts'));
    }

    
    public function allnew()
    {
        $allnews = TintucModel::paginate(6);
        $counts = TintucModel::all();
        $news = TintucModel::orderBy('created_at', 'desc')->limit(4)->get();
        return view('website.tintuc.cactintuc',compact('allnews','news','counts'));
    }

    public function dell()
    {
        $reviews = NoidungModel::where('Tieu_de','like','%Dell%')->paginate(6);
        $counts = NoidungModel::where('Tieu_de','like','%Dell%')->get();
        $news = TintucModel::orderBy('created_at', 'desc')->limit(4)->get();
        return view('website.baiviet.dell',compact('reviews','news','counts'));
    }

    public function hp()
    {
        $reviews = NoidungModel::where('Tieu_de','like','%Hp%')->paginate(6);
        $news = TintucModel::orderBy('created_at', 'desc')->limit(4)->get();
        $counts = NoidungModel::where('Tieu_de','like','%Hp%')->get();
        return view('website.baiviet.hp',compact('reviews','news','counts'));
    }

    public function asus()
    {
        $reviews = NoidungModel::where('Tieu_de','like','%Asus%')->paginate(6);
        $news = TintucModel::orderBy('created_at', 'desc')->limit(4)->get();
        $counts = NoidungModel::where('Tieu_de','like','%Asus%')->get();
        return view('website.baiviet.asus',compact('reviews','news','counts'));
    }

    public function lenovo()
    {
        $reviews = NoidungModel::where('Tieu_de','like','%Lenovo%')->paginate(6);
        $counts = NoidungModel::where('Tieu_de','like','%Lenovo%')->get();
        $news = TintucModel::orderBy('created_at', 'desc')->limit(4)->get();
        return view('website.baiviet.lenovo',compact('reviews','news','counts'));
    }

    public function acer()
    {
        $reviews = NoidungModel::where('Tieu_de','like','%Acer%')->paginate(6);
        $news = TintucModel::orderBy('created_at', 'desc')->limit(4)->get();
        $counts = NoidungModel::where('Tieu_de','like','%Acer%')->get();
        return view('website.baiviet.acer',compact('reviews','news','counts'));
    }
    public function searchhome(Request $req){
        
        $searchnew = TintucModel::where('tieu_de','like','%'.$req->key.'%')->orWhere('noi_dung','like','%'.$req->key.'%')->get();
        $searchreview = NoidungModel::where('Tieu_de','like','%'.$req->key.'%')->orWhere('noi_dung','like','%'.$req->key.'%')->get();
        $news = TintucModel::orderBy('created_at', 'desc')->limit(4)->get();
        return view('website.home.search', compact('searchnew','searchreview','news','req'));
    }
    public function searchnew(Request $req){
        $searchnew = TintucModel::where('tieu_de','like','%'.$req->key.'%')->orWhere('noi_dung','like','%'.$req->key.'%')->get();
        $news = TintucModel::orderBy('created_at', 'desc')->limit(4)->get();
        return view('website.tintuc.search', compact('searchnew','news','req'));
    }
    public function searchreview(Request $req){
        $searchreview = NoidungModel::where('Tieu_de','like','%'.$req->key.'%')->orWhere('noi_dung','like','%'.$req->key.'%')->get();
        $news = TintucModel::orderBy('created_at', 'desc')->limit(4)->get();
        return view('website.baiviet.search', compact('searchreview','news','req'));
    }
}
