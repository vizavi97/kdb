<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class AboutusContact extends Model
{
    use Translatable;
    protected $translatable = ['worker_1_name', 'worker_2_name', 'worker_3_name'];
}
