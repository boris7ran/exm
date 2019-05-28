<aside class="col-md-12 blog-sidebar">
    <div class="p-4 mb-3 bg-light rounded">
        <h4>Lastest movies: </h4>
    </div>

    <div class="p-4">
        @foreach ($lastFive as $movie)
            <ul>
                <li><a href=" {{ '/movies/' . $movie->id}}">{{ $movie->title }}</a></li>
            </ul>
        @endforeach
    </div>
</aside><!-- /.blog-sidebar -->