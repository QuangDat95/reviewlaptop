<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Tinhnang;
use App\Models\Admin\TheloaiModel;

class TenmayModel extends Model
{
    use HasFactory;
    protected $table = 'tenmay';

    public function tinhnangs(){
        return $this->belongsToMany(Tinhnang::class,'tenmay_tinhnang','tenmay_id','tinhnang_id');
    }
    public function theloai(){
        return $this->belongsTo( TheloaiModel::class , 'TL_id', 'id' );
    }
}
