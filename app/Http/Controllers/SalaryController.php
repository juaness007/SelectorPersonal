<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salary;

class SalaryController extends Controller
{
    public function index(){
        $salaries = Salary::all();
    }

    public function create(){
        return view ('salary.create');
    }

    public function store(Request $request){
    $request->validate([
        'salarios'=>'required'
    ]);

    Salary::create(['salarios'=>$request->salarios]);
    return redirect()->route('contract.create');

    }
}
