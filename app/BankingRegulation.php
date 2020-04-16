<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class BankingRegulation extends Model
{
    use Translatable;
    protected $translatable = ['name'];
}
