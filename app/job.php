<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    protected $fillable = ['posisi', 'gaji', 'detail', 'waktu_proses'];

    public function users() {
         return $this->belongsToMany('App\User', 'lamarans')->withPivot('message','status','user_id'); 
        }

}
