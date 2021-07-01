<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TintucModel extends Model
{
    use HasFactory;
    protected $table = 'tintuc';
    public function tintuc(){
        return $this->belongsTo(Newcomment::class,'tintuc_id','id');
    }
}
