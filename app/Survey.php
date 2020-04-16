<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Survey extends Model
{
    use Translatable;
    protected $translatable = ['question', 'answer_one', 'answer_two', 'answer_three', 'answer_four', 'answer_five', 'answer_six'];
}
