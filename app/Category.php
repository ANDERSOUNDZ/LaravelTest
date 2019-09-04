<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Para indicar a elocuent cual es el nombre de la tabla se utiliza una propiedad llamada: protected $table =
    protected $table = 'categories';

    //Para hacer una relacion fuera de la base de datos, siendo esta una relacion desde el backend(Laravel)
    public function user(){
        //devuelve los valores del usuario relacionado
        return $this->belongsTo(User::class);
    }

    

    
}
