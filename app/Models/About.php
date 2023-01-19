<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use \Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $table = 'about';
    
    protected $fillable = ['title', 'content', 'url', 'hide', 'button_text', 'image_url'];

    public function setImageUrlAttribute($value)
    {
        $attribute_name = "image_url";
        $disk = "public";
        $destination_path = "";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = null);
    }
}
