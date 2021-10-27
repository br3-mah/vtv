<div>
        <div class="container content is-large">
            <h1>Bulma Responsive Gallery</h1>
            <p>I was having trouble finding an example of a Bulma based gallery that wrapped.  Here is what I came up with...</p>
        </div>
      
      <div class="mx-auto container columns is-multiline">
          
        @foreach ($data as $key => $media)
            <div class="column is-one-quarter-desktop is-half-tablet">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-3by2">
                        <img src="{{$media->thumbnail}}" alt="">
                        </figure>
                        <div class="card-content is-overlay is-clipped">
                            <span class="tag is-info">
                                {{$media->title}}
                            </span> 
                            {{-- <p>{{ $media->primaryTitle->season }}</p>       --}}
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a href="{{$media->competition->url}}" class="card-footer-item">
                            {{$media->competition->name}}
                        </a>
                    </footer>
                </div>
            </div>
        @endforeach

      </div>
</div>
