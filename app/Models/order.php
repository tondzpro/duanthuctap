<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table = "order"; //đúng tên bảng trong cơ sở dữ liệ
    protected $fillable = ['id', 'id_bill'];
}
