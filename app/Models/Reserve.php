<?php

namespace App\Models;

use Sakuci\Database\Model;

class Reserve extends Model
{
    protected static ?string $table = 'reserves';

    protected array $fillable = ['reserved_spot', 'reservee', 'reserve_details'];
}
