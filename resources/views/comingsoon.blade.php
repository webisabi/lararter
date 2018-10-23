<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127244076-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'UA-127244076-1');
        </script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Will Sabido Art</title>
        <meta name="Description" content="Bristol landscapes in oil on canvas.">
        <!-- favicons & OG meta, thanks to https://realfavicongenerator.net -->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#00aba9">
        <meta name="theme-color" content="#ffffff">
        <!-- OG meta, thanks again to https://realfavicongenerator.net, I'll be sure to donate once I've sold a few paintings;) -->
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="628">
        <meta property="og:title" content="Bristol landscapes in oil on canvas">
        <meta property="og:description" content="Paintings by Will Sabido">
        <meta property="og:url" content="https://sabido.art">
        <meta property="og:image" content="https://sabido.art/og_king_st.jpg">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            @font-face {
              font-family: 'Raleway';
              font-display: fallback;
              font-face: 500;
              src: local('Raleway'), url('https://fonts.gstatic.com/s/raleway/v12/1Ptrg8zYS_SKggPNwPIsWqZPANqczVs.woff2') format('woff2');
            }
            @font-face {
              font-family: 'Raleway';
              font-display: auto;
              font-face: bold;
              src: local('Raleway'), url('https://fonts.gstatic.com/s/raleway/v12/1Ptsg8zYS_SKggPNwE44TYFqL_KWxQ.woff2') format('woff2');
            }
            html, body {
                background-color: #fff;
                background-image: url("king_st.jpg");
                background-size: cover;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title, .title h1 {
                font-size: 84px;
            }
            .title, .sub-title {
                -webkit-animation:colorchange 30s infinite alternate;
                text-shadow: 0px -1px 2px rgba(255,255,255,.4), 0px 1px 0px rgba(0,0,0,.5);
            }
            .sub-title {
                font-size: 40px;
                font-weight: bold;
            }
            .links > a {
                color: whitesmoke;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                display: inline-grid;
                padding: 8px;
                margin: 24px;
            }
            .links > a:hover {
                color: white;
                background: cornflowerblue;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .credits {
                font-size: smaller;
                color: antiquewhite;
            }
            .credits a {
                color:whitesmoke;
            }
            .credits a:hover {
                color: white;
                text-decoration:none;
                background: cornflowerblue;
            }
            .credits .web-dev {
                float:right;
            }
            .credits .copyright {
                float:left;
            }
            @-webkit-keyframes colorchange {
              0% {
                color: #720800;
              }
              10% {
                color: #8e44ad;
              }
              20% {
                color: #1abc9c;
              }
              30% {
                color: #d35400;
              }
              40% {
                color: #f5dd00;
              }
              50% {
                color: #34495e;
              }
              60% {
                color: #508c70;
              }
              70% {
                color: #2980b9;
              }
              80% {
                color: #f1c40f;
              }
              90% {
                color: white;
              }
              100% {
                color: pink;
              }
            }
            @media screen and (max-width:700px){
                .title, .title h1 {
                    font-size: 34px;
                }
                .sub-title {
                    font-size: 20px;
                }
                .credits .web-dev, .credits .copyright {
                    float:none;
                    text-align:center;
                }
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height container">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
            <main>
                <div class="content">
                    <div class="title m-b-md">
                        <h1>Will Sabido Art</h1>
                    </div>

                    <div class="sub-title">
                        coming soon...ish?
                    </div>

                    <div class="links" role="navigation">
                        <a href="{{ url('//www.redbubble.com/people/WillSabido/shop') }}" target="_blank" rel="noreferrer"><i class="fas fa-images"></i>Buy Prints & Paraphernalia from RedBubble</a>
                        <a href="{{ url('//www.instagram.com/willsabido/') }}" target="_blank" rel="noreferrer"><i class="fab fa-instagram"></i>Instagram</a>
                        <a href="{{ url('//twitter.com/WillSabido') }}" target="_blank" rel="noreferrer"><i class="fab fa-twitter"></i>Twitterings</a>
                    </div>

                    <div class="links" style="display:none;">
                        <a href="{{ url('/gallery') }}">Gallery</a>
                        <a href="{{ url('/contact') }}">Contact</a>
                        <a href="{{ url('/about') }}">About</a>
                    </div>
                </div>
            </main>
        </div>
        <footer class="container clearfix">
            <div class="align-items-end credits">
                <p class="copyright">All images and site content copyright &copy; {{ now()->year }} Will Sabido. All rights reserved.</p>
                <p class="web-dev">WebDev | <a href="//webisabihosting.co.uk" title="Web Development by WebiSabi" target="_blank" rel="noreferrer">WebiSabi</a></p>
            </div>
        </footer>
        <!-- Bootstrap JQuery -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
