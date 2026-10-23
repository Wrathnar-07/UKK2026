<?php

namespace App\Models;

use Sakuci\Database\Model;
use Sakuci\Session;

class Blacklist extends Model
{
    protected static ?string $table = 'blacklists';

    protected array $fillable = ['blacklisted_user', 'blacklist_details'];
}
