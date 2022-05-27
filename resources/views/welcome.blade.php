<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ermac</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/css/bulma-carousel.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css"> -->
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}}
        
            /* My General CSS */
    
            *, *:before, *:after {
      box-sizing: inherit;
    }
            .panels {
            min-height: 100vh;
            overflow: hidden;
            display: flex;
            
            }

            .panel {
            background: #6B0F9C;
            box-shadow: inset 0 0 0 5px rgba(255,255,255,0.1);
            color: white;
            text-align: center;
            align-items: center;
            /* Safari transitionend event.propertyName === flex */
            /* Chrome + FF transitionend event.propertyName === flex-grow */
            transition:
                font-size 0.7s cubic-bezier(0.61,-0.19, 0.7,-0.11),
                flex 0.7s cubic-bezier(0.61,-0.19, 0.7,-0.11),
                background 0.2s;
            font-size: 20px;
            background-size: cover;
            background-position: center;
            flex: 1;
            justify-content: center;
            align-items: center;
            display: flex;
            flex-direction: column;
            }

            .panel1 { background-image:url(https://c4.wallpaperflare.com/wallpaper/675/275/718/joker-2019-movie-joker-joaquin-phoenix-actor-men-hd-wallpaper-preview.jpg); }
            .panel2 { background-image:url(https://c4.wallpaperflare.com/wallpaper/144/450/423/star-wars-movies-star-wars-the-last-jedi-poster-wallpaper-preview.jpg); }
            .panel3 { background-image:url(https://c4.wallpaperflare.com/wallpaper/591/631/588/brave-cartoon-movie-merida-archer-wallpaper-preview.jpg); }
            .panel4 { background-image:url(https://c4.wallpaperflare.com/wallpaper/907/303/739/sport-egypt-stadium-wallpaper-preview.jpg); }
            .panel5 { background-image:url(https://c4.wallpaperflare.com/wallpaper/457/871/663/movie-poster-wonder-woman-gal-gadot-portrait-display-wallpaper-preview.jpg); }

            /* Flex Children */
            .panel > * {
            margin: 0;
            width: 100%;
            transition: transform 0.5s;
            flex: 1 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            }

            .panel > *:first-child {transform: translateY(-100%);}
            .panel.open-active > *:first-child {transform: translateY(0);}
            .panel > *:last-child {transform: translateY(100%);}
            .panel.open-active > *:last-child {transform: translateY(0);}

            .panel p {
            text-transform: uppercase;
            font-family: 'Amatic SC', cursive;
            text-shadow: 0 0 4px rgba(0, 0, 0, 0.72), 0 0 14px rgba(0, 0, 0, 0.45);
            font-size: 2em;
            }
            
            .panel p:nth-child(2) {
            font-size: 4em;
            }

            .panel.open {
            font-size: 40px;
            flex: 5;
    }
        </style>
    </head>
    <body class="has-background-black">  
        <div class="">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <!-- Start NavBar -->
            <nav class="navbar is-black">
                <div class="navbar-brand">
                    <div class="mt-2">
                        <figure class="image is-64x64">
                            <img src="{{asset('/images/ermac.webp')}}">
                        </figure>
                    </div>
                    <div class="navbar-burger" data-target="navbarExampleTransparentExample">
                    <span></span>
                    <span></span>
                    <span></span>
                    </div>
                </div>

                <div id="navbarExampleTransparentExample" class="navbar-menu">
                    <div class="navbar-start">
                        <a class="navbar-item" href="/">
                            Home
                        </a>
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link" href="#">
                            Menu
                            </a>
                            <div class="navbar-dropdown is-boxed">
                                <a class="navbar-item" href="{{ route('tv.series.all') }}">
                                    Movies
                                </a>
                                <a class="navbar-item" href="{{ route('music.all') }}">
                                    Music
                                </a>
                                <a class="navbar-item" href="{{ route('tv.series.all') }}">
                                    TV Shows
                                </a>
                                <a class="navbar-item" href="{{ route('sport.all') }}">
                                    Teen TV
                                </a>
                                <a class="navbar-item" href="{{ route('sport.all') }}">
                                    Sports
                                </a>
                                <a class="navbar-item" href="{{ route('news.all') }}">
                                    News
                                </a>
                                <hr class="navbar-divider">
                                <a class="navbar-item" href="/live-watch">
                                    Live Watch
                                </a>
                                <a class="navbar-item is-active" href="#">
                                    Live Trending
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- <div>
                        <a href="{{ route('search.search') }}" class="button is-small mt-2">
                            <span class="icon is-small">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </span>
                        </a>
                    </div> -->

                    <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="field is-grouped">
                        <p class="control">
                            <a class="bd-tw-button button" href="/login">
                            <span class="icon">
                                <i class="fa fa-twitter"></i>
                            </span>
                            <span>
                                Sign In
                            </span>
                            </a>
                        </p>
                        <p class="control">
                            <a class="button is-primary" href="/register">
                            <span class="icon">
                                <i class="fa fa-download"></i>
                            </span>
                            <span>Sign Up</span>
                            </a>
                        </p>
                        </div>
                    </div>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <!-- Introduction Welcome Page Section -->
            <div class="panels">
                <div class="panel panel1">
                    <!-- <p>Hey</p>
                    <p>Let's</p>
                    <p>Go</p> -->
                </div>
                <div class="panel panel2">
                    <!-- <p>Give</p>
                    <p>Take</p>
                    <p>Receive</p> -->
                </div>
                <div class="panel panel3">
                    <!-- <p>Experience</p>
                    <p>It</p>
                    <p>Today</p> -->
                </div>
                <div class="panel panel4">
                    <!-- <p>Give</p>
                    <p>All</p>
                    <p>You Can</p> -->
                </div>
                <div class="panel panel5">
                    <!-- <p>Life</p>
                    <p>In</p>
                    <p>Motion</p> -->
                </div>
            </div>
            @include('widgets.Front.trending')
            
            @include('widgets.Front.cartoons')
            @include('widgets.Front.ads-1')
            @include('widgets.Front.sports')
            @include('widgets.Front.news')
            @include('widgets.Front.ads-1')
        </div>
    </body>
    <footer class="footer has-background-black is-text-white">
        <div class="content has-text-centered">
            <p>
            <strong>Verge Tv</strong> by <a href="https://jgthms.com">Bremah Nyeleti</a>. The source code is licensed
            <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
            is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
            </p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/js/bulma-carousel.min.js"></script>
		<script>
            bulmaCarousel.attach('#carousel-demo', {
                slidesToScroll: 1,
                slidesToShow: 4
            });

            // Intro Section
            const panels = document.querySelectorAll('.panel');

            function toggleOpen() {
            this.classList.toggle('open');
            }

            function toggleActive(e) {
            if(e.propertyName.includes('flex')) {
            this.classList.toggle('open-active');
            }
            }

            panels.forEach(panel => panel.addEventListener('click', toggleOpen));
            panels.forEach(panel => panel.addEventListener('transitionend', toggleActive));
		</script>
</html>
