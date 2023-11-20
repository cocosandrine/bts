<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class abonnement extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomcl' ,
         'adressecl',
         'mailcl' ,
         'telcl'
        ];


    public function client()
    {
        return $this->belongsTo(client::class);
    }

    public function service()
    {
        return $this->hasMany(service::class);
    }


}

