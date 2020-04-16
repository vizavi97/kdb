<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvestorsVirtualReception extends Model
{
    protected $fillable = ['name', 'entity', 'gender', 'country', 'region', 'district', 'application_number', 'email', 'phone', 'appeal_topic', 'appeal_type', 'appeal_subject', 'appeal_text', 'privacy_status', 'attachment'];
}
