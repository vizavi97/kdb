<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Gsm extends Model
{
    use Translatable;
    protected $translatable = ['title', 'slug', 'body', 'address', 'excerpt', 'keywords'];
}
