<?php

namespace App;

use App\Produit;
use App\Intervention;
use Illuminate\Database\Eloquent\Model;

class Accessoire extends Model
{
    protected $guarded = ['id'];
    
    public function interventions()
    {
        
        return $this->belongsTo(Intervention::class);
    }
}
