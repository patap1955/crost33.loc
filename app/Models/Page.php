<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    public $guarded = [];

    public function prices() {
        return $this->hasMany(Price::class);
    }
}
