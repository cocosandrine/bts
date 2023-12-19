<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class service extends Model
{
    use HasFactory;
    protected $table= 'service';

    public function abonnement()
    {
        return $this->belongsToMany(abonnement::class);
    }


    public function facture()
    {
        return $this->belongsToMany('App\facture');
    }
}
