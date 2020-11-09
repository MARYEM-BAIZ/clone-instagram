@extends('page')
@section('contenu')

  <section>
      <p class="h1 text-muted text-center mt-5"> Publication</p>
      <form  action="{{ route('page.publierpub')}}"  class="text-center border border-light p-5" method="post" enctype="multipart/form-data">
      @csrf
      <input type="text" id="defaultLoginFormTache" class="form-control mb-4" name="description" placeholder="description..." >
      <input type="file" class="form-control mb-4" name="image" >
      <button class="btn btn-info btn-block my-4"  type="submit">publier</button>
    </form>
  </section>
  
@endsection