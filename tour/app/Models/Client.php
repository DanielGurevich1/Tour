<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    public function clientHasManager()
    {
        return $this->hasMany('App\Models\Manager', 'client_id', 'id');
    }
}