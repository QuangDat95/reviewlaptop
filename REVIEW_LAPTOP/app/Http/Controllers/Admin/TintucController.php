<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\TintucModel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;

class TintucController extends Controller
{
    public function index()
    {
        $tintucs = TintucModel::orderBy('created_at', 'desc')->paginate(3);
        return view('admin.Tintuc.list',compact('tintucs'));
    }
    public function create()
    {
        return view('admin.Tintuc.add');
    }
    public function store(Request $request)
    {
        $tintuc = new TintucModel();
        $tintuc->tieu_de = $request->tieu_de;
        $tintuc->noi_dung = $request->noi_dung;
        if ($request->hasFile('hinh_anh')) {
            $file = $request->hinh_anh;
            $path = $file->store('image','public');
            $tintuc->hinh_anh = $path;
        }
        $tintuc->save();
        //dung session de dua ra thong bao
        Session::flash('success', 'Tạo thành công');
        //tao moi xong quay ve trang danh sach khach hang
        return redirect()->route('tintuc.index');
    }
    public function edit($id)
    {
        $tintuc = TintucModel::findOrFail($id);
        return view('admin.Tintuc.edit', compact('tintuc'));
    }
    public function update(Request $request, $id)
    {
        $tintuc = TintucModel::findOrFail($id);
        $tintuc->tieu_de = $request->input('tieu_de');
        $tintuc->noi_dung = $request->input('noi_dung');
        if ($request->hasFile('hinh_anh')) {
            //xoa anh cu neu co
            $currentFile = $tintuc->hinh_anh;
            if ($currentFile) {
                Storage::delete('/public/' . $currentFile);
            }
            // cap nhat anh moi
            $file = $request->hinh_anh;
            $path = $file->store('image', 'public');
            $tintuc->hinh_anh = $path;
        }
        $tintuc->save();
        //dung session de dua ra thong bao
        Session::flash('success', 'Cập nhật thành công');
        //cap nhat xong quay ve trang danh sach khach hang
        return redirect()->route('tintuc.index');
    }
    public function destroy($id)
    {
        $tintuc = TintucModel::findOrFail($id);
        $tintuc->delete();
        $currentFile = $tintuc->hinh_anh;
            if ($currentFile) {
                Storage::delete('/public/' . $currentFile);
            }
        //dung session de dua ra thong bao
        Session::flash('success', 'Xóa thành công');
        //xoa xong quay ve trang danh sach khach hang
        return redirect()->route('tintuc.index');
    }
    public function search(Request $request){
        $tintucs = TintucModel::where('tieu_de','like','%'.$request->key.'%')->orWhere('noi_dung','like','%'.$request->key.'%')->get();
        $key = $request->key;
        return view("admin.Tintuc.search", compact('tintucs','key'));
    }
}