<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    use HasFactory;
    
    public function answer() {
	return $this->hasMany('App\Models\Answer_to_Que');
    }
}
