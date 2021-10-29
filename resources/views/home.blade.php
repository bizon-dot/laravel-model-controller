
@extends('layouts.app')
@section('title', 'Home - FakeFlix')
    
@section('content')
<section id="movies">
        <div class="movies-container">
            @foreach ($movies as $movie)
                    <div class="card-movie">
                        <h3 class="title_movie">{{$movie['title']}}</h3>
                        <h4 class="original_title_movie">Original title: {{$movie['original_title']}}</h4>
                        <h4 class="nationality_movie">Nationality: {{$movie['nationality']}}</h4>
                        <h4 class="vote_movie">Rank: {{$movie['vote']}}</h4>
                    </div>   
            @endforeach
        </div>

</section>

@endsection