<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Activity extends Model
{
    protected $fillable = [ 'title','description','file' ];

    public function deleteFile()
    {
        Storage::delete($this->file);
    }
}
