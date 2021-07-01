<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\TenmayModel;
use App\Models\Admin\NoidungModel;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\Paginator;

class NoidungController extends Controller
{
    public function index()
    {
        $noidungs = NoidungModel::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.Noidung.list',compact('noidungs'));
    }
    public function create()
    {
        $tenmays = TenmayModel::all()->sortByDesc("created_at");
        $noidungs = NoidungModel::all();
        return view('admin.Noidung.add',[
            'tenmays' => $tenmays,
            'noidungs' =>$noidungs
        ]);
    }
    public function store(Request $request)
    {
        $noidung                      = new NoidungModel();
        //những từ trong $noidung trỏ tới là tên của các cột trong bảng 
        //tham chiếu từ NoidungModel() lấy từ bảng noidung
        /*Những từ request trỏ tới là name trong các ô nhập dữ liệu*/
        $noidung->Tieu_de             = $request->Tieu_de;
        $noidung->ND_ngan             = $request->ND_ngan;
        $noidung->tenmay_id           = $request->Ten_may;
        $noidung->noi_dung            = $request->noi_dung;
        $noidung->link                = $request->link;
        $noidung->save();
        //dung session de dua ra thong bao
        Session::flash('success', 'Tạo nội dung thành công');
        //tao moi xong quay ve trang danh sach khach hang
        return redirect()->route('noidung.index');
    }
    public function edit($id)
    {
        $tenmays = TenmayModel::all();
        $noidung   = NoidungModel::findOrFail($id);
        return view('admin.Noidung.edit', compact('tenmays','noidung'));
    }
    public function update(Request $request, $id)
    {
       
        $tenmay = TenmayModel::all();
        $noidung = NoidungModel::findOrFail($id);        
        $noidung->Tieu_de = $request->input('Tieu_de');
        $noidung->ND_ngan = $request->input('ND_ngan');
        $noidung->noi_dung = $request->input('noi_dung');
        $noidung->maytinh->Ten_may = $request->input('Ten_may');
        $noidung->link = $request->input('link');
        $noidung->save();
        //dung session de dua ra thong bao
        Session::flash('success', 'Cập nhật nội dung thành công');
        //cap nhat xong quay ve trang danh sach khach hang
        return redirect()->route('noidung.index');
    }
    public function destroy($id)
    {
        $noidung = NoidungModel::findOrFail($id);
        $noidung->delete();
        //dung session de dua ra thong bao
        Session::flash('success', 'Xóa nội dung thành công');

        //xoa xong quay ve trang danh sach khach hang
        return redirect()->route('noidung.index');
    }
    public function search(Request $request){
        $noidungs = NoidungModel::where('ND_ngan','like','%'.$request->key.'%')->orWhere('noi_dung','like','%'.$request->key.'%')->get();
        $key = $request->key;
        return view("admin.Noidung.search", compact('noidungs','key'));
    }
}