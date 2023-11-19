<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate_star extends Model
{
    use HasFactory;
    protected $table = "color"; //đúng tên bảng trong cơ sở dữ liệ
    protected $fillable = ['id', 'id_pro', 'id_user', 'rate']; // định nghĩa những trường csdl gán trong model để add được giá trị lên
}
