<?php

namespace UCICApp;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{

    protected $tables = 'vehiculos';

    protected $filllable = ['empresa','marca','modelo','codigo_vehiculo','numero_chasis',
                            'anio','codigo_motor','precio','fotos'];
}
