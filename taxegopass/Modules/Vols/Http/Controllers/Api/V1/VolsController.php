<?php

namespace Modules\Vols\Http\Controllers\Api\V1;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Traits\JsonResponseTrait;
use Illuminate\Support\Facades\Storage;
use Modules\Vols\Http\Requests\VolsRequest;
use Modules\Vols\Entities\Vol;

class VolsController extends Controller
{
    use JsonResponseTrait;
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $vols = Vol::with(['avion'])->orderBy('id','desc')->paginate(5);
        return $this->sendData($vols);
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
                $vols = new Vol;
                $vols->designation = $request->input('designation');
                $vols->datedepart = $request->input('datedepart');
                $vols->heuresortie = $request->input('heuresortie');
                $vols->destination =$request->input('destination');
                $vols->ref_avion = $request->input('ref_avion');
                $vols->save();
            return $this->sendResponse($vols, 'vol saved success');
        } catch (\Exception $ex) {
            return $this->sendErrorResponse('Fail to save Passagers');
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $vols = Vol::findOrFail($id);
        return $this->sendData($vols);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $vols = Vol::findOrFail($id);
        return $this->sendData($vols);
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
            'datedepart' => 'sometimes|date',
            'heuresortie' => 'sometimes|string',
            'destination' => 'sometimes|string',
            'ref_avion' => 'sometimes|Integer'
        ]);
        try {          
            $vols = new Vol;
                $vols->designation= $request->input('designation');
                $vols->datedepart= $request->input('datedepart');
                $vols->heuresortie= $request->input('heuresortie');
                $vols->destination=$request->input('destination');
                $vols->ref_avion = $request->input('ref_avion');
                $vols->save();

         return $this->sendResponse($passagers, 'Vol Changed ');
     } catch (\Exception $ex) {
         return $this->sendErrorResponse('Vol no Changed');
     }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        Vol::find($id)->delete();
        return $this->sendResponse('Passagers deleted success');
    }
    public function getVol(){
        return view('vols.vol');
    }
}
