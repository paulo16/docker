<?php

namespace App;

use App\User;
use App\Produit;
use App\Client;

use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    protected $guarded = ['id'];
    
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function produits()
    {
        return $this->belongsToMany(Produit::class);
    }

}
