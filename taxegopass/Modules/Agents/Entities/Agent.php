<?php

namespace Modules\Agents\Entities;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Paiements\Entities\Paiement;


class Agent extends Model
{
    use HasFactory;

    protected $fillable = ['id','nomsag','genreag','datenaissag','mobile','emailag','passwordag'];
    
    protected static function newFactory()
    {
        return \Modules\Agents\Database\factories\AgentFactory::new();
    }

    public function paiement()
    {
        return $this->hasMany(Paiement::class,'ref_agent');
    }
}
