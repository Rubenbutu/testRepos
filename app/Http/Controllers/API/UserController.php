<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Models\Alert;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\UsersResource;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $user;
    public function __construct(){
    $this->user = new User();
}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=  UsersResource::collection(User::orderBy("created_at","desc")->get());
        return  (response()->json([
            "success"=>true,
            "status_code"=>200,
            "user"=>$users,
        ]));
    }
    public function usersService($service)
    {
        $users= UsersResource::collection(User::where("service_id",$service)->where("type","Agent")->orderBy("created_at","desc")->get());
        return  (response()->json([
            "success"=>true,
            "status_code"=>200,
            "user"=>$users,
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
    public function store(UserRequest $request)
    {
        $request->merge(["password"=>Hash::make($request->password)]);
      $user=$this->user->create($request->all());
     return  (response()->json([
        "success"=>true,
        "status_code"=>200,
        "user"=>$user,
    ]));
         
    }
  
    public function show(string $id)
    {
        if($this->user->find($id)){
            $user = new UsersResource($this->user->find($id));  
            if($user){
               return  (response()->json([
                   "success"=>true,
                   "status_code"=>200,
                   "user"=>$user,
               ]));
            }
        }else{
            return  (response()->json([
                "success"=>false,
                "status_code"=>401,
                "message"=>"user not found"
                // "user"=>$user,
            ]));
         }
    
    
    }
    public function get_alerts(Request $request){
        
            // $request->session()->regenerate();
            
            $user=User::find($request->user_id);
            $user_authentifie= $user->nom;
            $user_service=$user->service_id;
            $user_type=$user->type;
            $user_id=$user->id;
            $user_lat=48.8566;
            $user_long=2.3522;
            $user_lat=$request->user_lat;
            $user_long=$request->user_long;
            $tab=[];
            if($user_type=="Agent"){
              
                $query=Alert::query();
                $query=$query->where('service_id',$user_service)->orderBy('created_at','desc')->take(100)->get();
                    foreach($query as $q){
                        $tp=round(CalculeDistance($user_lat,$user_long,$q->latitude,$q->longitude));
                        $q->distance=$tp;
                        $q->votreLat=$user_lat;
                        $q->votreLong=$user_long;
                        $q->service=$q->service->libelle;

                        if($tp<20){
                            $tab[]=$q;
                            // $tab["distance"]=$tp;
                           
                        }
                    }
                    return  (response()->json([
                        "success"=>true,
                        "status_code"=>200,
                        "Alerts"=>$tab,
                        "user"=>$user,
                    ]));
                   
            }
            elseif($user_type=="User"){
                $alerts=Alert::where('user_id',$user_id)->orderBy('created_at','desc')
                ->get();
                return  (response()->json([
                    "success"=>true,
                    "status_code"=>200,
                    "Alerts"=>$alerts,
                    "user"=>$user
                ]));

            }
            elseif($user_type=="Admin"){
                $alerts=Alert::where('service_id',$user_service)->orderBy('created_at','desc')
                ->get();
                return  (response()->json([
                    "success"=>true,
                    "status_code"=>200,
                    "Alerts"=>$alerts,
                    "user"=>$user
                ]));

            
            

           
            // return redirect()->intended(route('admin.Property.index'));
        }


    }
    public function get_my_alerts(Request $request)  {
        $user=User::find($request->user_id);
        $alerts=Alert::where('user_id',$user->id)->orderBy('created_at','desc')
                ->get();
                return  (response()->json([
                    "success"=>true,
                    "status_code"=>200,
                    "Alerts"=>$alerts,
                    "user"=>$user
                ]));
    }
    public function update(UserRequest $request, string $id)
    {
         $user = $this->user->find($id);
         $user->update($request->all());
         return  (response()->json([
            "success"=>true,
            "status_code"=>200,
            "user"=>$user
        ]));
    }
    // public function changeStatus($id){
    //     $user = $this->user->find($id);
    //     $user->update();
    //     return  (response()->json([
    //        "success"=>true,
    //        "status_code"=>200,
    //        "user"=>$user
    //    ]));


    // }
    public function update_agent_position(Request $request)
    {
         $user = $this->user->find($request->id);
         $user->update($request->all());
         $user_service=$user->service_id;
         $user_type=$user->type;
         $user_id=$user->id;
         $user_lat=48.8566;
         $user_long=2.3522;
         $tab=[];
              
            $query=Alert::query();
            $query=$query->where('service_id',$user_service)->orderBy('created_at','desc')->take(5)->get();
                foreach($query as $q){
                    $tp=round(CalculeDistance($user_lat,$user_long,$q->latitude,$q->longitude));
                    if($tp<30){
                        $tab[]=$q;
                    }
                }
                return  (response()->json([
                    "success"=>true,
                    "status_code"=>200,
                    "Alerts"=>$tab,
                    "user"=>Auth::user()->id
                ]));
               
        


         return $user;
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
     $user = $this->user->find($id);
     $user->delete();  
     return  (response()->json([
        "success"=>true,
        "status_code"=>200,
     
    ]));
   
    
    }
    public function edit(string $id)
    {
        //
    }

    // public function  login( UserRequest $request){
    //     if(auth()->attempt($request->only(['email','password']))){
    //         $user=auth()->user();
    //         $token=$user->createToken("ma_cle_secrete_visible_uniquement_backend")->plainTextToken;
    //         return response()->json([
    //             "status_code"=>200,
    //             "error"=>true,
    //             "message"=>"Utilisateur connecté",
    //             "user"=>$user,
    //             "token"=>$token
    //        ]);
    //     }
    //     else{
    //        return response()->json([
    //             "success"=>false,
    //             "status_code"=>422,
    //             "error"=>true,
    //             "message"=>"erreur de authentification",
    //        ]);
    //     }
    // }

    


}
