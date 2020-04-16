<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class AboutusBranch extends Model
{
    use Translatable;
    protected $translatable = ['name', 'address', 'working_hours', 'day_off', 'exchange_hours', 'exchange_off'];
}
