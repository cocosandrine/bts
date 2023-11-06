<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomcl' ,
         'adressecl',
         'mailcl' ,
         'telcl'
        ];


        public function abonnement()
        {
            return $this->belongsToMany(abonnement::class, 'client', 'client_id', 'abonnement_id');
        }
}

