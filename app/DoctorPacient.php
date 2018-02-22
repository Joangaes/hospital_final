<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorPacient extends Model
{
    protected $table = 'doctor_pacients';

    protected $primaryKey = 'doctor_pacient_id';

    protected $fillabe = ['doctor_id','pacient_id'];

    public function Doctor(){
      return $this->hasOne('App\Doctor','doctor_id','doctor_id');
    }
    public function Pacient(){
      return $this->hasOne('App\Pacient','pacient_id','pacient_id');
    }
}
