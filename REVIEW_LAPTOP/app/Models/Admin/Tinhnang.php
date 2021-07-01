<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\TenmayModel;

class Tinhnang extends Model
{
    use HasFactory;
    protected $table = 'tinhnang';

    public function tenmays(){
        return $this->belongsToMany(TenmayModel::class,'tenmay_tinhnang','tinhnang_id', 'tenmay_id');
    }
}
