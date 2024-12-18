<?php

namespace App\Http\Controllers\API;

use App\Models\Naissance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NaissanceRequest;
use App\Http\Resources\API\NaissanceResource;
use App\Models\User;

class NaissanceController extends Controller
{
    protected $Naissance;
    public function __construct(){
    $this->Naissance = new Naissance();
}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $naissance= NaissanceResource::collection(Naissance::orderBy("id","desc")->get());
        return  (response()->json([
            "success"=>true,
            "status_code"=>200,
            "data"=>$naissance,
        ]));
    }
    public function myNaisance($id)
    {
        // $user=User::find($id);
        // return $user;
        $naissance= NaissanceResource::collection(Naissance::where("user_id",$id)->orderBy("id","desc")->get());
        return  (response()->json([
            "success"=>true,
            "status_code"=>200,
            "data"=>$naissance,
        ]));
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
     $naissance= $this->Naissance->create($request->all());
     return  (response()->json([
        "success"=>true,
        "status_code"=>200,
        "data"=>$naissance,
    ]));
    }
  
    public function show(string $id)
    {
    // return $Naissance = $this->Naissance->find($id);  
    if($this->Naissance->find($id)){
        $naissance = new NaissanceResource($this->Naissance->find($id));  
        if($naissance){
           return  (response()->json([
               "success"=>true,
               "status_code"=>200,
               "naissance"=>$naissance,
           ]));
        }
    }else{
        return  (response()->json([
            "success"=>false,
            "status_code"=>401,
            "message"=>"naissance not found"
            // "user"=>$user,
        ]));
     } 
   
    }
    public function update(Request $request, string $id)
    {
         $naissance = $this->Naissance->find($id);
         $naissance->update($request->all());
         return  (response()->json([
            "success"=>true,
            "status_code"=>200,
            "data"=>$naissance,
        ]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
     $Naissance = $this->Naissance->find($id);
    return $Naissance->delete();   
    }
    public function edit(string $id)
    {
        //
    }
}
