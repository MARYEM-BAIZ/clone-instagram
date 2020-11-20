
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/accueil.css')}}">
    <title>inscrire1</title>
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
</head>
<body>
   <header>
   <div class="menu p-3">


<a href="{{route('page.page')}}"><img style="height:30px " src="{{asset('photos/insta-insta.png')}}" alt="image"></a>

<form action="#" method="post">
<button class="chercher"  name="inscrire" type="submit"><i class="fa fa-search " aria-hidden="true"></i> <small style="color:gray"> Rechercher</small> </button>
</form>

<article>
<a class="ml-5" href="{{route('page.pub')}}"><i style="font-size: 25px" class="fa fa-plus-square-o " aria-hidden="true"></i></a>
<a href="{{route('page.page')}}"><i style="font-size: 25px" class="fa fa-home " aria-hidden="true"></i></a>

<a href="">   <i style="font-size: 25px" class="fa fa-paper-plane " aria-hidden="true"></i></a>

<a href=""><i style="font-size: 25px" class="fa fa-plus-square-o " aria-hidden="true"></i></a>


<div class="btn-group">
<a href="#" id="imageDropdown" data-toggle="dropdown">
<i style="font-size: 25px" class="fa fa-heart-o " aria-hidden="true"></i>
                        </a>

  <div class="dropdown-menu mt-4 mr-5" aria-labelledby="dropdownMenuButton"> 
     
    



@if(isset($publis1))
@foreach($publis1 as $publi1)
@if( $publi1->publication->user_id == Auth::user()->id )
<div class=" dropdown-item">
     
      <div  class=" "> <img   style="width:50px ; height:50px; border-radius:50% ;display:block ; margin-left:auto; margin-right:auto" src="{{ asset($publi1->user->profile_photo_path) }}" alt="image"></div>

<div class=" " > <h4>{{ $publi1->user->name}} </h4><small>a aimé votre publication </small>  </div>

<div  class=""> <img  style="width:50px ; height:50px ;display:block ; margin-left:auto; margin-right:auto" src="{{ asset($publi1->publication->image)}}" alt="image"></div>
<hr>
  
      </div>
      @endif
@endforeach
@endif
   
    
   </div> 

 
  </div>



<div  class="btn-group">
 
  <a href="#" id="imageDropdown" data-toggle="dropdown">
                            <img class="banner-user-pic" style="width:40px ; height:40px; border-radius:70px ; margin-left:0" src="{{asset(Auth::user()->profile_photo_path)}}">
                        </a>

  <div class="dropdown-menu mt-4 mr-5" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="{{route('page.pubfrofile')}}"><i class="fa fa-user" aria-hidden="true"></i> profile</a>
    <a class="dropdown-item" href="{{route('page.enregistrement')}}"><i class="fa fa-bookmark-o" aria-hidden="true"></i> enregistré</a>
    <a class="dropdown-item" href="#"><i class="fa fa-cog" aria-hidden="true"></i> paramétres</a>
    <a class="dropdown-item" href="#"><i class="fa fa-refresh" aria-hidden="true"></i> changer de compte</a>
    <hr>
    <a class="dropdown-item" href="{{ route('page.logout') }}">déconnexion</a>
  </div>
</div>
</article>

</div>
   </header>
 <main>

 @yield('contenu')


</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/pub.js')}}"></script>








<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>  
<script src="{{asset('js/test.js')}}"></script>  
</body>
</html>