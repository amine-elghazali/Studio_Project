<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = ['fullName','email','bio'];

    public function Album()
      {
           return $this->hasMany(Album::class);
      }

      public function Song()
      {
           return $this->hasMany(Song::class);
      }
}
