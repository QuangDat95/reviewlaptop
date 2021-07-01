<?php

namespace App\Models\Website;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newcomment extends Model
{
    use HasFactory;
    protected $table = "tintuc_binhluan";
    protected $primaryKey = 'id';
}
