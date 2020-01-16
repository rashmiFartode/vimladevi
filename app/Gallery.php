<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Gallery extends Model
{
    protected $fillable = ['category', 'file'];

    public function deleteFile()
    {
        Storage::delete($this->file);
    }
}
