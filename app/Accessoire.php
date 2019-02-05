<?php

namespace App;

use App\Produit;
use Illuminate\Database\Eloquent\Model;

class Accessoire extends Model
{
    protected $guarded = ['id'];
    
    public function produit()
    {
        
        return $this->belongsTo(Produit::class);
    }
}
