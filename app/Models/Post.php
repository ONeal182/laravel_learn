<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $table = 'my_posts';
    // protected $primaryKey = 'Code';
    // public $incrementing = false;
    // protected $keyType = 'string';
    // protected $attributes = ['content'=> 'lorem ipsum....'];

    protected $fillable = ['title', 'content'];
}
