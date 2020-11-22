<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class educations extends Model
{
    use HasFactory;
    protected $guarded = ['mana'];
    public function lokers ()
    {
        return $this->hasMany('App\Models\lokers');

    }
}
