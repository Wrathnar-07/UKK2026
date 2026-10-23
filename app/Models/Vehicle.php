<?php

namespace App\Models;

use Sakuci\Database\Model;
use Sakuci\Session;

class Vehicle extends Model
{
    protected static ?string $table = 'vehicles';

    protected array $fillable = ['plate_number', 'vehicle_type', 'vehicle_color', 'owner'];
}
