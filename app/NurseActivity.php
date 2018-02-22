<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NurseActivity extends Model
{
    protected $table = 'nurse_activities';

    protected $primaryKey = 'nurse_activities_id';

    protected $fillable = ['nurse_id','activity','schedule_in','schedule_out','duration'];

    public function Nurse(){
      return $this->hasOne('App\Nurse','nurse_id','nurse_id');
    }
}
