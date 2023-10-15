<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TodoList extends Model
{
    use HasFactory;
    protected $table = "todo_lists";

    //id（プライマリキー）
    protected $primaryKey = 'id';

    //可変項目
    protected $fillable = 
    [
        'name',
        'update_at',
        'created_at',
    ];
}
