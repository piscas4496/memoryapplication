<?php

namespace Modules\Paiements\Entities;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Agents\Entities\Agent;
use Modules\Paiements\Entities\TypeFrais;
use Modules\Passagers\Entities\Passager;
class Paiement extends Model
{
    use HasFactory;

    protected $fillable = ['motif','datepaiement','ref_passager','ref_agent','ref_typefrais,paiement_qrcode'];
    
    protected static function newFactory()
    {
        return \Modules\Paiements\Database\factories\PaiementFactory::new();
    }
    public function passager()
    {
        return $this->belongsTo(Passager::class,'ref_passager');
    }
    public function agent()
    {
        return $this->belongsTo(Agent::class,'ref_agent');
    }
    public function typefrais()
    {
    return $this->belongsTo(TypeFrais::class,'ref_typefrais');
    }

}
