<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\AlertRequest;
use App\Http\Resources\API\AlertResource;
use App\Models\Alert;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class AlertController extends Controller
{
    protected $alert;
    public function __construct(){
    $this->alert = new Alert();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return AlertResource::collection(Alert::orderBy("id","desc")->limit(5)->get());
        
    }
    public function serviceAlerts($id)
    {
        $alerts= AlertResource::collection(Alert::orderBy("created_at","desc")
        ->where("service_id",$id)->get());
        return  (response()->json([
            "success"=>true,
            "status_code"=>200,
            "count"=>count($alerts),

            "alerts"=>$alerts,
            // "user"=>$user,
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
    public function store(AlertRequest $request)
    {
        if($this->alert->create($request->all())){
          return  (response()->json([
                "success"=>true,
                "status_code"=>200,
                // "Alert"=>$newAlert,
                "message"=>"Alert Enregistré",
            ]));
        }else{
            return
            (response()->json([
                "success"=>false,
                "status_code"=>422,
                "error"=>true,
                "message"=>"erreur lors de l'envoi de l'alerte",
            ]));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    //    return new AlertResource(Alert::find($id));
       if($this->alert->find($id)){
        $alert = new AlertResource($this->alert->find($id));  
        if($alert){
           return  (response()->json([
               "success"=>true,
               "status_code"=>200,
               "alert"=>$alert,
           ]));
        }
    }else{
        return  (response()->json([
            "success"=>false,
            "status_code"=>401,
            "message"=>"alert not found"
            // "user"=>$user,
        ]));
     }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $alert = $this->alert->find($id);
         $alert->update($request->all());
         return  (response()->json([
            "success"=>true,
            "status_code"=>200,
            "alert"=>$alert,
        ]));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
     $alert = $this->alert->find($id);
     $alert->delete();   
     return  (response()->json([
        "success"=>true,
        "status_code"=>200,
        "message"=>"alert supprimé"
     
    ]));
   
    }
}
