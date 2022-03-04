<div class="has-background-dark">
    <div class="container content is-large has-text-white">
        <h1 class="has-text-warning">Tv Series</h1>
        <!-- <p>I was having trouble finding an example of a Bulma based gallery that wrapped.  Here is what I came up with...</p> -->
    </div>

    <div class="video-gallery">
    @foreach ($data as $key => $media)

        <div class="gallery-item">
            @foreach($media->imageurl as $img)
            <img src="{{$img ?? 'https://betravingknows.com/wp-content/uploads/2017/06/video-movie-placeholder-image-grey.png'}}" alt="North Cascades National Park" />
            @endforeach
            <div class="gallery-item-caption">
                <div>
                <h2>{{ $media->title}}</h2>
                @foreach($media->genre as $gen)
                <p>{{$gen}}</p>
                @endforeach
                </div>
                <a class="vimeo-popup" href="https://www.youtube.com/embed/-_pT-tO9LJc"></a>
            </div>
        </div>
    @endforeach
    </div>
</div>
