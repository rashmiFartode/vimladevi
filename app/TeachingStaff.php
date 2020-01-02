<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class TeachingStaff extends Model
{
    protected $fillable = [ 'name','designation','department', 'file' ];
    public function deleteFile()
    {
        Storage::delete($this->file);
    }
}
