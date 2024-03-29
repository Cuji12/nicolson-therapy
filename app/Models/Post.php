<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use \Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = ['title', 'content', 'tags', 'hide', 'uri_title'];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'uri_title';
    }

    
    public function getImageUrl() 
    {
        return Storage::url($this->image_url);
    }
}
