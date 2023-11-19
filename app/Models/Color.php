<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    protected $table = "color"; //đúng tên bảng trong cơ sở dữ liệ
    protected $fillable = ['id', 'color']; // định nghĩa những trường csdl gán trong model để add được giá trị lên
}
