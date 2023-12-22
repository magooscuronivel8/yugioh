<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $nombre
 * @property $apellidos
 * @property $nif
 * @property $email
 * @property $telefono
 * @property $domicilio
 * @property $edad
 * @property $observaciones
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellidos' => 'required',
		'nif' => 'required',
		'email' => 'required',
		'telefono' => 'required',
		'domicilio' => 'required',
		'edad' => 'required',
		'observaciones' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellidos','nif','email','telefono','domicilio','edad','observaciones'];



}
