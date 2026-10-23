<?php

namespace App\Models;

use Sakuci\Database\Model;
use Sakuci\Session;

class Log extends Model
{
    protected static ?string $table = 'logs';

    protected array $fillable = ['log_time', 'log_details'];
}
