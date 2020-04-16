<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \TCG\Voyager\Models\User
{
    use Translatable;

    protected $translatable = [
        'position',
    ];

}
