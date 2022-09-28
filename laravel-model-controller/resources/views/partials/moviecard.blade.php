

<div class="card">
    <div class="img-wrap">
        <img src="https://socialistmodernism.com/wp-content/uploads/2017/07/placeholder-image.png?w=640" alt="">
    </div>

    <hgroup>
        <h2>{{$movie->title}}</h2>
        <h3>{{$movie->original_title}}</h3>
        <h3>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati natus minus iusto dignissimos pariatur quidem?</h3>
        <h4>{{$movie->nationality}}</h4>
        <h5>{{$movie->date}}</h5>
    </hgroup>

    <div class="movieVote">{{$movie->vote}}</div>
</div>