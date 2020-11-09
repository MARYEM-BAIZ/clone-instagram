@extends('page')
@section('contenu')

@if(isset($publis))
@foreach($publis as $publi)
 <div class="container bg-white p-3 ">




     <div class="row">
  
   <div class="col-8">
       <img style="width:500px ; height:500px;position: fixed ; z-index: 1" src="{{ asset($publi->image) }}" alt="immage">
   </div>





   <div class="col-4">

 <!-- <p>divvvvvvvvvvvvvvvvvvvvvvvv</p> -->

     <div style=" display: flex;flex-direction: row;   justify-content: space-between;    justify-content: space-around ; margin-top:115px  ; position: fixed ;top: 0; z-index: 1 ; background-color:white">
         <img style="width:60px ; height:60px; border-radius:50% ; display:block ; margin-left:auto; margin-right:auto" src="{{asset($publi->user->profile_photo_path)}}" alt="immage">
         <p style="margin-left:40px">{{ $publi->user->name}}</p>
         <article class="btn-group" style="margin-left:100px" class="col-2">
         <a href="#" id="imageDropdown" data-toggle="dropdown">
         <i style="font-size:20px ; color:black" class="fa fa-ellipsis-h mt-2" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu">
                       <form class="dropdown-item" action="#" method="post">
                         @csrf
                             <input style="border:none;background-color:white" type="submit" name="signaler" value="signaler">
                       </form>
</article>
     </div>

<hr>
     <!-- <p>divvvvvvvvvvvvvvvvvvvvvvvv</p> -->

     <div style="margin-top:80px " class="container">
 @if(isset($publi))
@foreach($publi->commentaires as $comment)

<div class="row">
<div class="col-3">
<img style="width:50px ; height:50px; border-radius:50% ; display:block ; margin-left:auto; margin-right:auto" src="{{ asset($comment->user->profile_photo_path) }}" alt="image">
</div>

<div class="col-6 mt-2 ">
<p class=""><strong>{{ $comment->user->name}} </strong>  {{ $comment->contenu_comment}} </p>
</div>
</div>


@endforeach
@endif
</div>

 <!-- <p>divvvvvvvvvvvvvvvvvvvvvvvv</p> -->
<hr>

     <div style="position: fixed ;bottom: 0; z-index: 1 ; background-color:white; padding-top:20px" class="image">
         <form style="display:inline" class="" action="{{route('page.like',['id' => $publi->id])}}" method="post">
         @csrf          
             <button style="border:none ; background-color:white" type="submit" name="liker" >  <i style="font-size: 25px" class="fa fa-heart-o " aria-hidden="true"></i></button>
           </form>
         

  <a href="{{route('page.infopub',['id' => $publi->id])}}"> <i style="font-size: 25px" class="fa fa-comment-o " aria-hidden="true"></i></a>
   <i style="font-size: 25px" class="fa fa-paper-plane " aria-hidden="true"></i>
  
   <form style="display:inline" class="pull-right" action="{{route('page.save',['id' => $publi->id])}}" method="post">
         @csrf          
             <button style="border:none ; background-color:white" type="submit" name="save" >   <i style="font-size: 25px" class="fa fa-bookmark-o " aria-hidden="true"></i> </button>
           </form>

   <p class="">{{ $publi->likes->count()}} j'aime</p>
 <!-- <p class="ml-3 mb-2"> {{ $publi->description }} </p> -->
 <!-- <p class="ml-3 mb-2">Afficher les {{ $publi->commentaires->count()}} commentaires</p> -->
 <p class="text-muted  mb-1">il y'a 2 heures</p>

 <hr>
 <form style=" display: flex; flex-direction: row  " class="pt-1 pb-1 mb-2" method="post" action="{{route('page.commentaire',['id' => $publi->id])}}">
 @csrf 
   <input style="border:none " type="text" name="contenu" placeholder="écrire un commentaire...">
   <input style="" class="btn btn-inline text-info " type="submit" name="publier" value="publier">
 </form>
 <hr>
</div>
 </div>

   </div>

 

<!-- <p>divvvvvvvvvvvvvvvvvvvvvvvv</p> -->







     </div>




 </div>
 @endforeach
@endif

@endsection