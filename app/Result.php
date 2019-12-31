<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Result extends Model
{
    protected $fillable = ['title', 'file'];

    public function deleteFile()
    {
        Storage::delete($this->file);
    }
}
