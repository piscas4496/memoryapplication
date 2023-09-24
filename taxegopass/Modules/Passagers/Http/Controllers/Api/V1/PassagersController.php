<?php

namespace Modules\Passagers\Http\Controllers\Api\V1;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Traits\JsonResponseTrait;
use Illuminate\Support\Facades\Storage;
use Modules\Passagers\Http\Requests\PassagersRequest;
use Modules\Passagers\Entities\Passager;
use Modules\Passagers\Entities\Adresse;
use DB;


class PassagersController extends Controller
{
    use JsonResponseTrait;
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $passagers = Passager::with(['adresse','vol'])-> orderBy('id','desc')->paginate(5);
        return $this->sendData($passagers);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        try {    
            $passagers = new Passager;
            $passagers->nomspass = $request->input('nomspass');
            $passagers->genrepass= $request->input('genrepass');
            $passagers->datenaisspass= $request->input('datenaisspass');
            $passagers->telephone = $request->input('telephone');
            $passagers->emailpass = $request->input('emailpass');
            $passagers->ref_adresse= $request->input('ref_adresse');
            $passagers->ref_vol=$request->input('ref_vol');
            $passagers->save();
        return $this->sendResponse($passagers, 'Passagers saved success');
    } catch (\Exception $ex) {
        return $this->sendErrorResponse('Fail to save Passager try to verify your input');
    }

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $passagers= Passager::findOrFail($id);
        return $this->sendData($passagers);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $passagers= Passager::findOrFail($id);
        return $this->sendData($passagers);
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
            'nomsag' => 'sometimes|string',
            'genreag' => 'sometimes|string',
            'datenaissag' => 'sometimes|date',
            'mobile' => 'sometimes|string',
            'emailag' => 'sometimes|string',
        ]);
     
        try {
            $passagers = new Passager;
            $passagers->nomspass = $request->input('nomspass');
            $passagers->genrepass= $request->input('genrepass');
            $passagers->datenaisspass= $request->input('datenaisspass');
            $passagers->telephone = $request->input('telephone');
            $passagers->emailpass = $request->input('emailpass');
            $passagers->ref_adresse= $request->input('ref_adresse');
            $passagers->ref_vol=$request->input('ref_vol');
            $passagers->save();

         return $this->sendResponse($passagers, 'Passagers updated ');
     } catch (\Exception $ex) {
         return $this->sendErrorResponse('Passagers no updated');
     }
    }


    
    
    // public function generate($id){
    //     $data = Passager::find($id);
    //     $qrcode = QrCode::size(150)->generate($data->noms);

    //         $this->fpdf = new Fpdf;
    //         $this->fpdf->AddPage();
    // 	    $this->fpdf->SetFont('Arial', 'I', 12);
    //         $this->fpdf->Image($qrcode,6,5,196);
    //         // Header
    //         // $this->fpdf->Image('../public/img/entete2.jpg',6,5,196);
    //         $this->fpdf->Ln(35);
    //         $this->fpdf->Ln();
    //         $this->fpdf->Cell(25,6,'id',1,0,'C');
    //         $this->fpdf->Cell(50,6,'nomspass',1,0,'C');
    //         $this->fpdf->Cell(50,6,'genrepass',1,0,'C');
    //         $this->fpdf->Cell(50,6,'telephone',1,0,'C');
    //         $this->fpdf->Cell(50,6,'emailpass',1,0,'C');
    //         $this->fpdf->Cell(50,6,'ref_adresses',1,0,'C');
    //         $this->fpdf->Ln();
    //         // foreach ($data as $pan)
    //         // {
    //             $this->fpdf->Cell(25,8,QrCode::size(200)->generate($data->id),1,0,'C');
    //             $this->fpdf->Cell(50,8,$data->noms,1,0,'C');
    //             $this->fpdf->Cell(50,8,$data->profession,1,0,'C');
    //             $this->fpdf->Cell(50,8,$data->adresse,1,0,'C');
    //             $this->fpdf->Ln();
    //         //}
    //         $this->fpdf->Output();
    //         exit;

    //     // return view('pages.qrcode',compact('qrcode'));
    //  }

    // /**
    //  * Remove the specified resource from storage.
    //  * @param int $id
    //  * @return Renderable
    //  */
    public function destroy($id)
    {
        Passager::find($id)->delete();
        return $this->sendResponse('Passagers number $id deleted');
    }
  
    public function getPassager(){
        return view('passagers.passager');
    }
    
//     public function pdf_allpassagers(Request $request){
        
//             $html = $this->getallpassagers();
//             $pdf = \App::make('dompdf.wrapper');
//             // echo($html);
//             $pdf->loadHTML($html);
//             $pdf->loadHTML($html)->setPaper('a4','landscape');
			
//     return $pdf->stream();
// }    
//       public function getallpassagers(){
//         $numero;
//         $noms;
//         $genre;
//         $age;
//         $datenaiss;
//         $telephone;
//         $email;
//         $adresse;
        
       
//       }
        
      public function pdf_allpassager(Request $request)
      {
              $html = $this->allpassager();
              $pdf = \App::make('dompdf.wrapper');
              // echo($html);
              $pdf->loadHTML($html);
              $pdf->loadHTML($html)->setPaper('a4','landscape');
              
              return $pdf->stream();           
      }
      public function allpassager(){
          $code="";
          $nomspass='';
          $genrepass='';
          $age='';
          $telephone='';
          $emailpass='';
          $adresse='';
          
          
          $data  = DB::table('passagers')->orderBy('id','asc')
          ->join('adresses' , 'adresses.id','=','passagers.ref_adresse')
          ->select("passagers.id","nomspass","genrepass","datenaisspass",
              "telephone","emailpass","quartier",
               )  
          ->selectRaw('TIMESTAMPDIFF(YEAR, datenaisspass, CURDATE()) as age_passager')
          ->get();
          $output='';
          $donnees='';
          foreach ($data as $rows){
              $numero =$rows->id;
              $noms=$rows->nomspass;
              $genre=$rows->genrepass;
              $age=$rows->age_passager;
              $datenaiss=$rows->datenaisspass;
              $telephone=$rows->telephone;
              $email=$rows->emailpass;
              $adresse =$rows->quartier;   
              
           
          
       
              
              
            //   foreach ($data as $row) 
            //   {           $code=$row->id;
            //               $nomagent=$row->nomsag;
            //               $genre=$row->genrepass;
            //               $telephone=$row->telephone;
            //               $email=$row->emailpass;
            //               $age=$row->age_passager;
            //               $motifpaiement=$row->motif;
            //               $datepaiement=$row->datepaiement;
            //               $noms=$row->nomspass;
            //               $prix=$row->prix ;	
            //               $typepaiement=$row->designation;
            //               $devise="USD";
                                              
                          $donnees .='
                          
                      
        <tr style="vertical-align:top;">
		<td style="height:41px;"></td>
		<td class="csAA5B9630" style="width:64px;height:39px;line-height:18px;text-align:center;vertical-align:top;"><nobr>00011</nobr></td>
		<td class="cs425CAA45" colspan="2" style="width:105px;height:39px;line-height:18px;text-align:center;vertical-align:top;">'.$noms.'</td>
		<td class="cs425CAA45" colspan="2" style="width:94px;height:39px;line-height:18px;text-align:center;vertical-align:top;"><nobr>'.$genre.'</nobr></td>
		<td class="cs425CAA45" colspan="4" style="width:77px;height:39px;line-height:18px;text-align:center;vertical-align:top;"><nobr>'.$age.'ans</nobr></td>
		<td class="cs425CAA45" colspan="2" style="width:131px;height:39px;line-height:18px;text-align:center;vertical-align:top;"><nobr>'.$datenaiss.'</nobr></td>
		<td class="cs425CAA45" style="width:100px;height:39px;line-height:18px;text-align:center;vertical-align:top;"><nobr>'.$telephone.'</nobr></td>
		<td class="cs425CAA45" colspan="5" style="width:196px;height:39px;line-height:18px;text-align:center;vertical-align:top;"><nobr>'.$email.'</nobr></td>
		<td class="cs425CAA45" style="width:101px;height:39px;line-height:18px;text-align:center;vertical-align:top;"><nobr>'.$adresse.'</nobr></td>
	</tr>';
  
                          
                                      
              }
              $typeconte='Content-Type';
              $format='text/html; charset=utf-8';
              $pays='Republique democratique du congo';
              $rva='REGIE DES VOIES AERIENNES';
              $image='image';
              $idef='I.DE.F.';
              $gopass='GO-PASS';
              $aeroport='AEROPORT INTERNATIONNAL DE GOMA';
              $imagedrc='<img alt="" src="data:image/jpg;base64,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" style="width:217px;height:119px;" />';             
              $token2='<img alt="" src="data:image/png;base64,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" style="width:236px;height:105px;" /></div>';
              $printpaiement='
              
              
              <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0014)about:internet -->
<html>
<head> 
	<title>Listes passageres</title>
	<meta HTTP-EQUIV='.$typeconte.' CONTENT='.$format.'/>
	<style type="text/css">
		.csAA5B9630 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.cs425CAA45 {color:#000000;background-color:transparent;border-left-style: none;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.cs101A94F7 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.csE5855143 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:21px; font-weight:bold; font-style:normal; padding-left:2px;padding-right:2px;}
		.cs38564E56 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:21px; font-weight:bold; font-style:normal; text-decoration: underline;padding-left:2px;padding-right:2px;}
		.cs86DE22CD {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:29px; font-weight:bold; font-style:normal; padding-left:2px;}
		.csF7D3565D {height:0px;width:0px;overflow:hidden;font-size:0px;line-height:0px;}
	</style>
</head>
<body leftMargin=10 topMargin=10 rightMargin=10 bottomMargin=10 style="background-color:#FFFFFF">
<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;width:887px;height:230px;position:relative;">
	<tr style="vertical-align:top;">
		<td style="width:10px;height:3px;"></td>
		<td style="width:66px;"></td>
		<td style="width:7px;"></td>
		<td style="width:99px;"></td>
		<td style="width:90px;"></td>
		<td style="width:5px;"></td>
		<td style="width:23px;"></td>
		<td style="width:3px;"></td>
		<td style="width:8px;"></td>
		<td style="width:44px;"></td>
		<td style="width:20px;"></td>
		<td style="width:112px;"></td>
		<td style="width:101px;"></td>
		<td style="width:81px;"></td>
		<td style="width:8px;"></td>
		<td style="width:64px;"></td>
		<td style="width:27px;"></td>
		<td style="width:17px;"></td>
		<td style="width:102px;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:35px;"></td>
		<td></td>
		<td></td>
		<td class="cs101A94F7" colspan="4" rowspan="6" style="width:217px;height:119px;text-align:left;vertical-align:top;"><div style="overflow:hidden;width:217px;height:119px;">
        '.$imagedrc.'</div>
		</td>
		<td></td>
		<td class="cs86DE22CD" colspan="9" style="width:463px;height:35px;line-height:34px;text-align:left;vertical-align:middle;"><nobr>R&#233;publique&nbsp;D&#233;mocratique&nbsp;du&nbsp;Congo</nobr></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:7px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:26px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="csE5855143" colspan="7" style="width:426px;height:26px;line-height:25px;text-align:center;vertical-align:top;"><nobr>AEROPORT&nbsp;INTERNATONNAL&nbsp;DE&nbsp;GOMA</nobr></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:7px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:27px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="csE5855143" colspan="3" style="width:290px;height:27px;line-height:25px;text-align:center;vertical-align:top;"><nobr>REGIE&nbsp;DES&nbsp;VOIES&nbsp;AERIENS</nobr></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:17px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:4px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:26px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="cs38564E56" colspan="10" style="width:401px;height:26px;line-height:25px;text-align:center;vertical-align:top;"><nobr>LISTE&nbsp;DES&nbsp;PASSAGERS</nobr></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:13px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:24px;"></td>
		<td class="csAA5B9630" style="width:64px;height:22px;line-height:18px;text-align:center;vertical-align:top;"><nobr>Numero</nobr></td>
		<td class="cs425CAA45" colspan="2" style="width:105px;height:22px;line-height:18px;text-align:center;vertical-align:top;"><nobr>Noms</nobr></td>
		<td class="cs425CAA45" colspan="2" style="width:94px;height:22px;line-height:18px;text-align:center;vertical-align:top;"><nobr>genre</nobr></td>
		<td class="cs425CAA45" colspan="4" style="width:77px;height:22px;line-height:18px;text-align:center;vertical-align:top;"><nobr>Age</nobr></td>
		<td class="cs425CAA45" colspan="2" style="width:131px;height:22px;line-height:18px;text-align:center;vertical-align:top;"><nobr>Date&nbsp;de&nbsp;naissance</nobr></td>
		<td class="cs425CAA45" style="width:100px;height:22px;line-height:18px;text-align:center;vertical-align:top;"><nobr>T&#233;l&nbsp;passager</nobr></td>
		<td class="cs425CAA45" colspan="5" style="width:196px;height:22px;line-height:18px;text-align:center;vertical-align:top;"><nobr>Adresse&nbsp;Email</nobr></td>
		<td class="cs425CAA45" style="width:101px;height:22px;line-height:18px;text-align:center;vertical-align:top;"><nobr>Adresse</nobr></td>
	</tr>
	
    '.$donnees.'
</table>
</body>
</html>';
  return $printpaiement;	
          }   
   
}
