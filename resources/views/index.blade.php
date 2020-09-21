@extends('layouts.php')

@section('content')
    <header class="jumbotron">
        <h1 class="modal-title float-left">News</h1>
        <a  class="nav-link float-right" href="{{route('news.create')}}">Maak een nieuw bericht aan.</a>
    </header>

<div class="container">
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <storng>{{ $message }}</storng>
        </div>
        @endif
    <div class="row">
        @foreach($newsItem as $newsItem)
            <div class="col-sm card border-9">
                <h2 class="card-title">{{$newsItem['title']}}</h2>
                <p class="card-text">{{$newsItem['description']}}</p>
                <img src="{{$newsItem['image']}}" alt="image" class="card-img">
                <a  class="btn btn-light" href="{{route('news.shows', $newsItem['title'])}}"></a>
            </div>
        @endforeach
    </div>
</div>
@endsection