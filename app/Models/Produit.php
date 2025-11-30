<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = [
    'product_title',
    'product_description',
    'product_keywords',
    'categorie_id',
    'section_id',
    'product_price',
    'product_image1',
    'product_image2',
    'product_image3',
];



public function categorie() {
    return $this->belongsTo(Categorie::class);
}

public function section() {
    return $this->belongsTo(Section::class);
}

public function vente(){
    return $this->hasMany(Vente::class);
}

}