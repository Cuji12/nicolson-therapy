<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = 'testimonials';

    protected $fillable = ['name', 'testimonial', 'hide'];

    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;
}