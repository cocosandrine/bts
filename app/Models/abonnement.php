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
        return $this->belongsToMany(service::class);
    }

    public function facture()
    {
        return $this->belongsTo(facture::class);
    }

    public function scopeTotal ( $query,$facture_id)

    {
        return $query->where('facture_id', '=', $facture_id);
    }

}

