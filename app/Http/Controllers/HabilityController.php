<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hability;
use App\Models\Ocupation;

class HabilityController extends Controller
{
    public function index(){
        $hability = Hability::all();

        return view ("hability.index", ['habilities'=> $hability]);
    }

    public function create(){
        $ocupations= Ocupation::all();
        return view ('hability.create', ['ocupations'=> $ocupations]);
    }

    public function store(Request $request){
    $request->validate([
        'ocupation_id'=>'required',
        'description'=> 'required'
    ]);

    Hability::create(['ocupation_id'=>$request->ocupation_id,
                    'description'=>$request->description]);
    return redirect()->route('hability.create');

    }
}
