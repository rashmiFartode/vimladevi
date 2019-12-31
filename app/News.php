<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class News extends Model
{
    protected $fillable = ['title', 'description', 'news_file'];

    public function deleteFile()
    {
        Storage::delete($this->news_file);
    }
}
