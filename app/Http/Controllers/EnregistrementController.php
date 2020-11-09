<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\User;
use App\Models\Like;
use App\Models\Enregistrement;
use Illuminate\Support\Facades\Auth;

class EnregistrementController extends Controller
{
    
    public function save1($id){
        // $publis= Publication::select()->where('id_user',$id)->get();
        // return view('template')->with('publis',$publis);

        
        return redirect()->route('page.page');
       }
    
        public function save($id){
           //   dd(Auth::user()->id); 
          $id1 = Auth::id(); 
          $e=new Enregistrement;
           $e->user_id=$id1;
           $e->publication_id=$id;
           $e->save();
    
        // $publis= Publication::select()->where('id_user',$id)->get();
           return redirect()->route('page.page'); 
        }

        public function enregistrement(){
            $id = Auth::id(); 
            $publis= Enregistrement::select()->where('user_id',$id)->get();
            return view('enregistrements')->with('publis',$publis);
           }

}
