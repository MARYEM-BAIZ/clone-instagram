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
    
        public function save(Request $request){
           //   dd(Auth::user()->id); 
          
     


           $save = Enregistrement::where(['user_id' => Auth::id() , 'publication_id' => $request->publication_id])->get();
          if ($save->count() > 0) {
            $sa = Enregistrement::find($save[0]->id);
            $sa->delete();
          }

          else {
            $id1 = Auth::id(); 
            $e=new Enregistrement;
             $e->user_id=$id1;
             $e->publication_id=$request->publication_id;
             $e->save();
          }
    
        // $publis= Publication::select()->where('id_user',$id)->get();
           return redirect()->route('page.page'); 
        }

        public function enregistrement(){
            $id = Auth::id(); 
            $publis= Enregistrement::select()->where('user_id',$id)->get();
            return view('enregistrements')->with('publis',$publis);
           }

}
