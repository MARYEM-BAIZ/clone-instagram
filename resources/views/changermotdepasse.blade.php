@extends('profilemodifer')
@section('contenumodifier')
 

<div class="container">

<div class="row mt-5 mb-3">
    <div class="col-4"> <img style="width:50px ; height:50px; border-radius:50% ; display:block ; margin-right:0px" src="{{Auth::user()->profile_photo_path}}" alt="image"></div>
    <div class="col-8">
    <h4>maryembaiz</h4>
    </div>
 </div>


 <div class="row mb-4">
 <div class="col-4 text-center"><h4>Ancien mot de passe</h4></div>
 <div class="col-8">
 <form action="" method="post">
 <input class="w-100 p-2" type="text">
 </form>
 </div>
 </div>


 <div class="row mb-4">
 <div class="col-4 text-center"><h4>Confirmer le mot de passe</h4></div>
 <div class="col-8">
 <form action="" method="post">
 <input class="w-100 p-2" type="text">
 </form>
 </div>
 </div>



 <div class="row mb-4">
 <div class="col-4 text-center"><h4>Confirmer le nouveau mot de passe</h4></div>
 <div class="col-8">
 <form action="" method="post">
 <input class="w-100 p-2" type="text">
 </form>
 </div>
 </div>



 <div class="row mb-4">
 <div class="col-4 text-center"></div>
 <div class="col-4 text-center"><form action="" method="post">
 <input style="border:none; border-radius:7px" class="bg-info text-white p-2" value="Modifier le mot de passe" type="submit">
 </form></div>
 <div class="col-4 text-center"></div>
 </div>



 <div class="row mb-4">
 <div class="col-4 text-center"></div>
 <div class="col-4 text-center"><a href="">Mot de passe oublié</a></div>
 <div class="col-4 text-center"></div>
 </div>




</div>

@endsection