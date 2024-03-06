<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\User;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function index(){
        $candidate = Candidate::all(); 

        return view("candidate.index", ['candidates' => $candidate]);
    }

    public function create()
    {
        $users = User::all(); // Obtener todos los usuarios
        return view("candidate.create", ['users' => $users]);
    }
    
    public function store(Request $request){

        $request->validate([
        'user_id'=> 'required',
        'selection_status'=> 'required',
        'points'=>'required|min:1|max:3'
        ]);

        Candidate::create(['user_id'=>$request->user_id,
                            'selection_status'=>$request->selection_status,
                            'points'=>$request->points]);
    return redirect()->route('login');
}
public function destroy (Candidate $candidate){
    $candidate->delete();
    return redirect()->route('candidate.index');
}

public function edit($id) {
    $candidate = Candidate::find($id);
	return view('candidate.edit', ['candidate'=>$candidate]);

}


public function update(Request $request, Candidate $candidate) {

    $request->validate([
        'user_id'=> 'required',
        'selection_status'=> 'required',
        'points'=>'required|min:1|max:3'
        ]);

    $candidate->update([
        'status'=>$request->status,
        'points'=>$request->points
    ]);

    $candidate->selection_status = $request->selection_status;
    $candidate->points= $request->points;
    $candidate->save();
    return redirect()->route('candidate.index', $candidate);
}
}
