@extends ('layout.layout')

@section ('content')
   
    <section class="mycards">
        @foreach($movies as $movie)
        @include('partials.moviecard')
        @endforeach
    </section>
    
    
@endsection