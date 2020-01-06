<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class GalleryCategory extends Model
{
    protected $fillable = [ 'category', 'file' ];

    public function gallerycategories()
    {
        return $this->hasMany('App\Category');
    }

    public function deleteFile()
    {
        Storage::delete($this->file);
    }
}
