<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Etender extends Model
{
    protected $fillable = [ 'title', 'etender_file' ];

    public function deleteFile()
    {
        Storage::delete($this->etender_file);
    }
}
