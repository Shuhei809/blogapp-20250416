<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    use HasFactory; // 確実にこれを追加
    protected $table = 'blogs';
    protected $fillable = [
        'title',
        'content',
    ];
}
