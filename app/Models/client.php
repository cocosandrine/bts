<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\abonnement;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomcl' ,
         'adressecl',
         'mailcl' ,
         'telcl'
        ];


        public function abonnements()
        {
            return $this->hasMany(abonnement::class);
        }
}

