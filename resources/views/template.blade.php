
@extends('page')
@section('contenu')


 <div class="container">
 <div class="row">
 <div class="col-8">
 <section  class="stories1" >

<div class="container">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
 <div class="carousel-item active">
   <!-- <img src="..." class="d-block w-100" alt="..."> -->
   <div class="row p-3">
   <div class="col-3"><img class="stories" src="photos/cameron-ballard-jH_TNBKr_XU-unsplash.jpg" alt="image"></div>
   <div class="col-3"> <img class="stories" src="photos/highlight-id-roHpoNuME1w-unsplash.jpg" alt="image"></div>
   <div class="col-3"><img class="stories" src="photos/max-AsJirOOLN_s-unsplash.jpg" alt="image"></div>
   <div class="col-3">  <img class="stories" src="photos/mikhail-vasilyev-NodtnCsLdTE-unsplash.jpg" alt="image"></div>
   </div>
 </div>
 <div class="carousel-item">
   <!-- <img src="..." class="d-block w-100" alt="..."> -->
  <div class="row p-3">
   <div class="col-3"> <img class="stories" src="photos/mikhail-vasilyev-NodtnCsLdTE-unsplash.jpg" alt="image"></div>
   <div class="col-3"><img class="stories" src="photos/ricardo-frantz-nEd9E9V8Qx0-unsplash.jpg" alt="image"></div>
   <div class="col-3"><img class="stories" src="photos/mikhail-vasilyev-NodtnCsLdTE-unsplash.jpg" alt="image"></div>
   <div class="col-3"><img class="stories" src="photos/max-AsJirOOLN_s-unsplash.jpg" alt="image"></div>
   
  </div>
 </div>
</div>
<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
 <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
 <span class="carousel-control-next-icon" aria-hidden="true"></span>
 <span class="sr-only">Next</span>
</a>
</div>
</div>







<!-- <img src="photos/ricardo-frantz-nEd9E9V8Qx0-unsplash.jpg" alt="image">
<img src="photos/mikhail-vasilyev-NodtnCsLdTE-unsplash.jpg" alt="image">
<img src="photos/ricardo-frantz-nEd9E9V8Qx0-unsplash.jpg" alt="image">
<img src="{{asset('photos/img1.jpg')}}" alt="image">
<img src="{{asset('photos/avatar.png')}}" alt="image"> -->
</section>


  

@if(isset($publis))
@foreach($publis as $publi)
<section style="margin-bottom: 50px;" class="publication">

 <div  class="container p-0 mt-3 ">
 <div  class="row">
<div style="margin-left:20px" class="col-3 ">
<img style="width:50px ; height:50px; border-radius:50% ; display:block ; margin-left:auto; margin-right:auto" src="{{ $publi->user->profile_photo_path}}" alt="image">
</div>
<div style="margin-right:100px" class="col-2">
<h4>{{ $publi->user->name}}</h4>
 
</div >
  
 
                 
                 <div class="btn-group" style="margin-left:100px" class="col-2">
                 <a href="#" id="imageDropdown" data-toggle="dropdown">
                 <i style="font-size:20px ; margin-left:30px ; color:black" class="fa fa-ellipsis-h mt-2" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu">
                       <form class="dropdown-item" action="#" method="post">
                         @csrf
                             <input style="border:none;background-color:white" type="submit" name="signaler" value="signaler">
                       </form>
                 </div>
                
                            
 </div>
 </div>

 <div>
 <img class="imagepub" src="{{ $publi->image }}" alt="image">
<div class="image">
         <form id="like_form" style="display:inline" class=" mr-5 ml-3" action="" method="post">
         @csrf        
           <input  type="hidden" name="publi_id"   id="publication_id" value="{{$publi->id}}" >  
             <button style="border:none ; background-color:white" type="submit" name="liker" id="like_{{$publi->id}}" >  <i class="fa fa-heart-o fa-2x"  aria-hidden="true"></i></button>
           </form>
         

  <a href="{{route('page.infopub',['id' => $publi->id])}}"> <i class="fa fa-comment-o fa-2x  mr-5" aria-hidden="true"></i></a>
   <i class="fa fa-paper-plane fa-2x" aria-hidden="true"></i>
   <form style="display:inline" class="pull-right mr-5" action="{{route('page.save',['id' => $publi->id])}}" method="post">
         @csrf          
             <button style="border:none ; background-color:white" type="submit" name="save" >   <i class="fa fa-bookmark-o fa-2x " aria-hidden="true"></i> </button>
           </form>

</div>
 </div>
 <p id="{{$publi->id}}" class="ml-3 mb-2">{{$publi->likes->count()}}</p>
 <p class="ml-3 mb-2"><strong>{{ $publi->user->name}}</strong> {{ $publi->description }} </p>
 <a href="{{route('page.infopub',['id' => $publi->id])}}"><p class="ml-3 mb-2">Afficher les {{ $publi->commentaires->count()}} commentaires</p> </a>
 
 <p class="text-muted ml-3 mb-2">il y'a 2 heures</p>

 <div  class="container">
 @if(isset($publi))
@foreach($publi->commentaires as $comment)

<div class="row">
<div class="col-3">
<img style="width:50px ; height:50px; border-radius:50%; margin-bottom:30px" src="{{ $comment->user->profile_photo_path }}" alt="image">
</div>

<div class="col-6 mt-2 ">
<p class=""><strong>{{ $comment->user->name}} </strong>  {{ $comment->contenu_comment}} </p>
</div>
</div>


@endforeach
@endif
</div>
 <hr>
 <form style=" display: flex; flex-direction: row " class="p-2 mb-2" method="post" action="{{route('page.commentaire',['id' => $publi->id])}}">
 @csrf 
   <input style="border:none; padding-left:10px " type="text" name="contenu" placeholder="écrire un commentaire...">
   <input style=" margin-left:225px " class="btn btn-inline text-info " type="submit" name="publier" value="publier">
 </form>
 </section>
 @endforeach
@endif

 </div>


 <div class="col-4">

 <div class="aside">
 <div class="container">
   <div style="margin-top:70px" class="row  mb-5">
   <div class="col-2"><img style="width:50px ; height:50px; border-radius:50% ; display:block ; margin-left:auto; margin-right:auto" src="{{Auth::user()->profile_photo_path}}" alt="image"></div>
   <div class="col-6"><p style="margin-left:20px ; margin-top:13px">{{Auth::user()->name}}</p> </div>
   <div class="col-2"></div>
   <div class="col-2"><a href="">basculé</a></div>
   </div>

  <div class="row mb-4">
  <div class="col-6 text-muted">Suggestions pour vous</div>
  <div class="col-4"></div>
  <div class="col-2">voir tout</div>
  </div>


  <div class="row mb-3">
   <div class="col-2"><img style="width:30px ; height:30px; border-radius:50% ; display:block ; margin-left:auto; margin-right:auto" src="photos/mikhail-vasilyev-NodtnCsLdTE-unsplash.jpg" alt="image"></div>
   <div class="col-6"><p>utilisateur</p> </div>
   <div class="col-2"></div>
   <div class="col-2"><a href="">Abonner</a></div>
   </div>


   <div class="row mb-3">
   <div class="col-2"><img style="width:30px ; height:30px; border-radius:50% ; display:block ; margin-left:auto; margin-right:auto" src="photos/max-AsJirOOLN_s-unsplash.jpg" alt="image"></div>
   <div class="col-6"><p>utilisateur</p> </div>
   <div class="col-2"></div>
   <div class="col-2"><a href="">Abonner</a></div>
   </div>


   <div class="row mb-3">
   <div class="col-2"><img style="width:30px ; height:30px; border-radius:50% ; display:block ; margin-left:auto; margin-right:auto" src="photos/mikhail-vasilyev-NodtnCsLdTE-unsplash.jpg" alt="image"></div>
   <div class="col-6"><p>utilisateur</p> </div>
   <div class="col-2"></div>
   <div class="col-2"><a href="">Abonner</a></div>
   </div>


   <div class="row mb-3">
   <div class="col-2"><img style="width:30px ; height:30px; border-radius:50% ; display:block ; margin-left:auto; margin-right:auto" src="photos/mikhail-vasilyev-NodtnCsLdTE-unsplash.jpg" alt="image"></div>
   <div class="col-6"><p>utilisateur</p> </div>
   <div class="col-2"></div>
   <div class="col-2"><a href="">Abonner</a></div>
   </div>



  </div>

 </div>
 </div>






 </div>
 </div>


@endsection
 