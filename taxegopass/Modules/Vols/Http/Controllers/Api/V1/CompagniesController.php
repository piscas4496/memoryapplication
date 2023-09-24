<?php

namespace Modules\Vols\Http\Controllers\Api\V1;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Traits\JsonResponseTrait; 
use Illuminate\Support\Facades\Storage;
use Modules\Vols\Http\Requests\CompagnieRequest;
use Modules\Vols\Entities\Compagnie;

class CompagniesController extends Controller
{
    use JsonResponseTrait;
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $compagnies = Compagnie::orderBy('id','desc')->paginate(5);
        return $this->sendData($compagnies);
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
            $compagnies= new Compagnie;
            $compagnies->designation= $request->input('designation');
            $compagnies->save();

        return $this->sendResponse($compagnies, 'Commpagnie added');
    } catch (\Exception $ex) {
        return $this->sendErrorResponse('Fail to add Compagnie');
    }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $compagnies = Compagnie::findOrFail($id);
        return $this->sendData($compagnies);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $compagnies = Compagnie::findOrFail($id);
        return $this->sendData($compagnies);
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
        ]);
        try {
            $compagnies= new Compagnie;
            $compagnies->designation= $request->input('designation');
            $compagnies->save();

        return $this->sendResponse($compagnies, 'Commpagnie updated');
    } catch (\Exception $ex) {
        return $this->sendErrorResponse('Fail to update Compagnie');
    }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $compagnies = Compagnie::find($id)->delete();
        return $this->sendResponse('Compagnie deleted successfully');
    }
    
    public function getCompagnie(){
        return view('vols.compagnie');
    }
}
