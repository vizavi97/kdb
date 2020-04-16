<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Card extends Model
{

	use Translatable;
    protected $translatable = ['name', 'currency', 'type', 'validity_period', 'note', 'transaction', 'maintenance', 'excerpt', 'description', 'instruction', 'tariffs', 'slug'];
	
}
