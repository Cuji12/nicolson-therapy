<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use \Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Faqs extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $table = 'faqs';

    protected $fillable = ['question', 'answer', 'hide'];
}
