<div>
    <div class="container content is-large has-text-white">
        <h1 class="has-text-warning">Tv Series</h1>
        <!-- <p>I was having trouble finding an example of a Bulma based gallery that wrapped.  Here is what I came up with...</p> -->
    </div>
  
  <div class="mx-auto container columns is-multiline">
      
    @foreach ($data as $key => $media)
        
        <div class="column is-one-quarter-desktop is-half-tablet">
            <div class="card">
                <div class="card-image">
                    <figure class="image is-3by2">
                        @foreach($media->imageurl as $img)
                            <img src="{{$img}}" alt="">
                        @endforeach
                    </figure>
                    <div class="card-content is-overlay is-clipped">
                        <span class="tag is-info">
                            {{ $media->title}}
                        </span> 

                    </div>
                    <p>{{$media->imdbrating}}</p>
                    <p>{{$media->released}}</p>
                    
                </div>
                <footer class="card-footer">

                    @foreach($media->genre as $gen)
                        <span>{{$gen}}</span>&nbsp;
                    @endforeach
                </footer>
                <a href="{{ route('video.stream') }}">Play</a>
            </div>
        </div>
    @endforeach

  </div>
</div>
