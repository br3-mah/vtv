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

            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Ubuntu:wght@400&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
  user-select: none;
  scroll-behavior: smooth;
}
::-webkit-scrollbar {
  width: 5px;
  height: 0;
  background-color: #333;
}
::-webkit-scrollbar-thumb {
  background-color: #666;
  border-radius: 5px;
}
body {
  position: relative;
  height: 100vh;
  overflow-x: hidden;
  overflow-y: auto;
}
.wraper {
  position: relative;
  width: 100%;
  height: 100vh;
  overflow: auto;
  overflow-x: hidden;
  scroll-snap-type: y mandatory;
}
header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: fixed;
  background-color: #ffffff18;
  top: 0;
  width: 100%;
  height: 4.5rem;
  z-index: 999;
  backdrop-filter: blur(10px);
  margin-right: 0.3rem;
  padding: 0 20px;
  transition: 0.3s ease;
}
header.active1 {
  background-color: #a1a1a196;
  height: 3rem;
}
header .logo {
  color: #fff;
  font-family: "Ubuntu";
  font-size: 2rem;
  font-weight: 600;
  letter-spacing: 0.4rem;
  text-decoration: none;
  margin-left: 1rem;
  z-index: 99999;
}
header .menu {
  width: fit-content;
  height: 100%;
  display: flex;
  transition: 0s;
}
header .menu-shadow {
  display: none;
}
header .menu .close-menu {
  display: none;
}
.menu a {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 0.2rem;
  padding: 0rem 0.5rem;
  height: 100%;
  color: #fff;
  font-weight: 500;
  letter-spacing: 0.1rem;
  font-size: 1rem;
  text-decoration: none;
  border-radius: 1px;
}
header .menu a:hover,
header .menu a.active {
  font-weight: 600;
  color: crimson;
  transition: color 0.1s ease-in;
}
header.active1 .menu a:hover,
header.active1 .menu a.active {
  background-color: crimson;
  color: #fff;
}

header .show-bar {
  display: none;
  position: absolute;
  right: 2rem;
  font-size: 1.3rem;
  padding: 0.5rem 0.7rem;
  transition: 0.3s ease;
  cursor: pointer;
  border-radius: 5px;
}
header .show-bar:hover {
  background-color: #dddddd63;
}
.section {
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  color: #000;
  scroll-snap-align: start;
  background-size: cover;
  background-attachment: fixed;
  background-position: center;
}
.section:nth-child(1) {
  background-image: url(https://mmirazulmomenmiraz2005.on.drv.tw/image/bg1.jpg);
}
.section:nth-child(2) {
  background-image: url(https://mmirazulmomenmiraz2005.on.drv.tw/image/bg2.jpg);
}
.section:nth-child(3) {
  background-image: url(https://mmirazulmomenmiraz2005.on.drv.tw/image/bg3.jpg);
}
.section:nth-child(4) {
  background-image: url(https://mmirazulmomenmiraz2005.on.drv.tw/image/bg4.jpg);
}
.section:nth-child(5) {
  background-image: url(https://mmirazulmomenmiraz2005.on.drv.tw/image/bg5.jpg);
}

.section .section-span {
  font-size: 4.5rem;
  font-weight: 650;
  color: #000;
  opacity: 0;
  transform: scale(0);
  text-transform: uppercase;
}
.section:nth-child(even) .section-span {
  transform: translateX(100vw);
}
.section:nth-child(odd) .section-span {
  transform: translateX(-100vw);
}
.section.active-sec .section-span {
  transition: transform 1.5s ease;
  transform: translateX(0) scale(1);
  opacity: 1;
}
@media (max-width: 750px) {
  body header .menu {
    position: fixed;
    top: 0;
    left: -20rem;
    width: 20rem;
    height: 100vh;
    flex-direction: column;
    background-color: #222;
    padding: 0;
    padding-top: 3.5rem;
    z-index: 99999;
    overflow-y: auto;
    transition: left 0.5s linear;
  }
  body header .menu-active {
    left: 0;
  }
  header .menu-shadow {
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background-color: #000000b7;
    backdrop-filter: blur(50px);
  }
  header .shadow-active {
    display: block;
  }
  header .menu a {
    text-align: center;
    color: #fff;
    height: 4rem;
    margin: 10px 0;
    cursor: pointer;
    border-radius: 0;
    transition: 0s;
  }
  header .menu a.active {
    font-weight: 600;
    background: crimson;
    color: #fff;
  }
  header .menu a:hover {
    background-color: crimson;
    color: #fff;
    font-weight: 600;
  }
  header .show-bar {
    display: block;
  }
  header .hide-bar {
    display: none;
  }
  header .menu .close-menu {
    display: block;
    position: absolute;
    top: 1.2rem;
    right: 30px;
    padding: 0.5rem;
    font-size: 1.5rem;
    font-weight: 0;
    color: #fff;
    cursor: pointer;
  }
}
        </style>
    </head>
    <body class="has-background-black">  
        <div class="">

            <!-- Start NavBar -->
  <div class="wraper">
    <div class="section" id="home">
      <span class="section-span">Home</span>
      <header id="header">
        <a href="#" class="logo">Website</a>
        <div class="menu">
          <a href="#home" class="active" onclick="closeMenu()">
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
          </a>
          <a href="#aboutme" onclick="closeMenu()">About me</a>
          <a href="#service" onclick="closeMenu()">Service</a>
          <a href="#gallery" onclick="closeMenu()">Gallery</a>
          <a href="#contactus" onclick="closeMenu()">Contact Us</a>
          <i class="fa fa-times close-menu" onclick="closeMenu()"></i>
        </div>
        <div class="menu-shadow" onclick="closeMenu()"></div>
        <i class="fa fa-bars show-bar" onclick="openMenu()"></i>
      </header>
    </div>
    <div class="section" id="aboutme"><span class="section-span">About me</span></div>
    <div class="section" id="service"><span class="section-span">Service</span></div>
    <div class="section" id="gallery"><span class="section-span">Gallery</span></div>
    <div class="section" id="contactus"><span class="section-span">Contact Us</span></div>
  </div>
            <!-- End Navbar -->
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


            //NavBar Script
   var wraper = document.querySelector("body .wraper");
var a = document.querySelectorAll(".menu a");
var section = document.querySelectorAll(".section");
var header = document.getElementById("header");
var menu = document.querySelector("header .menu");
var openBar = document.querySelector(".show-bar");
var menuShadow = document.querySelector(".menu-shadow");
section[0].classList.add("active-sec");
wraper.onscroll = function () {
  if (wraper.scrollTop > 100) {
    header.classList.add("active1");
  } else {
    header.classList.remove("active1");
  }
  section.forEach(function (sec) {
    id = sec.getAttribute("id");
    if (wraper.scrollTop >= sec.offsetTop - sec.clientHeight / 3) {
      a.forEach(function (a1) {
        a1.classList.remove("active");
        document
          .querySelector(`#header .menu a[href*=${id}]`)
          .classList.add("active");
      });
      sec.classList.add("active-sec");
    } else {
      sec.classList.remove("active-sec");
    }
  });
};
function openMenu() {
  menu.classList.add("menu-active");
  openBar.classList.add("hide-bar");
  menuShadow.classList.add("shadow-active");
}
function closeMenu() {
  menu.classList.remove("menu-active");
  openBar.classList.remove("hide-bar");
  menuShadow.classList.remove("shadow-active");
}
window.addEventListener("contextmenu", function (e) {
  e.preventDefault();
});
         
		</script>
</html>
