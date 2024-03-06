<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Hability;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HabilityApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():JsonResponse
    {
        $habilities=Hability::all();
       if($habilities->isEmpty()){
        return response()->json([
            'message'=>"No data"
        ], 404);
       }
       return response()->json([
        'habilities'=>$habilities
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
        $habilities= new Hability();
        $habilities->ocupation_id=$request->ocupation_id;
        $habilities->description=$request->description;
        $habilities->save();
        return response()->json([
            'message'=>"hability create sucessfull"
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
        $habilities=Hability::where('id', $id)->first();
        if (empty($habilities)){
            return response()->json(['message'=>'Hability not found'], 404);
        }
        return response()->json($habilities, 200);
    }
}
