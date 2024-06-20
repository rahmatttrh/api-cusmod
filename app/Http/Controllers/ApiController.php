<?php

namespace App\Http\Controllers;

use App\Models\Cusmod;
use Illuminate\Http\Request;
// use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Validator;

class ApiController extends BaseController
{

   // Testing API
   public function test(){
      return response()->json([
         'data' => 'Testing',
      ]);
   }

   public function hitData(Request $req){
      // Validasi Data
      $validator = Validator::make($req->all(), [
         'documentDate' => 'date',
      ]);

      if($validator->fails()){
         return $this->sendError('Validation Error.', $validator->errors());       
      }

      // Store Data

      // $data = Cusmod::create($req->all());
      $data = Cusmod::create([
         'containerID' => $req->containerID ?? '',
         'containerSize' => $req->containerSize ?? '',
         'containerType' => $req->containerType ?? '',
         'containerStatus' => $req->containerStatus ?? '',
         'isoCode' => $req->isoCode ?? '',
         'weight' => $req->weight,
         'weightUnit' => $req->weightUnit,
         'tagID' => $req->tagID,
         'truckNo' => $req->truckNo,
         'truckCompanyName' => $req->truckCompany,
         'gateInDate' => $req->gateInDate,
         'lineID' => $req->lineID,
         'vesselID' => $req->vesselID,
         'voyageNbr' => $req->voyageNbr,
         'vesselArrivalDate' => $req->vesselArrivalDate,
         'vesselDepartureDate' => $req->vesselDepartureDate,
         'bc11No' => $req->bc11No,
         'bc11Date' => $req->bc11Date,
         'blNumber' => $req->blNumber,
         'documentNo' => $req->documentNo,
         'documentDate' => $req->documentDate,
         'documentType' => $req->documentType,
         'documentCode' => $req->documentCode,
         'peibNo' => $req->peibNo,
         'peibDate' => $req->peibDate,
         'portDischarge' => $req->portDischarge,
         'portLoading' => $req->portLoading,
         'terminalID' => $req->terminalID,
         'createdAt' => $req->createdAt,
         'updatedAt' => $req->updatedAt,
         'gateOutDate' => $req->gateOutDate,
         'statusP2' => $req->statusP2,
         'img1Name' => $req->img1Name,
         'img2Name' => $req->img2Name,
         'img3Name' => $req->img3Name,
         'img4Name' => $req->img4Name,
         'imgUrl' => $req->imgUrl,
      ]);

      if ($data) {
         return response()->json([
            'status' => 'Success',
            'msg' => 'Data stored',
            'data' => $data
         ]);
      } else {
         return $this->sendError('Hit Data Failed.');
      }

      // Return Response
      
   }
}
