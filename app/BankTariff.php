<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class BankTariff extends Model
{
    use Translatable;
	protected $translatable = ['title'];
}
