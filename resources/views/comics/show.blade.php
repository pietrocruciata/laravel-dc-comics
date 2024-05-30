@extends('layout.app')
@section('content')
<div class="container d-flex justify-content-center">
    <div class="card" style="width: 18rem;">
        <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><strong>TITOLO:</strong>{{$comic->title}}</h5>
          <p class="card-text"><strong>SERIE:</strong>{{$comic->series}}</p>
          <p class="card-text"><strong>DATA DI USCITA:</strong>{{$comic->sale_date}}</p>
          <p class="card-text"><strong>TIPOLOGIA:</strong>{{$comic->type}}</p>
          <p class="card-text"><strong>DESCRIZIONE:</strong>{{$comic->description}}</p>
        </div>
      </div>
</div>

@endsection