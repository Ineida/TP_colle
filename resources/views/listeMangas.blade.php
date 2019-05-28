@extends('template')

@section('titre_page')
    Liste des mangas
@endsection

@section('titre')
    <h1>Les mangas </h1>
@endsection

@section('contenu')

    <conference>
        @foreach($lesMangas as $manga)
            <h2><a href="{{url('/listeMangas')}}">{{ $manga->getTitre()}} </a></h2>

            <p> id: {{ $manga->getIdManga()}}  </p><p> prix{{ $manga->getPrix()}}  </p>


        @endforeach
    </conference>


@endsection
