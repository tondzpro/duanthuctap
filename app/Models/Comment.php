<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = "comment"; //đúng tên bảng trong cơ sở dữ liệ
    protected $fillable = ['id', 'comment', 'id_user', 'id_pro', 'id_star']; // định nghĩa những trường csdl gán trong model để add được giá trị lên
}
