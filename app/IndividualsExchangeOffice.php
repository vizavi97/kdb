<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class IndividualsExchangeOffice extends Model
{
    use Translatable;
    protected $translatable = ['title', 'address', 'working_days'];
}
