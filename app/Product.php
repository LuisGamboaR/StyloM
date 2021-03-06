<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nombre', 'cantidad', 'stock_min', 'stock_max', 'descripcion', 'foto', 'talla', 'envio','category_id','estado','precio'
    ];



    public function materials(){
    	return $this->belongsToMany(Material::class);//Muchos a muchos
    }

    public function category(){
        return $this->belongTo(Category::class);
    }

    public function detalles(){
        return $this->belongToMany(Detalle::class);
    }

    public function compra(){
        return $this->belongToMany(Compra::class);
    }
}
