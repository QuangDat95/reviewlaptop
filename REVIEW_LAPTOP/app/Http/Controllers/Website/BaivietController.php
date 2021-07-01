<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\TintucModel;
use App\Models\Admin\NoidungModel;
use App\Models\Website\Newcomment;
use App\Models\Website\Reviewcomment;

class BaivietController extends Controller
{  
    public function readnew($id)
    {
        
        $readnew = TintucModel::findOrFail($id);
        $randomnew = TintucModel::where('id','!=',$readnew->id)->inrandomOrder()->limit(6)->get();
        //($randomnew);
        $commentnews = Newcomment::where('tintuc_id',$id)->get();
        $news = TintucModel::orderBy('created_at', 'desc')->limit(4)->get();
        return view('website.tintuc.chitiet', compact('readnew','randomnew','news','commentnews'));
    }
    public function readreview($id)
    {
        $readreview = NoidungModel::findOrFail($id);
        $randomreview = NoidungModel::where('id','!=',$readreview->id)->inrandomOrder()->limit(6)->get();
        //dd($randomreview);
        $comments = Reviewcomment::where('noidung_id',$id)->get();
        $news = TintucModel::orderBy('created_at', 'desc')->limit(4)->get();
        return view('website.baiviet.chitiet',compact('readreview','randomreview','news','comments'));
    }
    public function CommentReview(Request $request,$id){
        $comment = new Reviewcomment();
        $comment->name = $request->name;
      // $comment->email = $request->email;
        $comment->binh_luan = $request->comment;
        $comment->noidung_id = $id;
        $comment->save();
        return back();
    }
    public function CommentNew(Request $request,$id){      
    // if($request->checkbox == "yes"){  
    //     setcookie("name", "$request->name" , time()+3600);
    //     setcookie("email", "$request->email" , time()+3600);
    // };
       // setcookie("binh_luan", "$request->comment" , time()+3600);
    //      if(isset($_COOKIE["name"]) && isset($_COOKIE["email"])){    
    //         $comment = new Newcomment();
    //         $comment->name = $_COOKIE["name"];
    //         $comment->email = $_COOKIE["email"];
    //         $comment->binh_luan = $request->comment;
    //         $comment->tintuc_id = $id;
    //         $comment->save();  
    //         return back();
    // }else{
        $comment = new Newcomment();
        $comment->name = $request->name;
        //$comment->email = $request->email;
        $comment->binh_luan = $request->comment;
        $comment->tintuc_id = $id;
        $comment->save();
        return back();
   // }
  }
}