<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Ocupation;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OccupationApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():JsonResponse
    {
        $occupations=Ocupation::all();
       if($occupations->isEmpty()){
        return response()->json([
            'message'=>"No data"
        ], 404);
       }
       return response()->json([
        'occupations'=>$occupations
       ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request):JsonResponse
    {
        $occupation= new Ocupation();
        $occupation->code=$request->code;
        $occupation->name=$request->name;
        $occupation->save();
        return response()->json([
            'message'=>"user create sucessfull"
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function getById($id){
        $occupation=Ocupation::where('id', $id)->first();
        if (empty($occupation)){
            return response()->json(['message'=>'User not found'], 404);
        }
        return response()->json($occupation, 200);
    }
}
