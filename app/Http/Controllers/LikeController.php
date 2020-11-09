<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\User;
use App\Models\Like;
use App\Models\Enregistrement;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
     
   public function like1($id){
    // $publis= Publication::select()->where('id_user',$id)->get();
    // return view('template')->with('publis',$publis);

    
    return redirect()->route('page.page');
   }

    public function like($id){
       //   dd(Auth::user()->id); 
      $id1 = Auth::id(); 
      $l=new Like;
       $l->user_id=$id1;
       $l->publication_id=$id;
       $l->save();
    // $publis= Publication::select()->where('id_user',$id)->get();
       return redirect()->route('page.page'); 
    }
      
    
}
