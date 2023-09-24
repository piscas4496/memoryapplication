<?php

namespace Modules\Passagers\Http\Controllers\Api\V1;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Traits\JsonResponseTrait; 
use Illuminate\Support\Facades\Storage;
use Modules\Passagers\Http\Requests\AdressesRequest;
use Modules\Passagers\Entities\Adresse;

class AdressesController extends Controller
{
    use JsonResponseTrait;
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $adresses = Adresse::orderBy('id','desc')->paginate(5);
        return $this->sendData($adresses);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('passagers::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        try {    
            $adresses = new Adresse;
            $adresses->pays = $request->input('pays');
            $adresses->province= $request->input('province');
            $adresses->ville= $request->input('ville');
            $adresses->commune = $request->input('commune');
            $adresses->quartier = $request->input('quartier');
            $adresses->avenue= $request->input('avenue');
            $adresses->numero=$request->input('numero');
            $adresses->save();  
        return $this->sendResponse($adresses, 'Adresse saved with success');
    } catch (\Exception $ex) {
        return $this->sendErrorResponse('Fail to save adresse try to verify your input'.$ex);
    }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $adresses=Adresse::findOrfail($id);
        return $this->sendData($adresses);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
       $adresses=Adresse::findOrfail($id);
       return $this->sendData($adresses);

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
            'pays' => 'sometimes|string',
            'province' => 'sometimes|string',
            'ville' => 'sometimes|string',
            'commune' => 'sometimes|string',
            'quartier' => 'sometimes|string',
            'avenue'=>'sometimes|string',
            'numero'=>'sometimes|intiger'
        ]);
     
        try {          
            $passagers = new Passager;
            $passagers->pays = $request->input('pays');
            $passagers->province= $request->input('province');
            $passagers->ville= $request->input('ville');
            $passagers->commune = $request->input('commune');
            $passagers->quartier = $request->input('quartier');
            $passagers->avenue= $request->input('avenue');
            $passagers->numero=$request->input('numero');
            $passagers->save();  

         return $this->sendResponse($passagers, 'Adresse updated ');
     } catch (\Exception $ex) {
         return $this->sendErrorResponse('adresse no updated');
     }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        Adresse::find($id)->delete();
        return $this->sendResponse('The Adresse number $id has deleted');
    }
    public function getAdresse(){
        return ('passagers.adresse');
    }
}
