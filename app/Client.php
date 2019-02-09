<?php

namespace App;

use App\User;
use App\Intervention;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
	protected $guarded = ['id'];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function intervention()
	{
		return $this->belongsTo(Intervention::class);
	}
}
