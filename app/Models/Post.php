<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['title', 'content', 'tags', 'hide'];

    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;
}
