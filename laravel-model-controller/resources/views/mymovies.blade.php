@extends ('layout.layout')

@section ('content')
   
    
       @foreach($movies as $movie)
       <li>@include('partials.moviecard')</li>
       @endforeach
    
    
@endsection