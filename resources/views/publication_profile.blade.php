@extends('profile_template')
@section('profile')



@if(isset($publis))
<div class="popup-gallery">
 @foreach($publis as $publi)


<a href="{{ $publi->image }}"> <img class="pu" src="{{ $publi->image }}" width="75" height="75" alt="image"></a>
 @endforeach
 </div>
 @endif

@endsection