<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tehsil;
class TehsilController extends Controller
{
    public function index()
    {
        $tehsils=Tehsil::paginate(10);
        return view('tehsil.index',['tehsil'=>$tehsils]);
    }

    public function store(Request $request)
    {
        $tehsils= new Tehsil;
        $tehsils->tname=request('tname');
        $tehsils->district=request('district');
        $tehsils->save();
        return view('tehsil.index',['tehsil'=>Tehsil::all()]);   
    }


    public function listOfTehsils()
    {
        $tehsils=Tehsil::all();
        return response()->json([
            'data' => $tehsils,
            'message' => 'success'
        ], 500);
    }
}
