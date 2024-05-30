@extends('layout.app')
@section('content')
    <div class="container d-flex">
        <div class="row ">
            @foreach ($comics as $comic)
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$comic->title}}</h5>
                      <a href="{{route('comics.show',$comic)}}" class="btn btn-primary">vedi il fumetto completo</a>
                    </div>
                  </div>
            </div>
          


               
            @endforeach
        </div>
        </div>
    </div>
@endsection
