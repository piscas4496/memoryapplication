<?php

namespace Modules\Passagers\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Passagers\Entities\Passager;

class Adresse extends Model
{
    use HasFactory;

    protected $fillable = ['pays','province','ville','commune','quartier','avenue','numero'];
    
    protected static function newFactory()
    {
        return \Modules\Passagers\Database\factories\AdresseFactory::new();
    }
    public function adresse()
    {
        return HasMany(Passager::class,'ref_adresse');
    }
}
