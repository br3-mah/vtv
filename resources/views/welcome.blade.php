<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Magnet</title>

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
                        <svg class="w-10 h-10" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <path style="fill:#507C5C;" d="M424.177,456.169h-69.293c-18.706,0-33.924-15.218-33.924-33.924v-218.94
                        c0-35.941-28.687-65.62-63.949-66.158c-17.498-0.302-34.054,6.372-46.566,18.693c-12.514,12.327-19.408,28.756-19.408,46.261v67.368
                        c0,7.971-6.463,14.436-14.436,14.436c-7.973,0-14.436-6.464-14.436-14.436v-67.368c0-25.3,9.952-49.036,28.021-66.831
                        c18.064-17.792,41.948-27.389,67.265-26.992c50.94,0.778,92.381,43.407,92.381,95.027v218.94c0,2.786,2.266,5.053,5.053,5.053
                        h69.293c2.786,0,5.053-2.266,5.053-5.053v-58.454c0-7.971,6.463-14.436,14.436-14.436s14.436,6.464,14.436,14.436v58.454
                        C458.1,440.951,442.882,456.169,424.177,456.169z M157.115,456.169H87.821c-18.706,0-33.924-15.218-33.924-33.924V202.1
                        C53.897,90.663,144.56,0,255.999,0S458.1,90.663,458.1,202.1v66.883c0,7.971-6.463,14.436-14.436,14.436
                        s-14.436-6.464-14.436-14.436V202.1c0-95.519-77.711-173.229-173.23-173.229S82.769,106.581,82.769,202.1v220.145
                        c0,2.786,2.266,5.053,5.053,5.053h69.293c2.786,0,5.053-2.266,5.053-5.053v-71.922c0-7.971,6.463-14.436,14.436-14.436
                        s14.436,6.464,14.436,14.436v71.922C191.037,440.951,175.819,456.169,157.115,456.169z"/>
                    <path style="fill:#CFF09E;" d="M443.664,337.797v84.45c0,10.763-8.725,19.488-19.488,19.488h-69.293
                        c-10.763,0-19.487-8.725-19.487-19.488v-84.45H443.664z"/>
                    <path style="fill:#507C5C;" d="M424.177,456.169h-69.293c-18.706,0-33.924-15.218-33.924-33.924v-84.448
                        c0-7.971,6.463-14.436,14.436-14.436h108.269c7.973,0,14.436,6.464,14.436,14.436v84.448
                        C458.1,440.951,442.882,456.169,424.177,456.169z M349.831,352.233v70.012c0,2.786,2.266,5.053,5.053,5.053h69.293
                        c2.786,0,5.053-2.266,5.053-5.053v-70.012H349.831z"/>
                    <path style="fill:#CFF09E;" d="M176.601,337.797v84.45c0,10.763-8.725,19.488-19.487,19.488H87.821
                        c-10.763,0-19.488-8.725-19.488-19.488v-84.45H176.601z"/>
                    <g>
                        <path style="fill:#507C5C;" d="M157.115,456.169H87.821c-18.706,0-33.924-15.218-33.924-33.924v-84.448
                            c0-7.971,6.463-14.436,14.436-14.436h108.269c7.973,0,14.436,6.464,14.436,14.436v84.448
                            C191.037,440.951,175.819,456.169,157.115,456.169z M82.769,352.233v70.012c0,2.786,2.266,5.053,5.053,5.053h69.293
                            c2.786,0,5.053-2.266,5.053-5.053v-70.012H82.769z"/>
                        <path style="fill:#507C5C;" d="M263.943,512c-1.392,0-2.806-0.204-4.208-0.631c-7.628-2.32-11.928-10.385-9.607-18.013L263,451.059
                            l-31.791,7.609c-5.439,1.304-11.144-0.657-14.637-5.025c-3.493-4.37-4.147-10.365-1.679-15.384l28.869-58.706
                            c3.518-7.154,12.169-10.104,19.324-6.584c7.154,3.519,10.102,12.171,6.584,19.325l-15.316,31.148l26.432-6.327
                            c5.031-1.2,10.324,0.378,13.871,4.146c3.547,3.768,4.806,9.147,3.299,14.097l-20.21,66.405
                            C275.854,507.99,270.13,511.999,263.943,512z"/>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    </svg>
                    <div class="navbar-burger" data-target="navbarExampleTransparentExample">
                    <span></span>
                    <span></span>
                    <span></span>
                    </div>
                </div>

                <div id="navbarExampleTransparentExample" class="navbar-menu">
                    <div class="navbar-start">
                        <a class="navbar-item" href="https://bulma.io/">
                            Home
                        </a>
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link" href="https://bulma.io/documentation/overview/start/">
                            Menu
                            </a>
                            <div class="navbar-dropdown is-boxed">
                            <a class="navbar-item" href="https://bulma.io/documentation/overview/start/">
                                Movies
                            </a>
                            <a class="navbar-item" href="https://bulma.io/documentation/overview/modifiers/">
                                TV Shows
                            </a>
                            <a class="navbar-item" href="https://bulma.io/documentation/columns/basics/">
                                Teen TV
                            </a>
                            <a class="navbar-item" href="{{ route('sport.all') }}">
                                Sports
                            </a>
                            <a class="navbar-item" href="https://bulma.io/documentation/form/general/">
                                News
                            </a>
                            <hr class="navbar-divider">
                            <a class="navbar-item" href="/live-watch">
                                Live Watch
                            </a>
                            <a class="navbar-item is-active" href="https://bulma.io/documentation/components/breadcrumb/">
                                Live Trending
                            </a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a href="{{ route('search.search') }}" class="button is-small mt-2">
                            <span class="icon is-small">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </span>
                        </a>
                    </div>

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
