<?php

namespace Modules\Vols\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Avion extends Model
{
    use HasFactory;

    protected $fillable = ['id','designation','nombreplace','typeavion','ref_compagnie'];
    
    protected static function newFactory()
    {
        return \Modules\Vols\Database\factories\AvionFactory::new();
    }

    public function compagnie(){
        return $this->belongsTo(Compagnie::class,'ref_compagnie');
    }

    public function vol(){
        return $this->HasMany(Vol::class,'ref_vol');
    }
}
