<?php

namespace App\Http\Controllers\API;

use App\Models\Deces;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DecesRequest;
use App\Http\Resources\API\DecesResource;

class DecesController extends Controller
{
    protected $Deces;
    public function __construct(){
    $this->Deces = new Deces();
}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return  DecesResource::collection(Deces::orderBy('id', 'desc')->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

        /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     return $this->Deces->create($request->all());
         
    }
  
    public function show(string $id)
    {
    // return $Deces = $this->Deces->find($id);  
    if($this->Deces->find($id)){
        $Deces = new DecesResource($this->Deces->find($id));  
        if($Deces){
           return  (response()->json([
               "success"=>true,
               "status_code"=>200,
               "deces"=>$Deces,
           ]));
        }
    }else{
        return  (response()->json([
            "success"=>false,
            "status_code"=>401,
            "message"=>"mort not found"
            // "user"=>$user,
        ]));
     }
    }
    public function update(DecesRequest $request, string $id)
    {
         $Deces = $this->Deces->find($id);
         $Deces->update($request->all());
         return  (response()->json([
            "success"=>true,
            "status_code"=>200,
            "data"=>$Deces,
        ]));
    }
    public function deces_update(Request $request, string $id){
        $Deces = $this->Deces->find($id);
        $Deces->update($request->all());
        return  (response()->json([
           "success"=>true,
           "status_code"=>200,
           "data"=>$Deces,
       ]));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
     $Deces = $this->Deces->find($id);
     $sup=$Deces->delete();
     return  (response()->json([
        "success"=>true,
        "status_code"=>200,
        "data"=>$sup,
    ]));
    return $Deces->delete();   
    }
    public function edit(string $id)
    {
        //
    }
    public function take(string $id)
    {
         $deces=Deces::where("user_id",$id)->get();
        return  (response()->json([
            "success"=>true,
            "status_code"=>200,
            "data"=>$deces,
        ]));
    }
  
}
