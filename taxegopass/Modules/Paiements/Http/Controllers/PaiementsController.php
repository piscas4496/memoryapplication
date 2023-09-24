<?php

namespace Modules\Paiements\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PaiementsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('paiements::index');
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
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('paiements::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('paiements::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
    		// $motif='';
		// $donnees=http::get('http://127.0.0.1:8000/api/v1/paiement/paiement')->json();

		// [
		// 	'paiements'=>$donnees,
		// ];
		
		// foreach($donnees as $donne)
		
		// $motif=$donne->motif;
		
		//$html = $this->getInfoPaiement($id);    //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
         
			  
			  
			  
			  
			  //
            //   $paiement=Paiement::join('passagers','passagers.id','=','paiements.ref_passager')
			//                     ->join('agents','agents.id','=','paiements.ref_agent')
			// 					->join('type_frais','type_frais.id','=','paiements.ref_typefrais')
			// 					->where('paiements.id')
            //                     ->get(['paiements.*','passagers.nomspass','passagers.genrepass','agents.nomsag',]);
								
			//   $vols=Passager::join('vols','vols.id','=','passagers.ref_vol')
			//   ->get(['passagers.*','vols.id','vols.datedepart','vols.destination',]);
			  
			  
			//   $compagnie=Avion::join('compagnies','compagnies.id','=','avions.ref_compagnie')
			//   ->get(['avions.*','compagnies.designation']);
			  
            //     $output='';
            //     foreach ( $paiement as $row) 
            //     {

            //         $code=$row->id;
			// 		$nomagent=$row->nomsag;
            //         $motifpaiement=$row->motif;
            //         $noms=$row->nomspass;
            //         $genre=$row->genrepass;
            //         $datenaiss=$row->datenaisspass;
            //         $telephone=$row->telephone;
            //         $email=$row->emailpass;                                                    
            //     }
			// 	foreach ($vols as $rows) 
            //     {

            //         $idvol=$rows->id;
            //         //$motifpaiement=$rows->motif;
            //         //$noms=$rows->nomspass;
            //         //$genre=$rows->genrepass;
            //         //$datenaiss=$rows->datenaisspass;
            //         //$telephone=$rows->telephone;
            //         //$email=$rows->emailpass 
            //     }
			// 	foreach (  $compagnie as $row) 
            //     {

            //         $idcompagnie=$row->id;
            //         // $motifpaiement=$row->motif;
            //         // $noms=$row->nomspass;
            //         // $genre=$row->genrepass;
            //         // $datenaiss=$row->datenaisspass;
            //         // $telephone=$row->telephone;
            //         // $email=$row->emailpass;
                                     
                
            //     } //
    }
}
