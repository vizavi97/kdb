<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class TransferCurrency extends Model
{
    use Translatable;
    protected $translatable = ['name'];
}
