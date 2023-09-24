<?php

namespace Modules\Vols\Http\Controllers\Api\V1;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Traits\JsonResponseTrait;
use Illuminate\Support\Facades\Storage;
use Modules\Vols\Http\Requests\AvionsRequest;
use Modules\Vols\Entities\Avion;


class AvionsController extends Controller
{
    use JsonResponseTrait;
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $avions = Avion::with(['compagnie'])->orderBy('id','desc')->paginate(5);
        return $this->sendData($avions);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('vols::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        try {
                $avions= new Avion;
                $avions->designation= $request->input('designation');
                $avions->nombreplace= $request->input('nombreplace');
                $avions->typeavion= $request->input('typeavion');
                $avions->ref_compagnie = $request->input('ref_compagnie');
                $avions->save();
    
            return $this->sendResponse($avions, 'Avion affected');
        } catch (\Exception $ex) {
            return $this->sendErrorResponse('fail to save there are some wrong! retry again');
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $avions = Avion::findOrFail($id);
        return $this->sendData($avions);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('vols::edit');
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
            'nombreplace' => 'sometimes|integer',
            'typeavion' => 'sometimes|string',
            'ref_compagnie' => 'sometimes|Integer'
        ]);

        try {
            if(!is_null($request->image)){

                $avions= new Avion;
                $avions->designation= $request->input('designation');
                $avions->nombreplace= $request->input('nombreplace');
                $avions->typeav= $request->input('typeavion');
                $avions->ref_compagnie = $request->input('ref_compagnie');
                $avions->save();
            }     
    
            return $this->sendResponse($avions, 'Avion updated');
        } catch (\Exception $ex) {
            return $this->sendErrorResponse('fail to update there are some wrong! retry again');
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $avions = Avion::find($id)->delete();
        return $this->sendResponse('Passagers deleted success');
    }
    
    public function getAvion(){
        return view('vols.avion');
    }
}
