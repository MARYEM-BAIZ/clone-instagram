@extends('page')
@section('contenu')


    <section style="margin-top:100px;display: flex; flex-wrap: wrap" >
        
    @if(isset($publis))
@foreach($publis as $publi)



<a style="margin:7px" href="{{route('page.infopub',['id' => $publi->id])}}"><img style="width:250px;height:250px; display:block; margin-left:auto;margin-right:auto" src="{{ $publi->image }}" alt="image"></a>



@endforeach
@endif



    </section>

@endsection