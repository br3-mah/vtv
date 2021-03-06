<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Ermac') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/css/bulma-carousel.min.css">
  <link href="//vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css"> -->
  <!-- Styles -->
  <style>
              /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}}
              /* Dashboard CSS */
              *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
              #header{
    width: 100%;
    height: 100vh;
    background: #000;
    background: url('https://images.unsplash.com/photo-1508700115892-45ecd05ae2ad?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: top;
  }
  .centered{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 90%;
  }
  #header button, [type="text"]{
    position: absolute;
    height: 10vh;
    font-size: 5vh;
    border: none;
    bottom: 0;
  }
  #header button{
    width: 20%;
    right: 0;
    color: #fff;
    background: #FF9700;
    cursor: pointer;
  }
  #header [type='text']{
    background: #fff;
    bottom: 0;
    width: 80%;
    color: #777675;
    padding-left: 20px;
    padding-right: 20px;
  }

  /* Top Menu Search Bar */
  input {
    outline: none;
  }

  input[type=search] {
    -webkit-appearance: textfield;
    -webkit-box-sizing: content-box;
    font-family: inherit;
    font-size: 100%;
  }
  input::-webkit-search-decoration,
  input::-webkit-search-cancel-button {
    display: none; 
  }
  input[type=search] {
    padding: 9px 10px 9px 32px;
    width: 55px;
    background: #ededed url(https://static.tumblr.com/ftv85bp/MIXmud4tx/search-icon.png) no-repeat 9px center;
    border: solid 1px #ccc;
    
    -webkit-border-radius: 10em;
      -moz-border-radius: 10em;
            border-radius: 10em;
    
    -webkit-transition: all .5s;
      -moz-transition: all .5s;
            transition: all .5s;
  }
  input[type=search]:focus {
    width: 130px;
    background-color: #fff;
    border-color: #66CC75;
    
    -webkit-box-shadow: 0 0 5px rgba(109,207,246,.5);
      -moz-box-shadow: 0 0 5px rgba(109,207,246,.5);
            box-shadow: 0 0 5px rgba(109,207,246,.5);
  }

  /* Demo 2 */
  #demo-2 input[type=search] {
    width: 15px;
    padding-left: 10px;
    color: transparent;
    cursor: pointer;
  }
  #demo-2 input[type=search]:hover {
    background-color: #fff;
  }
  #demo-2 input[type=search]:focus {
    width: 130px;
    padding-left: 32px;
    color: #000;
    background-color: #fff;
    cursor: auto;
  }
  #demo-2 input:-moz-placeholder {
    color: transparent;
  }
  #demo-2 input::-webkit-input-placeholder {
    color: transparent;
  }

  /* Demo 3 */
  #demo-3 {
    position: relative;
    width: 200px;
  }
  #demo-3 input[type=submit] {
    position: absolute;
    top: 1px;
    right: 2px;
    width: 36px;
    height: 36px;
    color: #fff;
    background-color: #000;
    border: 4px solid #ededed;
    
    -webkit-border-radius: 20px;
      -moz-border-radius: 20px;
            border-radius: 20px;
    
    -webkit-transition: all .5s;
      -moz-transition: all .5s;
            transition: all .5s;
  }
  #demo-3 input[type=search] {
    float: right;
    width: 70px;
    padding: 10px 30px 10px 10px;
    cursor: pointer;
    background: none;
    background-color: #ededed;
  }
  #demo-3 input[type=search]:hover {
    background-color: #fff;
  }
  #demo-3 input[type=search]:focus {
    padding: 10px;
    width: 130px;
    color: #000;
    background-color: #fff;
    cursor: auto;
  }
  #demo-3 input[type=search]:focus ~ input[type=submit],
  #demo-3 input[type=search]:hover ~ input[type=submit] {
    border-color: #fff;
  }
  #demo-3 input:-moz-placeholder {
    color: transparent;
  }


  /* vonage */
  #videos {
          margin-top: 30%;
          position: relative;
          width: 100%;
          height: 100%;
          margin-left: auto;
          margin-right: auto;
      }

      #subscriber {
          position: absolute;
          left: 0;
          top: 0;
          width: 100%;
          height: 100%;
          z-index: 10;
      }

      #publisher {
          position: absolute;
          width: 360px;
          height: 240px;
          bottom: 10px;
          left: 10px;
          z-index: 100;
          border: 3px solid white;
          border-radius: 3px;
      }

      /* Sticky Bottom Bars */

      .sticky-top {
          position: sticky;
          top: 0px;
      }
      .sticky {
          background: #533401;
          color: #fff;
          position: sticky;
          bottom: 0px;
          padding: 1em 0;
          text-align: center;
      }

      #footer {
          background: #333;
          color: #fff;
          padding: 1em;
      }

  /* Media Player Custom */
  .visually-hidden {
    clip: rect(0 0 0 0);
    clip-path: inset(50%);
    height: 1px;
    overflow: hidden;
    position: absolute;
    white-space: nowrap;
    width: 1px;
  }

  .playback-controls button {
    margin-right: 1rem;
  }

  .playback-controls button:last-child {
    margin-right: 0;
  }

  .progress {
    height: 3px;
    width: 0px;
    margin: 1rem 0;
  }

  /* Custom CSS */
  .bg-glass{
      /* From https://css.glass */
      background: rgba(255, 241, 241, 0.05);
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(2.5px);
      -webkit-backdrop-filter: blur(2.5px);
      /* border: 1px solid rgba(255, 241, 241, 0.06); */
  }
  .bg-glass-amber{
      /* From https://css.glass */
      background: rgba(255, 248, 0, 0.52);
      border-radius: 16px;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(5.3px);
      -webkit-backdrop-filter: blur(5.3px);
      border: 1px solid rgba(255, 248, 0, 0.14);
  }
  .bg-glass-dark{
      /* From https://css.glass */
      background: rgba(10, 10, 10, 0.79);
      border-radius: 16px;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(5.3px);
      -webkit-backdrop-filter: blur(5.3px);
      border: 1px solid rgba(10, 10, 10, 0.14);
  }
  /* .bg-glass {
    box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2);
    position: relative;
    z-index: 1;
    background: transparent;
    overflow: hidden;
  } */

  /* .bg-glass:before {
    content: "";
    position: absolute;
    background: transparent;
    z-index: -1;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    box-shadow: inset 0 0 2000px rgba(255, 255, 255, .5);
    filter: blur(10px);
    margin: -20px;
  } */

  /* Video Gallery */
  .section-header {
    text-align: center;
    margin: 60px auto 20px auto;

    font-family: 'Montserrat', sans-serif;
    font-size: 36px;
    font-weight: 400;
    text-transform: uppercase;
    color: #222;
  }

  .section-header-underline {
    border: 1px solid #222;
    width: 3rem;
    margin: 0 auto;
    margin-bottom: 30px;
  }

  .video-gallery {
    position: relative;
    margin: 0 auto;
    text-align: center;
  }

  .video-gallery .gallery-item {
    position: relative;
    float: left;
    overflow: hidden;
    margin: 5px 1%;
    min-width: 150px;
    max-width: 390px;
    max-height: 260px;
    width: 38%;
    background: #000;
    cursor: pointer;
  }

  .video-gallery .gallery-item img {
    position: relative;
    display: block;
    opacity: .45;
    width: 105%;
    height: 300px;
    transition: opacity 0.35s, transform 0.35s;
    transform: translate3d(-23px, 0, 0);
    backface-visibility: hidden;
  }

  .video-gallery .gallery-item .gallery-item-caption {
    padding: 2em;
    color: #fff;
    text-transform: uppercase;
    font-size: 1.25em;
  }

  .video-gallery .gallery-item .gallery-item-caption,
  .video-gallery .gallery-item .gallery-item-caption > a {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }

  .video-gallery .gallery-item h2 {
    font-weight: 300;
    overflow: hidden;
    padding: 0.5em 0;
  }


  .video-gallery .gallery-item h2,
  .video-gallery .gallery-item p {
    position: relative;
    margin: 0;
    z-index: 10;
  }

  .video-gallery .gallery-item p {
    letter-spacing: 1px;
    font-size: 68%;

    padding: 1em 0;
    opacity: 0;
    transition: opacity 0.35s, transform 0.35s;
    transform: translate3d(10%, 0, 0);
  }

  .video-gallery .gallery-item:hover img {
    opacity: .3;
    transform: translate3d(0, 0, 0);

  }

  .video-gallery .gallery-item .gallery-item-caption {
    text-align: left;
  }

  .video-gallery .gallery-item h2::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 15%;
    height: 1px;
    background: #fff;
    
    transition: transform 0.3s;
    transform: translate3d(-100%, 0, 0);
  }

  .video-gallery .gallery-item:hover h2::after {
    transform: translate3d(0, 0, 0);
  }

  .video-gallery .gallery-item:hover p {
    opacity: 1;
    transform: translate3d(0, 0, 0);
  }

  @media screen and (max-width: 50em) {
    .video-gallery .gallery-item {
      display: inline-block;
      float: none;
      margin: 10px auto;
      width: 100%;
    }
  }
  </style>
  <!-- Styles -->
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
  @livewireStyles

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="has-background-black">
  <x-jet-banner />

        <div class="min-h-screen has-background-black">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="shadow has-background-black">
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>    <script src="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/js/bulma-carousel.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- <script src="js/magnetic.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/resumablejs@1.1.0/resumable.min.js"></script>
    <script src="js/uploader.js"></script>
    <script src="js/news.js"></script>
		<script>
            bulmaCarousel.attach('#carousel-demos', {
                slidesToScroll: 1,
                slidesToShow: 4
            });

            // $('.video-gallery').magnificPopup({
            //     delegate: 'a', 
            //     type: 'iframe',
            //     gallery:{
            //         enabled:true
            //     }
            // });

            var imageSwap = function () {
              var $this = $(this);
              var newSource = $this.data("swap");
              $this.data("swap", $this.attr("src"));
              $this.attr("src", newSource);
            };

            // $(function () {
            //   $("img.item-bg").hover(imageSwap, imageSwap);
            // });
		</script>

    </body>
    <!-- <div class="sticky bg-glass-dark">
        <div class="media-controls pb-4">
            Progress bar
            <div class="progress bg-success"></div>
            <div class="playback-controls text-center">
            <button id="previousButton" type="button" class="btn btn-sm rounded-circle">
                <span aria-hidden="true"><i class="fas fa-step-backward"></i></span>
                <span class="visually-hidden">Previous Track</span>
            </button>
            <button id="backwardButton" type="button" class="btn btn-sm rounded-circle">
                <span aria-hidden="true"><i class="fas fa-backward"></i></span>
                <span class="visually-hidden">Seek Backward</span>
            </button>
            <button id="playPauseButton" type="button" class="btn btn-lg rounded-circle">
                <span aria-hidden="true"><i class="fas fa-play"></i></span>
                <span class="visually-hidden">Play</span>
            </button>
            <button id="forwardButton" type="button" class="btn btn-sm rounded-circle">
                <span aria-hidden="true"><i class="fas fa-forward"></i></span>
                <span class="visually-hidden">Seek Forward</span>
            </button>
            <button id="nextButton" type="button" class="btn btn-sm rounded-circle">
                <span aria-hidden="true"><i class="fas fa-step-forward"></i></span>
                <span class="visually-hidden">Next Track</span>
            </button>
            </div>
        </div>
    </div>
    <div id="footer">Footer (or something)</div> -->
</html>
