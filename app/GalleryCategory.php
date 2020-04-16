<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class GalleryCategory extends Model
{
    	use Translatable;
    	protected $translatable = ['name', 'slug'];

    	public function videos()
    	{
        	return $this->hasMany('App\Video');
    	}

    	public function photos()
    	{
        	return $this->hasMany('App\Photo');
    	}
}
