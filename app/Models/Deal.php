<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    use HasFactory;
    protected $table = "deal"; //đúng tên bảng trong cơ sở dữ liệ
    protected $fillable = ['id', 'title', 'quantity', 'deal_value'];
}
