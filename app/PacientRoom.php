<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PacientRoom extends Model
{
    protected $table = 'pacient_rooms';

    protected $primaryKey ='pacient_room_id';

    protected $fillable = ['pacient_id','nurse_id','room_number','indications'];

    public function Nurse(){
      return $this->hasOne('App\Nurse','nurse_id','nurse_id');
    }
    public function Pacient(){
      return $this->hasOne('App\Pacient','pacient_id','pacient_id');
    }
}
