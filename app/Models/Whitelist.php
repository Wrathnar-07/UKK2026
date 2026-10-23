<?php

namespace App\Models;

use Sakuci\Database\Model;
use Sakuci\Session;

class Whitelist extends Model
{
    protected static ?string $table = 'whitelists';

    protected array $fillable = ['whitelisted_user', 'area_designation', 'whitelist_details'];
}
