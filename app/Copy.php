<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Copy extends Model
{
	use Translatable;
	protected $translatable = ['copy'];
}
