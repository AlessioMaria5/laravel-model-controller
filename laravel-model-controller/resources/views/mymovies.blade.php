@extends ('layout.layout')

@section ('content')
   
    
       @foreach($movies as $movie)
       <li>{{$movie->title}}</li>
       @endforeach
    
    
@endsection