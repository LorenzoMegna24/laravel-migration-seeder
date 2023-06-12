@extends('layouts.app')

@section('title-page')
    Laravel Movie | Home
@endsection

@section('content')
    <h1>Movies</h1>

    <div class="container">
        <div class="row">
            @foreach ($movies as $element)
              <div class="col-lg-3 mb-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">{{$element->title}}</h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary">{{$element->original_title}}</h6>
                      <p class="card-text">{{$element->nationality}}</p>
                      <p class="card-text">{{$element->date}}</p>
                      <p class="card-text">{{$element->vote}}</p>
                    </div>
                  </div>
                
              </div>  
            @endforeach
        </div>
    </div>
@endsection