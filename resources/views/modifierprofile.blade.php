@extends('profilemodifer')
@section('contenumodifier')
 
 <div class="container">
 <div class="row mt-5 mb-3">
    <div class="col-3"> <img style="width:50px ; height:50px; border-radius:50% ; display:block ; margin-left:auto; margin-right:auto" src="{{Auth::user()->profile_photo_path}}" alt="image"></div>
    <div class="col-9">
    <h4>maryembaiz</h4>
    <a href="">modifer la photo de profile</a>
    <form action="{{route('page.modifierprofilemo')}}" enctype="multipart/form-data" method="post">
 @csrf
 <input type="file" class="w-100" name="image">
    </div>
 </div>
 
 <div class="row mb-3">
 <div class="col-3 text-center">Nom</div>
 <div class="col-9">
 
 <input class="w-100" name="name"  type="text" value="{{Auth::user()->name}}">
 
 </div>
 </div>
 <div class="row mb-3">
 <div class="col-3"></div>
 <div class="col-9 text-muted">Aidez les gens à trouver votre compte à l’aide de votre nom le plus connu, que ce soit votre nom complet, votre surnom ou votre nom d’entreprise.
Vous pouvez uniquement changer votre nom deux fois tous les 14 jours.</div>
 </div>

 <div class="row mb-3">
 <div class="col-3 text-center">Nom utilisateur</div>
 <div class="col-9">

 <input class="w-100" name="name1" type="text" value="{{Auth::user()->name}}">
 
 </div>
 </div>
 <div class="row mb-3">
 <div class="col-3"></div>
 <div class="col-9 text-muted">Dans la plupart des cas, vous pourrez reprendre votre nom d’utilisateur maryembaiz pendant encore 14 jours. En savoir plus</div>
 </div>


 <div class="row mb-3">
 <div class="col-3 text-center">site web</div>
 <div class="col-9">

 <input class="w-100" type="text" placeholder="site web">
 </div>
 </div>



 <div class="row mb-5">
 <div class="col-3 text-center">bio</div>
 <div class="col-9">
 
 <input style="display:flex; overflow: scroll" class="w-100" type="text" placeholder="site web">
 </div>
 </div>
 </div>

 <div class="row mb-3">
 <div class="col-3"></div>
 <div class="col-9 text-muted">
<p class="text-muted">Informations personnelles</p>
Fournissez vos informations personnelles, même si le compte est utilisé pour une entreprise, un animal, ou autre chose. Elles n’apparaîtront pas sur votre profil public.</div>
 </div>

   

 <div class="row mb-3">
 <div class="col-3 text-center">adresse email</div>
 <div class="col-9">

 <input class="w-100" name="email"  type="email" value="{{Auth::user()->email}}">

 </div>
 </div>


 <div class="row mb-3">
 <div class="col-3 text-center">numéro de téléphone</div>
 <div class="col-9">

 <input class="w-100" type="text" placeholder="numéro de téléphone">

 </div>
 </div>
 

 <div class="row mb-3">
 <div class="col-3 text-center">genre</div>
 <div class="col-9">

 <input class="w-100" type="text" placeholder="genre">

 </div>
 </div>



 <div class="row mb-3">
 <div class="col-3">Comptes similaires suggérés</div>
 <div class="col-9 text-muted"> <input type="checkbox">   Incluez votre compte lorsque vous recommandez des comptes similaires que les personnes pourraient suivre. <a href="">[?]</a> </div>
 </div>

 <div class="row mb-3">
 <div class="col-3"></div>
 <div class="col-9 text-muted">
 <div class="container">
 <div class="row">
 <div class="col-3">
 <input style="border:none; border-radius:7px" class="bg-info text-white p-2" value="modifier" type="submit">
 </form></div>
 <div class="col-3"></div>
 <div class="col-6"><a href="">Désactiver mon compte temporerement</a></div>
 </div>
 </div>
 </div>
 </div>


 </div>


@endsection