<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lokers extends Model
{
    use HasFactory;
    protected $guarded = ['mana'];
    public function educations()
    {
    return $this->belongsTo('App\Models\educations');
    }
}
