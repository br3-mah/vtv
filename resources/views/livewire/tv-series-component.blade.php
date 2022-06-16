<!-- <div class="has-background-dark">
    <div class="container content is-large has-text-white">
        <h1 class="has-text-warning">Tv Series</h1>
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
</div> -->


<div class="contianer-fluid mx-9">
	<div class="boxx">
    @foreach ($data as $key => $media)
		<div class="item">
			<div class="item-poster">
            @foreach($media->imageurl as $img)
				<img src="{{$img ?? 'https://lh3.googleusercontent.com/proxy/sLlMxAJLftpFgyxxmSQptxjiO2lLwp_uo3jhRy8_Mak_YeXhMGkUL6e2hTqTEOBVQysc19RpnJ-dV-VGj1Uz3EvnYkW7gaxqMsGpeiZvcrM'}}" alt="{{ $media->title}}">
            @endforeach
            </div>

			<div class="item-data">
				<div class="item-part">
					<div class="item-season">S1</div>
					<div class="item-episode">E01</div>
				</div>
				<h1>{{ $media->title}}</h1>
				<p>
                @foreach($media->genre as $gen)
                {{$gen}}
                @endforeach
                </p>
				<div class="item-rate">
					<div class="item-vote">8.2</div>
					<div class="item-time">TV Series (2014–2017)</div>
				</div>
			</div>
            @foreach($media->imageurl as $img)
			<img class="item-bg" data-swap="{{ $img ?? 'https://i.giphy.com/media/l2R00GMs5jUujJtx6/giphy.gif'}}" src="{{ $img ?? 'https://i.giphy.com/media/l2R00GMs5jUujJtx6/giphy.gif'}}" alt="{{ $media->title}}">
            @endforeach
        </div>
    @endforeach
	</div>
</div>
