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


   // public function liker(Request $request){
     

   //    $l=new Like;
   //    $l->user_id=$request->user_id_id;
   //    $l->article_id=$request->article_id_id;
   //    $l->save();
       
   //    $nombre = Article::find($request->user_id_id)->likes()->count();

   //    return response()->json(['nombre'=> $nombre]);

   //  }

    public function like(Request $request){
       //   dd(Auth::user()->id); 
    $like = Like::where(['user_id' => Auth::id() , 'publication_id' => $request->publication_id])->get();
       if($like->count() > 0)
       {
          $l = Like::find($like[0]->id);
          $l->delete();
       }
       else {
       $id1 = Auth::id(); 
       $l=new Like;
       $l->user_id=$id1;
       $l->publication_id=$request->publication_id;
       $l->save();

       }

 
      
       $nombre = Publication::find($request->publication_id)->likes()->count();

      return response()->json(['nombre'=> $nombre, 'changer' => $like->count()]);


    }
      
    
}
