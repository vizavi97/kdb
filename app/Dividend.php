<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Dividend extends Model
{
	use Translatable;
    protected $translatable = ['payment_year', 'fy', 'currency', 'purpose'];
}
