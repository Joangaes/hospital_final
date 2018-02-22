<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pacient extends Model
{
    protected $table = 'pacients';

    protected $primaryKey = 'pacient_id';

    protected $fillable = ['name','surname','birthDate','cellphone','in_date','out_date'];
}
