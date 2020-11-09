<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
use App\Models\Publication;
use App\Models\Commentaire;
use App\Models\Enregistrement;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class UtilisateurController extends Controller
{
    public function page(){
        $id = Auth::id(); 
        // $publis1= Like::select()->where('user_id',$id)->get();
        
        $comments= Commentaire::all();
        $publis= Publication::all();
        $publis1= Like::all();
        return view('template')->with(['publis' => $publis ,'comments'=> $comments , 'publis1' => $publis1]);
    }

    


    public function infopub($id){
        $publis= Publication::select()->where('id',$id)->get();
        $comments= Commentaire::select()->where('publication_id',$id)->get();  
              
        // $comments= Commentaire::all();
        // $publis= Publication::all();
        $publis1= Like::all();
        return view('info_publi')->with(['publis' => $publis ,'comments'=> $comments , 'publis1' => $publis1]);
    }

    //  public function inscrire(){
    //     return view('inscrire1');
    //  }
     public function profile(){
        $id = Auth::id(); 

        $publis= Publication::select()->where('user_id',$id)->get();
        $publis1= Like::all();
      
        return view('profile_template')->with(['publis' => $publis  , 'publis1' => $publis1]);
     }

    public function pagelogout(){

        Auth::logout();
        return redirect('/login');
    }

     

}
