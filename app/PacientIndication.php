<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PacientIndication extends Model
{
    protected $table = 'pacient_indications';

    protected $primaryKey = 'pacient_indication_id';

    protected $fillable = ['pacient_id','indications'];

    public function Pacient(){
      return $this->hasOne('App\Pacient','pacient_id','pacient_id');
    }
}
