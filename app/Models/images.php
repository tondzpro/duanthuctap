<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    use HasFactory;
    protected $table = "images"; //đúng tên bảng trong cơ sở dữ liệ
    protected $fillable = ['id', 'id_pro', 'price', 'category', 'image', 'description', 'deal'];
}
