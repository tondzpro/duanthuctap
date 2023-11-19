<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "products"; //đúng tên bảng trong cơ sở dữ liệ
    protected $fillable = ['id', 'name', 'price', 'category', 'title', 'image', 'description', 'deal']; // định nghĩa những trường csdl gán trong model để add được giá trị lên
}
