<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class abonnement extends Model
{
    use HasFactory;


    public function client()
    {
        return $this->belongsToMany(client::class, 'abonnement', 'abonnement_id','client_id');
    }
    
}

