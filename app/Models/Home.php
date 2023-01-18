<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = 'home';

    protected $fillable = ['title', 'content', 'url', 'hide', 'button_text'];

    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;
}