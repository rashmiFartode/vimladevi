<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Attendance extends Model
{
    protected $fillable = ['attendanceFor', 'title', 'file'];
    public function deleteFile()
    {
        Storage::delete($this->file);
    }
}
