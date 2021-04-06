<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    public function programManager()
    {
        return $this->belongsTo('App\Models\Manager', 'manager_id', 'id');
    }
    public function programClient()
    {
        return $this->belongsTo('App\Models\Client', 'client_id', 'id');
    }
}