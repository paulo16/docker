<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = ['id'];
    
    public function produit()
    {
        
        return $this->belongsTo(Produit::class);
    }

}
