<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    protected $fillable = [
        'vendeur_id',
        'client_id',
        'product_id',
        'quantite',
        'prix_total'
    ];
    public function produit()
    {
        return $this->belongsTo(Produit::class,'product_id');
    }
    public function vendeur()
    {
        return $this->belongsTo(vendeur::class);
    }

    public function client()
    {
        return $this->belongsTo(client::class);
    }
}
