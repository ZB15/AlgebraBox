<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
	protected $table = 'categories';

public function sections()
    {
        return $this->belongsTo('App\Models\Sections');
    }
	
	
public function users()
    {
        return $this->belongsToMany('App\Models\Users', 'categorie_user');
    }
	
}
