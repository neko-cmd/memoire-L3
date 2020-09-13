@extends('layouts.default')

@section('title', 'boutique')

@section('content')
<link rel="stylesheet" href="css/search.css">
<link rel="stylesheet" href="css/form.css">
<div class="container">
  <form action="{{ route('search')}}" method="GET" class="search-form">
      <i class="fa fa-search search-icon"></i>
      <input type="text" name="query" id="query" value="{{ request()->input('query') }}" class="search-box" placeholder="Rechercher un produit" required>
  </form>
</div>

<body>
      <div class='parent'>
      <div class='slider'>
        <button type="button" id='right' class='right' name="button">
    
            <svg version="1.1" id="Capa_1" width='40px' height='40px ' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
            <g>
            <path style='fill: #9d9d9d;' d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
              c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z
              "/>
            </g>
    
            </svg>
    
            </button>
        <button type="button" id='left' class='left' name="button">
            <svg version="1.1" id="Capa_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
            <g>
            <path style='fill: #9d9d9d;' d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
              c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"/>
            </g>
            </svg>
            </button>
        <svg id='svg2' class='up2' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <circle id='circle1' class='circle1 steap' cx="45px" cy="53%" r="20"  />
          <circle id='circle2' class='circle2 steap' cx="45px" cy="53%" r="100"  />
          <circle id='circle3' class='circle3 steap' cx="45px" cy="53%" r="180"  />
          <circle id='circle4' class='circle4 steap' cx="45px" cy="53%" r="260"  />
          <circle id='circle5' class='circle5 steap' cx="45px" cy="53%" r="340"  />
          <circle id='circle6' class='circle6 steap' cx="45px" cy="53%" r="420"  />
          <circle id='circle7' class='circle7 steap' cx="45px" cy="53%" r="500"  />
          <circle id='circle8' class='circle8 steap' cx="45px" cy="53%" r="580"  />
          <circle id='circle9' class='circle9 steap' cx="45px" cy="53%" r="660"  />
        </svg>
        <svg id='svg1' class='up2' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <circle id='circle10' class='circle10 steap' cx="1153px" cy="53%" r="20"  />
          <circle id='circle11' class='circle11 steap' cx="1153px" cy="53%" r="100"  />
          <circle id='circle12' class='circle12 steap' cx="1153px" cy="53%" r="180"  />
          <circle id='circle13' class='circle13 steap' cx="1153px" cy="53%" r="260"  />
          <circle id='circle14' class='circle14 steap' cx="1153px" cy="53%" r="340"  />
          <circle id='circle15' class='circle15 steap' cx="1153px" cy="53%" r="420"  />
          <circle id='circle16' class='circle16 steap' cx="1153px" cy="53%" r="500"  />
          <circle id='circle17' class='circle17 steap' cx="1153px" cy="53%" r="580"  />
          <circle id='circle18' class='circle18 steap' cx="1153px" cy="53%" r="660"  />
        </svg>
        
          <div id='slide1' class='slide1 up1'>Bienvenue chez <br> Kenly shop</div>
          <div id='slide2' class='slide2'>Voir nos prochaines <br> formations</div>
          <div id='slide3' class='slide3'>Découvrez les<br> meilleures offres</div>
          <div id='slide4' class='slide4'>Retrouvez les <br>dernières actualités</div>
        
      </div>
      </div>
      
  </body>
    <div class="container">

        <h1 class="heading">Retrouvez les dernières actualités smartphones, ordinateurs, accesoires, mais egalement nos guides d'achat pour vous aider dans votre choix selons vos besoins.</h1>
       <div class="image">
          <img src="img/logo2.png" alt="" />
       </div>
        
        <div class="gallery">
            <figure class="snip1401">
              <img src="img/1.jpg" alt="sample67" />
              <figcaption>
                <h3>Kenly Shop</h3>
                <p>Découvrez les meilleures offres et voir nos prochaines formations.</p>
              </figcaption><i class="ion-ios-home-outline"></i>
              <a href="#"></a>
            </figure>
          
            <figure class="snip1401"><img src="img/6.jpg" alt="sample87" />
              <figcaption>
                <h3>Contactez Nous</h3>
                <p>Découvrez nos services pour pouvoire obtenir le meilleure. </p>
              </figcaption><i class="ion-ios-personadd-outline"></i>
              <a href="#"></a>
            </figure>
            <figure class="snip1401"><img src="img/8.jpg"alt="sample87" />
              <figcaption>
                <h3>A Propos</h3>
                <p> kenly shop la boutique en ligne où vous pouvez obtenir tous ce que vous cherchez</p>
              </figcaption><i class="ion-ios-briefcase-outline"></i>
              <a href="#"></a>
            </figure>
            <figure class="snip1401">
              <img src="img/3.jpg" alt="sample67" />
              <figcaption>
                <h3>Nos Produits</h3>
                <p> Decouvrez le meilleure de tout chez Kenly Shop</p>
              </figcaption><i class="ion-ios-cart-outline"></i>
              <a href="#"></a>
            </figure>
            <figure class="snip1401">
              <img src="img/5.jpg" alt="sample67" />
              <figcaption>
                <h3>Pris et satisfaction</h3>
                <p>Nous vous offrons la garantie du prix et de la satisfaction .</p>
              </figcaption><i class="ion-ios-pricetags-outline"></i>
              <a href="#"></a>
            </figure>
            <figure class="snip1401">
              <img src="img/2.jpg" alt="sample67" />
              <figcaption>
                <h3>Achats en ligne sécurisés </h3>
                <p>L'achat sur un site est garantit au client.</p>
              </figcaption><i class="ion-ios-checkmark-outline"></i>
              <a href="#"></a>
            </figure>

        </div>
    </div>

  <style>
      .search-form {
        position: absolute;
        margin-left:15%;
      }
      
      .search-icon {
        color: gray;
        position: absolute;
        top: 12px;
        left: 12px;
      }
      
      .search-box {
        padding: 10px 12px 10px 34px;
        width: 800px;
        max-width: 100%;
        font-size: 14px;
      }
  </style>
   <style>
       @import url('https://fonts.googleapis.com/css?family=Heebo:800');
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }
        .parent {
        width: 1200px;
        height: 600px;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto auto;
        overflow: hidden;
        position: relative;
        border-radius: 16px;
        -webkit-box-shadow: 0 0 88px 5px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 0 0 88px 5px rgba(0, 0, 0, 0.75);
        box-shadow: 0 0 88px 5px rgba(0, 0, 0, 0.75);
        margin-top:7%;
        }
        svg {
        position: absolute;
        z-index: 1;
        width: 1200px;
        height: 600px;
        }
        button {
        position: absolute;
        z-index: 50;
        width: 40px;
        overflow: hidden;
        height: 40px;
        border: none;
        border-radius: 50%;
        background: #fff;
        cursor: pointer;
        -webkit-box-shadow: 0 0 88px 5px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 0 0 88px 5px rgba(0, 0, 0, 0.75);
        box-shadow: 0 0 88px 5px rgba(0, 0, 0, 0.75);
        }
        button:focus {
        outline-width: 0;
        }
        circle {
        stroke: #fff;
        fill: none;
        transition: 0.3s;
        }
        #svg1 circle {
        transition-timing-function: linear;
        }
        #svg2 circle {
        transition-timing-function: linear;

        }
        #Capa_1 {
        position: absolute;
        width: 16px;
        height: 16px;
        transform: translate(-7px, -8px);
        }
        #Capa_2 {
        position: absolute;
        width: 16px;
        height: 16px;
        transform: translate(-9px, -8px);
        }
        .right {
        margin-left: 1140px;
        margin-top: 300px;
        border: 1px solid #849494;
        background-color: transparent;
        transition: 0.5s;
        }
        .right:hover {
        background-color: #fff;
        }
        .left {
        margin-left: 0.5%;
        margin-top: 300px;
        border: 1px solid #849494;
        background-color: transparent;
        transition: 0.5s;
        }
        .left:hover {
        background-color: #fff;
        }
        .circle1 {
        transition-delay: 0.05s;
        }
        .circle2 {
        transition-delay: 0.1s;
        }
        .circle3 {
        transition-delay: 0.15s;
        }
        .circle4 {
        transition-delay: 0.2s;
        }
        .circle5 {
        transition-delay: 0.25s;
        }
        .circle6 {
        transition-delay: 0.3s;
        }
        .circle7 {
        transition-delay: 0.35s;
        }
        .circle8 {
        transition-delay: 0.4s;
        }
        .circle9 {
        transition-delay: 0.45s;
        }
        .circle10 {
        transition-delay: 0.05s;
        }
        .circle11 {
        transition-delay: 0.1s;
        }
        .circle12 {
        transition-delay: 0.15s;
        }
        .circle13 {
        transition-delay: 0.2s;
        }
        .circle14 {
        transition-delay: 0.25s;
        }
        .circle15 {
        transition-delay: 0.3s;
        }
        .circle16 {
        transition-delay: 0.35s;
        }
        .circle17 {
        transition-delay: 0.4s;
        }
        .circle18 {
        transition-delay: 0.45s;
        }
        .slide1 {
        background-image: url('img/9.jpg');
        }
        .slide2 {
        background-image: url('img/10.jpg');
        }
        .slide3 {
        background-image: url('img/11.jpg');
        }
        .slide4 {
        background-image: url('img/12.jpg');
        }
        .slider {
        position: absolute;
        width: 400%;
        height: 100%;
        background: #000;
        display: inline-flex;
        overflow: hidden;
        }
        .slide1, .slide2, .slide3, .slide4 {
        position: absolute;
        background-position: center;
        background-size: cover;
        color: rgb(223, 217, 217);
        font-size: 30px;
        padding-top: 350px;
        font-weight: 500;
        font-family:'Montserrat:400,700', sans-serif ;
        width: 25%;
        height: 100%;
        z-index: 10;
        transition: 1.4s;
        text-align: left;
        
        }
        .tran {
        transform: scale(1.3);
        }
        .up1 {
        z-index: 20;
        }
        .up2 {
        z-index: 40;
        }
        .steap {
        stroke-width: 0;
        }
        .streak {
        stroke-width: 82px;
        }
        @media (max-width: 700px) {
        .parent {
            margin-left: 1%;
        }
        }

   </style>
   <style>
      @import url(https://fonts.googleapis.com/css?family=Playfair+Display:400,800);
      @import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);

      .gallery {
        
        display: flex;
        flex-wrap: wrap;
        /* Compensate for excess margin on outer gallery flex items */
        margin: -1rem -1rem;
        margin-left:7%;
        margin-bottom:5%;
      }
      .heading{
        text-align: center;
        margin-top:7%;
        margin-bottom:3%;
        font-size:25px;
        
      }
      .image img{
        margin-left: 440px;
        margin-bottom: 25px;
        width: 250px;
      }
      .snip1401 {
        font-family: 'Playfair Display', Arial, sans-serif;
        position: relative;
        overflow: hidden;
        margin: 10px;
        min-width: 230px;
        max-width: 300px;
        max-height: 220px;
        width: 100%;
        color: #000000;
        text-align: right;
        font-size: 16px;
        background-color: #000000;
      }
      .snip1401 * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-transition: all 0.35s ease;
        transition: all 0.35s ease;
      }
      .snip1401 img {
        max-width: 100%;
        backface-visibility: hidden;
      }
      .snip1401 figcaption {
        position: absolute;
        top: 0;
        bottom: 0;
        right: 0;
        z-index: 1;
        opacity: 1;
        padding: 30px 0 30px 10px;
        background-color: #ffffff;
        width: 40%;
        -webkit-transform: translateX(150%);
        transform: translateX(150%);
      }
      .snip1401 figcaption:before {
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        right: 100%;
        content: '';
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 120px 120px 120px 0;
        border-color: transparent #ffffff transparent transparent;
      }
      .snip1401:after {
        position: absolute;
        bottom: 50%;
        right: 40%;
        content: '';
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 120px 120px 0 120px;
        border-color: rgba(255, 255, 255, 0.5) transparent transparent transparent;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: all 0.35s ease;
        transition: all 0.35s ease;
      }
      .snip1401 h3,
      .snip1401 p {
        line-height: 1.5em;
        -webkit-transform: translateX(-30px);
        transform: translateX(-30px);
        margin: 0;
      }
      .snip1401 h3 {
        margin: 0 0 5px;
        line-height: 1.1em;
        font-weight: 900;
        font-size: 1.4em;
        opacity: 0.75;
      }
      .snip1401 p {
        font-size: 0.8em;
      }
      .snip1401 i {
        position: absolute;
        bottom: 0;
        left: 0;
        padding: 20px 30px;
        font-size: 44px;
        color: #ffffff;
        opacity: 0;
      }
      .snip1401 a {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 1;
      }
      .snip1401:hover img,
      .snip1401.hover img {
        zoom: 1;
        filter: alpha(opacity=50);
        -webkit-opacity: 0.5;
        opacity: 0.5;
      }
      .snip1401:hover:after,
      .snip1401.hover:after,
      .snip1401:hover figcaption,
      .snip1401.hover figcaption,
      .snip1401:hover i,
      .snip1401.hover i {
        -webkit-transform: translateX(0);
        transform: translateX(0);
        opacity: 1;
      }
   </style>
   <script>
       var curpage = 1;
        var sliding = false;
        var click = true;
        var left = document.getElementById("left");
        var right = document.getElementById("right");
        var pagePrefix = "slide";
        var pageShift = 500;
        var transitionPrefix = "circle";
        var svg = true;

        function leftSlide() {
            if (click) {
                if (curpage == 1) curpage = 5;
                console.log("woek");
                sliding = true;
                curpage--;
                svg = true;
                click = false;
                for (k = 1; k <= 4; k++) {
                    var a1 = document.getElementById(pagePrefix + k);
                    a1.className += " tran";
                }
                setTimeout(() => {
                    move();
                }, 200);
                setTimeout(() => {
                    for (k = 1; k <= 4; k++) {
                        var a1 = document.getElementById(pagePrefix + k);
                        a1.classList.remove("tran");
                    }
                }, 1400);
            }
        }

        function rightSlide() {
            if (click) {
                if (curpage == 4) curpage = 0;
                console.log("woek");
                sliding = true;
                curpage++;
                svg = false;
                click = false;
                for (k = 1; k <= 4; k++) {
                    var a1 = document.getElementById(pagePrefix + k);
                    a1.className += " tran";
                }
                setTimeout(() => {
                    move();
                }, 200);
                setTimeout(() => {
                    for (k = 1; k <= 4; k++) {
                        var a1 = document.getElementById(pagePrefix + k);
                        a1.classList.remove("tran");
                    }
                }, 1400);
            }
        }

        function move() {
            if (sliding) {
                sliding = false;
                if (svg) {
                    for (j = 1; j <= 9; j++) {
                        var c = document.getElementById(transitionPrefix + j);
                        c.classList.remove("steap");
                        c.setAttribute("class", transitionPrefix + j + " streak");
                        console.log("streak");
                    }
                } else {
                    for (j = 10; j <= 18; j++) {
                        var c = document.getElementById(transitionPrefix + j);
                        c.classList.remove("steap");
                        c.setAttribute("class", transitionPrefix + j + " streak");
                        console.log("streak");
                    }
                }
                setTimeout(() => {
                    for (i = 1; i <= 4; i++) {
                        if (i == curpage) {
                            var a = document.getElementById(pagePrefix + i);
                            a.className += " up1";
                        } else {
                            var b = document.getElementById(pagePrefix + i);
                            b.classList.remove("up1");
                        }
                    }
                    sliding = true;
                }, 600);
                setTimeout(() => {
                    click = true;
                }, 1700);

                setTimeout(() => {
                    if (svg) {
                        for (j = 1; j <= 9; j++) {
                            var c = document.getElementById(transitionPrefix + j);
                            c.classList.remove("streak");
                            c.setAttribute("class", transitionPrefix + j + " steap");
                        }
                    } else {
                        for (j = 10; j <= 18; j++) {
                            var c = document.getElementById(transitionPrefix + j);
                            c.classList.remove("streak");
                            c.setAttribute("class", transitionPrefix + j + " steap");
                        }
                        sliding = true;
                    }
                }, 850);
                setTimeout(() => {
                    click = true;
                }, 1700);
            }
        }

        left.onmousedown = () => {
            leftSlide();
        };

        right.onmousedown = () => {
            rightSlide();
        };

        document.onkeydown = e => {
            if (e.keyCode == 37) {
                leftSlide();
            } else if (e.keyCode == 39) {
                rightSlide();
            }
        };
        

        //for codepen header
        // setTimeout(() => {
        // 	rightSlide();
        // }, 500);

   </script>
   <script>
    
    $(".hover").mouseleave(
      function () {
        $(this).removeClass("hover");
      }
    );

   </script>
   @endsection