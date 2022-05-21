<div>
    <div class="container content is-large">
        <h1>Global Sports</h1>
        <p>I was having trouble finding an example of a Bulma based gallery that wrapped.  Here is what I came up with...</p>
    </div>
  
    <div class="mx-auto container columns is-multiline"> 
    @foreach ($data as $key => $media)
        <div class="column is-one-quarter-desktop is-half-tablet">
            <div class="container card">
                <div class="card-image">
                    <figure class="image is-3by2">
                    <img src="{{$media->thumbnail}}" alt="">
                    </figure>
                </div>
                <div class="">
                    <span class="tag is-info">
                        {{$media->title}}
                    </span> 
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
<!-- 
  <div class="row">
        @foreach ($data as $key => $media)
            <div class="col-lg-4">
                <img src="{{$media->thumbnail}}" alt="">
                <span class="title">{{$media->title}}</span>
                <span class="text">Morbi diam viverra mattis sociis magna, habitasse penatibus non lectus</span>
                <a class="text" href="{{$media->competition->url}}">
                    {{$media->competition->name}}
                </a>
            </div>
        @endforeach
    </div> -->
</div>
