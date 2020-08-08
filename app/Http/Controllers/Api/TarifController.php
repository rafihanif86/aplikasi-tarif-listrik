<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TarifResource;
use App\Tarif;
use Illuminate\Http\Request;

class TarifController extends Controller
{

    public function index(){
        $tarif = Tarif::get();
        return TarifResource::collection($tarif);
    }

    public function add(Request $request){
        $this->validate($request, [
            'daya_listrik' => 'required',
            'tarif_listrik' => 'required',
        ]);

        $tarif = Tarif::create([
            'daya_listrik' => $request->daya_listrik,
            'tarif_listrik' => $request->tarif_listrik,
        ]);

        return new TarifResource($tarif);
    }
}
