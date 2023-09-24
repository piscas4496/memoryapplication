<?php

namespace Modules\Vols\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Compagnie extends Model
{
    use HasFactory;

    protected $fillable = ['id','designation'];
    
    protected static function newFactory()
    {
        return \Modules\Vols\Database\factories\CompagnieFactory::new();
    }

    public function compagnie(){
        return $this->HasMany(Avion::class,'ref_compagnie');
    }
}
