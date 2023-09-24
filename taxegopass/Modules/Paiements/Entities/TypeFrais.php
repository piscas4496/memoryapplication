<?php

namespace Modules\Paiements\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypeFrais extends Model
{
    use HasFactory;

    protected $fillable = ['designation','prix','validite'];
    
    protected static function newFactory()
    {
        return \Modules\Paiements\Database\factories\TypeFraisFactory::new();
    }

    public function typefrais()
    {
        return $this->HasMany(Paiement::class,'ref_typefrais');
    }
}
