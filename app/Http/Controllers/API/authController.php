<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Models\Alert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
   public function login(Request $request)
    {
        return view('login');

    }
   public function logOut()
    {
        Auth::logout();
        return to_route('login')->with('success','Vous ètes maintenant déconnecté');
    }
    public function doLogin(Request $request)
    {
         $credentials=$request;
        // return($request->password);
        // if(Auth::attempt($credentials))
        // $a=new User();
        // $a=User::where("email",$request->email)->get();
        // return $credentials;

        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password]))
        {
            // $request->session()->regenerate();
            $user = User::find(Auth::user()->id);
            // $user->update($request->all());

            $user_authentifie= Auth::user()->nom;
            $user_service=Auth::user()->service_id;
            $user_type=Auth::user()->type;
            $user_id=Auth::user()->id;
            $user_lat=48.8566;
            $user_long=2.3522;
            $user_lat=$request->user_lat;
            $user_long=$request->user_long;
            $tab=[];
            if($user_type=="Agent"){
              
                $query=Alert::query();
                $query=$query->where('service_id',$user_service)->orderBy('created_at','desc')->take(5)->get();
                    foreach($query as $q){
                        $tp=round(CalculeDistance($user_lat,$user_long,$q->latitude,$q->longitude));
                     //Nous avons calculé la disatnce qui sépare la position de l'agent de l'endroit d'où provient l'alerte
                     //Nous prenons les alertes situées dans les 30 kilomètres près
                        if($tp<30){
                            $q["distance"]=$tp;
                            $tab[]=$q;
                        }
                    }
                    return  (response()->json([
                        "success"=>true,
                        "status_code"=>200,
                        "Alerts"=>$tab,
                        "user"=>Auth::user()
                    ]));
                   
            }
            elseif($user_type=="User"){
                //Nous retournons l'utilisateur avec ses différentes alertes
                $alerts=Alert::where('user_id',$user_id)->orderBy('created_at','desc')
                ->get();
                return  (response()->json([
                    "success"=>true,
                    "status_code"=>200,
                    "Alerts"=>$alerts,
                    "user"=>Auth::user()
                ]));

            }
            elseif($user_type=="Admin"){
                // quand c'est un super utilisateur, on 
                $alerts=Alert::where('service_id',$user_service)->orderBy('created_at','desc')
                ->get();
                return  (response()->json([
                    "success"=>true,
                    "status_code"=>200,
                    "Alerts"=>$alerts,
                    "user"=>Auth::user()
                ]));

            }
            

           
            // return redirect()->intended(route('admin.Property.index'));
        }

        return
            (response()->json([
                "status_code"=>422,
                "success"=>false,
                "message"=>"identifiants incorrect",
            ]));
       
         
    }
}
