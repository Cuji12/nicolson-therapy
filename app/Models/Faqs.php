<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faqs extends Model
{
    protected $table = 'faqs';

    protected $fillable = ['question', 'answer', 'hide'];

    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;
}
