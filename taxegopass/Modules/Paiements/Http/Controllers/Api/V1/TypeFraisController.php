<?php

namespace Modules\Paiements\Http\Controllers\Api\V1;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Traits\JsonResponseTrait;
use Illuminate\Support\Facades\Storage;
use Modules\Paiements\Http\Requests\AdresseRequest;
use Modules\Paiements\Entities\TypeFrais; 

class TypeFraisController extends Controller
{
    use JsonResponseTrait;
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $typefrais = TypeFrais::orderBy('id','desc')->paginate(5);
        return $this->sendData($typefrais);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('paiements::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        try {         
                $typefrais = new TypeFrais;
                $typefrais->designation = $request->input('designation');
                $typefrais->prix= $request->input('prix');
                $typefrais->validite= $request->input('validite');
                
                $typefrais->save();
             return $this->sendResponse($typefrais, 'Type Frais saved success');
         } catch (\Exception $ex) {
        return $this->sendErrorResponse('Fail to save typeFrais');
    }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $typefrais= TypeFrais::findOrFail($id);
        return $this->sendData($typefrais);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $typefrais= TypeFrais::findOrFail($id);
        return $this->sendData($typefrais);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'designation' => 'sometimes|string',
            'prix' => 'sometimes|float',
            'validite'=>'sometimes|string'
        ]);
        try {         
            $typefrais = new TypeFrais;
            $typefrais->designation = $request->input('designation');
            $typefrais->prix= $request->input('prix');
            $typefrais->save();
         return $this->sendResponse($typefrais, 'Type Frais saved success');
     } catch (\Exception $ex) {
    return $this->sendErrorResponse('Fail to save typeFrais');
}

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        TypesFrais::find($id)->delete();
        return $this->sendResponse('Type frais deleted success');
    }
 
    public function getTypePaiement(){
        return ('paiements.typepaiement');
    }
}
