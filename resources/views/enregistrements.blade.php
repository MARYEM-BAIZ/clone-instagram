@extends('profile_template')
@section('profile')

<section class="publi">

    @if(isset($publis))
 @foreach($publis as $publi)
 <img class="pu" src="{{ $publi->publication->image }}" alt="image">
 @endforeach
 @endif

</section>


@endsection