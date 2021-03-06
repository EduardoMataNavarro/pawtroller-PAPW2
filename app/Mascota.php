<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mascota extends Model
{
    use SoftDeletes;
    //
    protected $fillable = [
        'nombreMascota', 'id_status', 'id_usuario','id_raza', 'id_color', 'comentarios',
    ];

    public function User()
    {
        return $this->belongsTo('app\User');
    }
    public function videoMascota()
    {
        return $this->hasMany('app\videoMascota');
    }
    public function imagenMascota()
    {
        return $this->hasMany('app\imagenMascota');
    }
    public function Raza()
    {
        return $this->hasOne('app\Raza');
    }
    public function Perdido()
    {
        return $this->hasMany('App\Perdido');
    }
    public function Color()
    {
        return $this->hasOne('App\colorMascota');
    }
    public function Status(){
        return $this->hasOne('App\StatusMascota');
    }
}
