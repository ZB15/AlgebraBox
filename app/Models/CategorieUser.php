<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategorieUser extends Model
{
    protected $table = 'categorie_user';
	
	
	public function categories(){
		return $this->belongsTo('App\Models\Categories', 'categorie_id')
	}
	
}
