<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curse extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // Nombre del campo virtual en medio de getAttribute 
    public function getExcerptAttribute()
    {
        return substr($this->description, 0,80) . "...";
    }

    

}
