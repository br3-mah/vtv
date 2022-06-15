<div class='video'>
  <script src="https://use.fontawesome.com/20603b964f.js"></script>
  <script type="text/javascript" src="https://content.jwplatform.com/libraries/LJ361JYj.js"></script>
  <script type="text/javascript">
    jwplayer.key = 'ypdL3Acgwp4Uh2/LDE9dYh3W/EPwDMuA2yid4ytssfI=';
    // jwplayer.key = 'ITWMv7t88JGzI0xPwW8I0+LveiXX9SWbfdmt0ArUSyc=';
  </script>
  <div id="myElement"></div>
  <script type="text/javascript">
    jwplayer("myElement").setup({
      image: "https://images.pexels.com/photos/1001682/pexels-photo-1001682.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940",
      //aspectratio: "16:9",
      // width: '100%',
      height: window.innerHeight,
      autostart: false,
      file : '/storage/videos/{{ $path }}',
      title: 'Oceans',
      description: 'etoski on Codepen',
      aboutlink: 'https://www.jwplayer.com/',
      captions: {color: '#ffb800',fontSize: 30,backgroundOpacity: 0},
      sharing: {
        sites: ['facebook','twitter','tumblr','googleplus',{icon: '//support-static.jwplayer.com/images/awesome.svg', src: 'http://www.jwplayer.com/?', label:'jwplayer'}],
      }
    })
  </script>
</div>
            