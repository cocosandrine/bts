<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\service;
use App\models\facture;

class factser extends Model
{
    use HasFactory;

 /*$service = service::find(1);
foreach($service->facture as $facture) {
    echo $facture->pivot->service_id;
}
return $this->belongsToMany('App\facture')->withPivot('prix', 'quantite','value');*/

}
