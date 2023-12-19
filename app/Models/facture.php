<?php

namespace App\Models;
use App\models\reglement;
use App\models\service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class facture extends Model
{
    use HasFactory;

    protected $table= 'facture';
    public function service()
    {
        return $this->belongsToMany('App\service');

       /* $facture=facture::find('factureid'); //récupérer facture
        $service= $facture->nomser; //récupérer les service de cette facture
        foreach ($facture as $facture){
            echo $service->nomser; //acceder au nom service
        }*/
    }


 public function client()
 {
    return $this->belongsTo(client::class);
 }







    public function reglement()
        {
            return $this->hasMany(reglement::class);
        }

}
