<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    protected $table = 'schedules';

    protected $primaryKey = 'schedules_id';

    protected $fillable = ['nurse_id','turn_init','turn_end'];

    public function Nurse(){
      return $this->hasOne('App\Nurse','nurse_id','nurse_id');
    }
}
