<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PacientMedicines extends Model
{
    protected $table = 'pacient_medicines';

    protected $primaryKey = 'pacient_medicines_id';

    protected $fillable = 'pacient_id','nurse_id','medicine','dosis_interval';

    public function Nurse(){
      return $this->hasOne('App\Nurse','nurse_id','nurse_id');
    }

    public function Pacient(){
      return $this->hasOne('App\Pacient','pacient_id','pacient_id');
    }
}
