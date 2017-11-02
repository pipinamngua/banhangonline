<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    public function product() {
    	return $this->hasOne('App\Product');
    }
}
