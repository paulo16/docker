<?php

namespace App;

use App\Intervention;
use App\Accessoire;
use App\Service;


use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $guarded = ['id'];
    
    public function interventions()
    {
        return $this->belongsToMany(Intervention::class);
    }
    
    public function accessoire()
    {
        
        return $this->hasOne(Accessoire::class);
    }

    public function service()
    {
        return $this->hasOne(Service::class);
    }

}
