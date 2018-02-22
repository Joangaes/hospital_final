<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    protected $table = 'nurses';

    protected $primaryKey = 'nurse_id';

    protected $fillable = ['name','surname','birthDate','cellphone','enfermera_user','password','user_type'];
}
