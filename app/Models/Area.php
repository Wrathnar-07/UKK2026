<?php

namespace App\Models;

use Sakuci\Database\Model;
use Sakuci\Session;

class Area extends Model
{
    protected static ?string $table = 'areas';
}

class SectorA1 extends Model
{
    $spot=[]
    'occupation'->boolean('is_active')->default(false)

    protected static ?string $table = 'sector_a1';
    for($i=1;$i<=20;$i++){
        $spot[]=[
            'id' => $i,
            'occupation' => false
        ]
    }
    protected $fillable = ['occupation'];
}
class SectorA2 extends Model
{
    $spot=[]
    'occupation'->boolean('is_active')->default(false)

    protected static ?string $table = 'sector_a2';
    for($i=1;$i<=20;$i++){
        $spot[]=[
            'id' => $i,
            'occupation' => false
        ]
    }
    protected $fillable = ['occupation'];
}
class SectorA3E extends Model
{
    $spot=[]
    'occupation'->boolean('is_active')->default(false)

    protected static ?string $table = 'sector_a3e';
    for($i=1;$i<=20;$i++){
        $spot[]=[
            'id' => $i,
            'occupation' => false
        ]
    }
    protected $fillable = ['occupation'];
}
class SectorB1 extends Model
{
    $spot=[]
    'occupation'->boolean('is_active')->default(false)

    protected static ?string $table = 'sector_b1';
    for($i=1;$i<=20;$i++){
        $spot[]=[
            'id' => $i,
            'occupation' => false
        ]
    }
    protected $fillable = ['occupation'];
}
class SectorB2E extends Model
{
    $spot=[]
    'occupation'->boolean('is_active')->default(false)

    protected static ?string $table = 'sector_b2e';
    for($i=1;$i<=20;$i++){
        $spot[]=[
            'id' => $i,
            'occupation' => false
        ]
    }
    protected $fillable = ['occupation'];
}
class SectorC1 extends Model
{
    $spot=[]
    'occupation'->boolean('is_active')->default(false)

    protected static ?string $table = 'sector_c1';
    for($i=1;$i<=20;$i++){
        $spot[]=[
            'id' => $i,
            'occupation' => false
        ]
    }
    protected $fillable = ['occupation'];
}
class SectorC2 extends Model
{
    $spot=[]
    'occupation'->boolean('is_active')->default(false)

    protected static ?string $table = 'sector_c2';
    for($i=1;$i<=20;$i++){
        $spot[]=[
            'id' => $i,
            'occupation' => false
        ]
    }
    protected $fillable = ['occupation'];
}
class SectorC3E extends Model
{
    $spot=[]
    'occupation'->boolean('is_active')->default(false)

    protected static ?string $table = 'sector_c3e';
    for($i=1;$i<=20;$i++){
        $spot[]=[
            'id' => $i,
            'occupation' => false
        ]
    }
    protected $fillable = ['occupation'];
}
class SectorD extends Model
{
    $spot=[]
    'occupation'->boolean('is_active')->default(false)

    protected static ?string $table = 'sector_d';
    for($i=1;$i<=20;$i++){
        $spot[]=[
            'id' => $i,
            'occupation' => false
        ]
    }
    protected $fillable = ['occupation'];
}