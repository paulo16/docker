<?php

namespace App;

use App\Intervention;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = ['id'];
    
    public function intervention()
    {
        return $this->belongsTo(Intervention::class);
    }
}
