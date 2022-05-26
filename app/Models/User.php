<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Casts\Attribute; // Necesario para usar mutadores

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    // La siguiente expresion es para que cuando se valla a guardar un registro primero entra en la siguiente funcion y modifica el valor que se va a guardar dependiendo de lo que se especifique, en este caso se esta convirtiendo todo el texto a minusculas.
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value); // Sintaxis para acceder al campo
    } // Mutadores


    // La funcion es un accesor que cambia el valor del campo "name" a que las palabras comienzen en mayuscula.
    public function getNameAttribute($value)
    {
        return ucwords($value);
    } // Accesores
}
