<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ListrikResource;
use App\Listrik;
use Illuminate\Http\Request;

class ListrikController extends Controller
{
    public function add(Request $request){
        $this->validate($request,[
            'tarif_id' => 'required',
            'kwh_perbulan' => 'required',
            'tagihan' => 'required',
        ]);
        $listrik = Listrik::create([
            'user_id' => auth()->id(),
            'tarif_id' => $request->tarif_id,
            'kwh_perbulan' => $request->kwh_perbulan,
            'tagihan' => $request->tagihan,
        ]);

        return new ListrikResource($listrik);
    }
}
