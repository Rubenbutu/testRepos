<?php

namespace App\Http\Controllers\API;

use App\Models\Retrouve;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RetrouveRequest;
use App\Http\Resources\API\RetrouveResource;

class RetrouveController extends Controller
{
    protected $Retrouve;
    public function __construct(){
    $this->Retrouve = new Retrouve();
}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return  RetrouveResource::collection(Retrouve::limit(1)->get());
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
    public function store(RetrouveRequest $request)
    {
     return $this->Retrouve->create($request->all());
         
    }
  
    public function show(string $id)
    {
    // return $Retrouve = $this->Retrouve->find($id);  
    if($this->Retrouve->find($id)){
        $retrouve = new RetrouveResource($this->Retrouve->find($id));  
        if($retrouve){
           return  (response()->json([
               "success"=>true,
               "status_code"=>200,
               "retrouve"=>$retrouve,
           ]));
        }
    }else{
        return  (response()->json([
            "success"=>false,
            "status_code"=>401,
            "message"=>"retrouvé not found"
            // "user"=>$user,
        ]));
     }
    }
    public function update(RetrouveRequest $request, string $id)
    {
         $Retrouve = $this->Retrouve->find($id);
         $Retrouve->update($request->all());
         return $Retrouve;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
     $Retrouve = $this->Retrouve->find($id);
    return $Retrouve->delete();   
    }
    public function edit(string $id)
    {
        //
    }
}
