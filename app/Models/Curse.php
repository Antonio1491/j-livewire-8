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

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // Nombre del campo virtual en medio de getAttribute 
    public function getExcerptAttribute()
    {
        return substr($this->description, 0,80) . "...";
    }

    public function similar()
    {
        //Ejecutar una condición de acuerdo a la categoría respecto al curso actual
        //la relación con el usuario
        //obtener (cantidad)
        return $this->where('category_id', $this->category_id)
        ->with('user')
        ->take(2)
        ->get();
    }

}
