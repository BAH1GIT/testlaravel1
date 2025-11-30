<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    public function produit()
    {
        return $this->belongsTo(produit::class,'product_id');
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
