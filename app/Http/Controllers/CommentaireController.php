<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\User;
use App\Models\Commentaire;
use App\Models\Enregistrement;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class CommentaireController extends Controller
{

     public function commentaire1($id){

        // $publis= Publication::select()->where('id_user',$id)->get();
        // return view('template')->with('publis',$publis);
     
        return redirect()->route('page.page'); 
     
     }

     public function commentaire(Request $request){

     
      //   dd(Auth::user()->id); 
     


      $id1 = Auth::id(); 

    // $contenu=$request->input('contenu');

      $c= new Commentaire;
      $c->user_id=$id1;
      $c->contenu_comment= $request->contenu;
      $c->publication_id=$request->publication_id;
      $c->save();

    //   $publis= Publication::select()->where('id_user',$id)->get();
    //     return view('template')->with('publis',$publis);
      

    //  return redirect()->route('page.page'); 
    // return response()->json(['nombre'=> $nombre, 'changer' => $like->count()]);
     return response()->json('success','true');

     }
    
}
