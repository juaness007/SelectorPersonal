<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $fillable = ['salarios']; // Especifica los campos que se pueden asignar masivamente

    // No necesitas definir ninguna relación en este caso, ya que la tabla solo contiene información sobre los salarios
}
