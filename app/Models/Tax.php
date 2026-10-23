<?php

namespace App\Models;

use Sakuci\Database\Model;

class Tax extends Model
{
    protected static ?string $table = 'taxes';

    protected array $fillable = ['tax_value', 'entery_time', 'exit_time'];
}
