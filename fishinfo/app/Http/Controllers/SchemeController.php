<?php

namespace App\Http\Controllers;

use App\Scheme;
use Illuminate\Http\Request;
class SchemeController extends Controller
{
    public function index()
    {
        $schemes=Scheme::paginate(10);
        return view('scheme.index',['scheme'=>$schemes]);
    }

    public function store(Request $request)
    {
        $schemes= new Scheme;
        $schemes->sname=request('sname');
        $schemes->save();
        return view('scheme.index',['scheme'=>Scheme::all()]);   
    }



    public function listOfSchemes()
    {
        $schemes=Scheme::all();
        return response()->json([
            'data' => $schemes,
            'message' => 'success'
        ], 500);
    }
}
