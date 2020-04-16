<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class SampleForm extends Model
{
    use Translatable;
    protected $translatable = ['name', 'source_name'];
}
