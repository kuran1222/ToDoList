<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Task extends Model
{
    use HasFactory;
    protected $table = "tasks";

    //id（プライマリキー）
    protected $primaryKey = 'id';

    //可変項目
    protected $fillable = 
    [
        'name',
        'status',
        'update_at',
        'created_at',
    ];
}
