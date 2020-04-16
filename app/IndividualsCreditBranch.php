<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class IndividualsCreditBranch extends Model
{
    use Translatable;
    protected $translatable = ['card_title', 'title', 'address', 'tel', 'fax'];
}
