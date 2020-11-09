@extends('page')
@section('contenu')

 
 <div class="container">
 <div class="row">

    <div class="col-4">
   <div class="container">
   <div class="row">
   <div class="col-12  mb-3 mt-5"><a  style="color:black"  href="{{ route('page.modifierprofile')}}">Modifer profile</a></div>
   <div class="col-12  mb-3"><a style="color:black"  href="{{ route('page.changermotdepasse')}}">Changer le mot de passe</a></div>
   <div class="col-12  mb-3"><a  style="color:black"  href="">Apps et sites web</a></div>
   <div class="col-12 mb-3"><a  style="color:black"  href="">Email ou texto</a></div>
   <div class="col-12   mb-3"><a  style="color:black"  href="">Notifications push</a></div>
   <div class="col-12  mb-3"><a  style="color:black"  href="">Gerer les contacts </a></div>
   <div class="col-12  mb-3"><a  style="color:black"  href="">Sécurité et confidentialité</a></div>
   <div class="col-12  mb-3"><a  style="color:black"  href="">Activités de connexion</a></div>
   <div class="col-12  mb-3"><a  style="color:black"  href="">Email d'Instagram</a></div>
   </div>
   </div>
    </div>
   
     <div class="col-8">
     @yield('contenumodifier')
     </div>
 </div>
 </div>


@endsection


    
   
   
    
 
 
    
  