<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class AboutusJob extends Model
{
    use Translatable;
    protected $translatable = ['department', 'position', 'desc'];
}
