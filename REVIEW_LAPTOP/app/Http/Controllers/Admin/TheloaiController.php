<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\TheloaiModel;
use Illuminate\Support\Facades\Session;

class TheloaiController extends Controller
{
    public function __construct() {
    	$this->middleware('auth');
    }
    public function index()
    {
        $Alltype = TheloaiModel::All();
        return view('admin.Theloai.list', compact('Alltype'));
    }
    public function create()
    {
        return view('admin.Theloai.add');
    }
    public function store(Request $request)
    {
        $theloai = new TheloaiModel();
        $theloai->Ten_hang = $request->input('Ten_hang');
        $theloai->save();
        //dung session de dua ra thong bao
        Session::flash('success', 'Tạo hãng mới thành công');
        //tao moi xong quay ve trang danh sach khach hang
        return redirect()->route('theloai.index');
    }
    public function edit($id)
    {
        $theloai = TheloaiModel::findOrFail($id);
        return view('admin.Theloai.edit', compact('theloai'));
    }
    public function update(Request $request, $id)
    {
        $theloai = TheloaiModel::findOrFail($id);
        $theloai->Ten_hang = $request->input('Ten_hang');
        $theloai->save();

        //dung session de dua ra thong bao
        Session::flash('success', 'Cập nhật hãng thành công');
        //cap nhat xong quay ve trang danh sach khach hang
        return redirect()->route('theloai.index');
    }
    public function destroy($id)
    {
        $theloai = TheloaiModel::findOrFail($id);
        $theloai->delete();
        //dung session de dua ra thong bao
        Session::flash('success', 'Xóa hãng thành công');
        //xoa xong quay ve trang danh sach khach hang
        return redirect()->route('theloai.index');
    }
    public function search(Request $request){
        $Alltype = TheloaiModel::where('Ten_hang','like','%'.$request->key.'%')->get();
        $key = $request->key;
        return view("admin.Theloai.search", compact('Alltype','key'));
    }
}