<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    protected $directory = '/images/';

    protected $fillable = ['file'];

    public function getFileAttribute($photo)
    {
        return $this->directory. $photo;
    }

    use HasFactory;
}
