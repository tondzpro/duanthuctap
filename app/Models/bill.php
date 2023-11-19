<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    use HasFactory;
    protected $table = "bill"; //đúng tên bảng trong cơ sở dữ liệ
    protected $fillable = ['id', 'id_user', 'code_number', 'name', 'status_order'];
}
