<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\User;
use App\Models\Enregistrement;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;


class PublicationController extends Controller
{
   public function pub(){
    // $articles= Controller::all();

       return view('publier');
   }

   public function publierpub(Request $request){

    // $this->validate($request('image'->'required|image');

    $original_name =  $request->image->getClientOriginalName();

    $filename =  pathinfo($original_name,PATHINFO_FILENAME); 

    $extension =  $request->image->getClientOriginalExtension(); 

    $filename_store = $filename.time().'.'.$extension;

    $request->image->move('photos', $filename_store);


    //   dd(Auth::user()->id); 
    $id = Auth::id(); 

     $p=new Publication ;
     $p->description = $request->input('description');
     $p->image = 'photos/' .$filename_store ;
     $p->user_id= $id ;
     $p->save();

   
     
     return redirect()->route('page.page'); 
   }

   public function publi_profile(){
    $id = Auth::id(); 
    $publis= Publication::select()->where('user_id',$id)->get();

  
    return view('publication_profile')->with('publis',$publis);
   }

   public function igtv(){
      $id = Auth::id(); 
      $publis= Publication::select()->where('user_id',$id)->get();

    return view('igtv')->with('publis',$publis);
   }

   public function modifierprofile(){
   
      
      return view('modifierprofile');
   }

   public function modifierprofilemo(Request $request){
       $n=$request->input('name');
       $e=$request->input('email');
       
         if (isset($request->image)) {
            
            $original_name =  $request->image->getClientOriginalName();

            $filename =  pathinfo($original_name,PATHINFO_FILENAME); 
        
            $extension =  $request->image->getClientOriginalExtension(); 
        
            $filename_store = $filename.time().'.'.$extension;
        
            $request->image->move('photos', $filename_store);
        
            $u=User::find(Auth::id());
            $u->name=$n;
            $u->email=$e;
            $u->profile_photo_path='photos/'.$filename_store;
            $u->save();

         }

        else {
         $u1=User::find(Auth::id());
         $u1->name=$n;
         $u1->email=$e;
         $u1->save();
        }


    

        

       $id = Auth::id(); 
       $publis= Publication::select()->where('user_id',$id)->get();
       $users=User::where('id',Auth::id())->get();
       
      
       
   
       return redirect()->route('page.pubfrofile')->with('publis',$publis); 


   }

   // public function modifierprofilemo1(Request $request1){

   //    // $this->validate($request1,('name1'->'required|text'));

   //    $u1=new User;
   //    $u1->name=$request1->input('name1');
   //    $u1->save();

   //    $id = Auth::id(); 
   //    $publis= Publication::select()->where('user_id',$id)->get();
  
   //    return view('publication_profile')->with('publis',$publis);
      
   // }


   // public function modifierprofilemo2(Request $request2){

   //    $u2=new User;
   //    $u2->email=$request2->input('email');
   //    $u2->save();

   //    $id = Auth::id(); 
   //    $publis= Publication::select()->where('user_id',$id)->get();
  
   //    return view('publication_profile')->with('publis',$publis);
      
   // }

   public function changermotdepasse(){

     
     
      return view('changermotdepasse');
   }

}
