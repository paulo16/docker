<?php

namespace App;

use App\User;
use App\Accessoire;
use App\Service;
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

    public function Accessoires()
    {
        return $this->belongsToMany(Accessoire::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

}
