<?php

namespace App\Models\Website;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviewcomment extends Model
{
    use HasFactory;
    protected $table = "baiviet_binhluan";
    protected $primaryKey = 'id';
}
