@extends('profile_template')
@section('profile')


<section >
    <div class="container">
        <div class="row mb-2">
            <div class="col-4"><video src="{{asset('photos/zoom_0.mp4')}}" controls width="250px" height="300px" ></video></div>
            <div class="col-4"><video src="{{asset('photos/zoom_1.mp4')}}" controls width="250px" height="300px" ></video></div>
            <div class="col-4"><video src="{{asset('photos/zoom_3.mp4')}}" controls width="250px" height="300px" ></video></div>
        </div>
        <div class="row mb-2">
            <div class="col-4"><video src="{{asset('photos/zoom_0.mp4')}}" controls width="250px" height="300px" ></video></div>
            <div class="col-4"><video src="{{asset('photos/zoom_1.mp4')}}" controls width="250px" height="300px" ></video></div>
            <div class="col-4"><video src="{{asset('photos/zoom_3.mp4')}}" controls width="250px" height="300px" ></video></div>
        </div>
    </div>
</section>


@endsection