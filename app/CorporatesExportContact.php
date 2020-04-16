<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class CorporatesExportContact extends Model
{
    use Translatable;
    protected $translatable = ['duty'];
}
