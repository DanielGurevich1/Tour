<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;
    public function clientManager()
    {
        return $this->belongsTo('App\Models\Client', 'client_id', 'id');
    }
}