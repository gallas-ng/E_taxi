<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

	public function client()
	{
		return $this->belongsTo('App\Models\Client');
	}

	public function chauffeur()
	{
		return $this->belongsTo('App\Models\Chauffeur');
	}

	public function evaluation()
	{
		return $this->hasOne('App\Models\Evaluation');
	}
}
