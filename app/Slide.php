<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Slide extends Model
{
    use Translatable;
    protected $translatable = ['title', 'cta_text'];
}
