<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lamaran extends Model
{
    protected $fillable = [
        'job_id', 'user_id', 'status', 'message',
    ];
}
