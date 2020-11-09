@extends('page')
@section('contenu')

<section>
<div class="container">
<div class="row mt-5 mb-5">
<div class="col-4">
<img class="imgprofile" src="{{ Auth::user()->profile_photo_path }}" alt="image">
</div>

<div class="col-8">
<div class="first">
<p >{{ Auth::user()->name }}</p>
 <a href="{{ route('page.modifierprofile')}}" style="border:1px solid gray ; border-radius:7px ;margin-left:30px ; color:black ;padding-left:5px ;padding-right:5px "  > <p>Modifier Profil</p></a>
 <a style="margin-left:30px ; color:black" href="{{ route('page.modifierprofile')}}" ><i class="fa fa-heart-o fa-2x " aria-hidden="true"></i> </a>      
</div>


<div class="second">

<h6><strong>{{ $publis->count()}}</strong> publications</h6>
<h6 style=" margin-left:100px "><strong>103</strong> abonnés</h6>
<h6 style=" margin-left:100px "><strong>168</strong> abonnements</h6>

</div>

<div class="third">
<h4>{{ Auth::user()->name }}</h4>
<h5>bio</h5>
</div>


</div>
</div>
</div>
<hr >

 <div class="divdiv">
     <a href="{{ route('page.pubfrofile')}}">PUBLICATIONS</a>
     <a href="{{route('page.igtv')}}">IGTV</a>
     <a href="{{route('page.enregistrement')}}">ENREGIDTREMENTS</a>
     <a href="">IDENTIFIé</a>
 </div>

</section>

 @yield('profile')

@endsection