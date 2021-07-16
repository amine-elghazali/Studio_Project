<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = ['name','bio'];

    public function Song()
      {
           return $this->hasMany(Song::class);
      }

    public function Album()
    {
        return $this->belongsTo(Artist::class);
    }
}
