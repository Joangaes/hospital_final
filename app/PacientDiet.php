<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PacientDiet extends Model
{
  protected $table = 'pacient_diets';

  protected $primaryKey = 'pacient_diet_id';

  protected $fillable = ['pacient_id','food','time_date'];


  public function Pacient(){
    return $this->hasOne('App\Pacient','pacient_id','pacient_id');
  }
}
