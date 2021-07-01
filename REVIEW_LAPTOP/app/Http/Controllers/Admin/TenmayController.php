<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\TenmayModel;
use App\Models\Admin\Tinhnang;
use App\Models\Admin\TheloaiModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\Paginator;

class TenmayController extends Controller
{
    public function index()
    {
        $tenmays = TenmayModel::orderBy('created_at', 'desc')->paginate(5);
        
        return view('admin.Tenmay.list',compact('tenmays'));
    }
    public function create()
    {
        $theloais = TheloaiModel::all();
        $tinhnangs = Tinhnang::all();
        return view('admin.Tenmay.add',[
            'tinhnangs' => $tinhnangs,
            'theloais' =>$theloais
        ]);
        
    }
    public function store(Request $request)
    {
            
            $maytinh                = new TenmayModel();
            $maytinh->Ten_may       = $request->Ten_may;
            $maytinh->TL_id         = $request->TL_id;
            if ($request->hasFile('hinh_anh')) {
                $file = $request->hinh_anh;
                $path = $file->store('image','public');
                $maytinh->hinh_anh = $path;
            }
            $maytinh->save();

            $maytinh->tinhnangs()->attach( $request->tinhnangs );
            //dung session de dua ra thong bao
            Session::flash('success', 'Tạo thành công');
            //tao moi xong quay ve trang danh sach khach hang
            return redirect()->route('tenmay.index');
    }
    public function edit($id)
    {
        $theloais = TheloaiModel::all();
        $tinhnangs = Tinhnang::all();
        $tenmay = TenmayModel::findOrFail($id);
        return view('admin.Tenmay.edit', compact('tenmay','theloais','tinhnangs'));
    }
    public function update(Request $request, $id)
    {
        $theloais = TheloaiModel::all();
        $tenmay = TenmayModel::findOrFail($id);
        $tenmay->Ten_may = $request->input('Ten_may');
        $tenmay->theloai->Ten_hang = $request->input('Ten_hang');
        if ($request->hasFile('hinh_anh')) {

            //xoa anh cu neu co
            $currentFile = $tenmay->hinh_anh;
            if ($currentFile) {
                Storage::delete('/public/' . $currentFile);
            }
            // cap nhat anh moi
            $file = $request->hinh_anh;
            $path = $file->store('image', 'public');
            $tenmay->hinh_anh = $path;
        }
        $tenmay->save();
        //xóa toàn bộ kết quả của sản phẩm đó ở bảng trung gian
        $tenmay->tinhnangs()->detach();

        //lưu dữ liệu vào bảng trung gian
        $tenmay->tinhnangs()->attach( $request->tinhnangs );
        //dung session de dua ra thong bao
        Session::flash('success', 'Cập nhật thành công');
        //cap nhat xong quay ve trang danh sach khach hang
        return redirect()->route('tenmay.index');
    }
    public function destroy($id)
    {
        $tenmay = TenmayModel::findOrFail($id);
        $tenmay->delete();
        $currentFile = $tenmay->hinh_anh;
            if ($currentFile) {
                Storage::delete('/public/' . $currentFile);
            }
        //dung session de dua ra thong bao
        Session::flash('success', 'Xóa thành công');
        //xoa xong quay ve trang danh sach khach hang
        return redirect()->route('tenmay.index');
    }
    public function search(Request $request){
        $tenmays = TenmayModel::where('Ten_may','like','%'.$request->key.'%')->get();
        $key = $request->key;
        return view("admin.Tenmay.search", compact('tenmays','key'));
    }
}