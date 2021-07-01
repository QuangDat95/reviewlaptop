<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\TenmayModel;
use App\Models\Admin\Tinhnang;
use App\Models\Website\Reviewcomment;

class NoidungModel extends Model
{
    use HasFactory;
    protected $table="noidung";
    public function maytinh(){
        return $this->belongsTo(TenmayModel::class,'tenmay_id','id');
    }
    public function baiviet(){
        return $this->belongsTo(Reviewcomment::class,'binhluan_id','id');
    }
}
