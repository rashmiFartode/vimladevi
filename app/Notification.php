<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Notification extends Model
{
    protected $fillable = [ 'title', 'notification_file', 'new' ];

    public function deleteFile()
    {
        Storage::delete($this->notification_file);
    }

 
}
