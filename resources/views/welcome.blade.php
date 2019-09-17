<!DOCTYPE html>
<!--[if IE 7]><html class="lt-ie10 lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if IE 8]><html class="lt-ie10 lt-ie9" lang="en"><![endif]-->
<!--[if IE 9]><html class="lt-ie10" lang="en"><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js"><!--<![endif]-->
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <title>{{$modules["MainSettings"]->siteName}}</title>
    <meta charset="utf-8" />
    <meta name="description" content="Coralix Themes">
    <meta name="author" content="Coralix Themes">
    
    <!-- Mobile Specific Metas
    ================================================== -->    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    
    <!-- Custom styles 
    ================================================== -->
    <!-- Bootstrap -->
    <link href="css/bootstrap/bootstrap.css" rel="stylesheet">
    
    <!-- Custom Stylesheet -->
    <link href="css/new-style.css" rel="stylesheet" media="screen">
    <link href="css/styles.css" rel="stylesheet" media="screen">
    
    <!-- Media Queries -->
    <link href="css/media-queries.css" rel="stylesheet" media="screen">

    <!-- Lightbox -->
    <link href="css/lightbox/lightbox.css" rel="stylesheet" media="screen">

    <!-- Font icons -->
    <link href="css/fontello.css" rel="stylesheet" >
    <!--[if IE 7]>
    <link href="css/fontello-ie7.css" rel="stylesheet" ><![endif]-->
        
    <!--[if IE 8 ]><link href="css/ie8.css" rel="stylesheet" media="screen"><![endif]-->
    <link rel="stylesheet" href="css/nivo-slider/nivo-slider.css" type="text/css" media="screen" /><!-- nivo slider -->
    <link rel="stylesheet" href="css/nivo-slider/default.css" type="text/css" media="screen" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements 
    ================================================== -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="http://university.coralixthemes.com/video/images/favicon.png">  

    <!-- Select-->
    <link rel="stylesheet" href="js/select/chosen.css">

    <!--effect bxslider-->
    <link rel="stylesheet" type="text/css" href="js/bxslider/jquery.bxslider.css" />

    <link href="http://fonts.googleapis.com/css?family=PT+Sans:regular,italic,bold,bolditalic" rel="stylesheet" type="text/css" />

    <script src="https://browser.sentry-cdn.com/4.6.6/bundle.min.js" crossorigin="anonymous"></script>

    <style>
        
    /* Стили модального окна */
    .modal-contact {
      position: fixed;
      left: 50%;
      top: 50%;
      display: none;
      -webkit-transform: translate(-50%, -50%);
          -ms-transform: translate(-50%, -50%);
              transform: translate(-50%, -50%);
      z-index: 10;
      width: 425px;
      padding: 13px 25px 25px 25px;
      background-color: #f8f7f4;
      border-radius: 15px;
      -webkit-animation: fade 0.3s both;
              animation: fade 0.3s both;
    }

    .modal-contact__close {
      position: absolute;
      width: 26px;
      height: 26px;
      display: block;
      font-size: 0;
      border: none;
      outline: none;
      background-color: transparent;
      right: 10px;
      top: 10px;
    }

    .modal-contact__close:before, .modal-contact__close:after {
      content: "";
      position: absolute;
      top: 50%;
      width: 2px;
      height: 22px;
      background-color: #353535;
    }

    .modal-contact__close:before {
      left: 50%;
      -webkit-transform: translate(-50%, -50%) rotate(45deg);
          -ms-transform: translate(-50%, -50%) rotate(45deg);
              transform: translate(-50%, -50%) rotate(45deg);
    }

    .modal-contact__close:after {
      left: 50%;
      -webkit-transform: translate(-50%, -50%) rotate(-45deg);
          -ms-transform: translate(-50%, -50%) rotate(-45deg);
              transform: translate(-50%, -50%) rotate(-45deg);
    }

    .modal-contact__text {
      margin: 0;
      padding: 0;
      margin-bottom: 18px;
      font-size: 24px;
      line-height: 30px;
      font-weight: 500;
      color: #263D5A;
    }

    .modal-contact__item {
      width: 63%;
      margin-bottom: 20px;
    }

    .modal-contact__text-field {
      margin-bottom: 15px;
    }

    .modal-contact__btn {
      text-align: right;
    }

    .modal-contact--show {
      display: block;
    }

    /* Анимация */
    @-webkit-keyframes fade {
      0% {
        opacity: 0;
        -webkit-transform: translate(-50%, -40%);
                transform: translate(-50%, -40%);
      }
      100% {
        opacity: 1;
        -webkit-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
      }
    }

    @keyframes fade {
      0% {
        opacity: 0;
        -webkit-transform: translate(-50%, -40%);
                transform: translate(-50%, -40%);
      }
      100% {
        opacity: 1;
        -webkit-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
      }
    }

    @-webkit-keyframes fade-hover {
      0% {
        opacity: 0;
        -webkit-transform: translate(0, -10px);
                transform: translate(0, -10px);
      }
      100% {
        opacity: 1;
        -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
      }
    }

    @keyframes fade-hover {
      0% {
        opacity: 0;
        -webkit-transform: translate(0, -10px);
                transform: translate(0, -10px);
      }
      100% {
        opacity: 1;
        -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
      }
    }

    #rubl {
        font-family: 'PT Sans', serif;
    }

    .who-item {
      display: none;
    }

    .who-item--active {
      display: block;
    }

    .tabs__item {
      border-bottom: none;
    }

    .tabs__item--active {
      border-bottom: 3px solid #3366FF;
    }

    @media (max-width: 767px) {
      #map-div {
        flex-wrap: wrap !important;
      }

      #map-img {
        width: 100% !important;
      }
    }

    @media (min-width: 768px) {
      .nav-main li {
        width: 80px;
        text-align: center;
      }

      .nav-main li:nth-child(4),
      .nav-main li:nth-child(5),
      .nav-main li:nth-child(6) {
        width: 110px;
        text-align: center;
      }
    }

    @media (min-width: 1200px) {
      .nav-main li {
        width: 150px;
        text-align: center;
      }

      .nav-main li:nth-child(4),
      .nav-main li:nth-child(5),
      .nav-main li:nth-child(6) {
        width: 150px;
        text-align: center;
      }
    }

    #menu-aboutus {
      border-top: 200px solid transparent;
      margin-top: -200px;
      padding: 15px; 
      -moz-background-clip: padding;
      -webkit-background-clip: padding-box;
      background-clip: padding-box;
    }

    #menu-pricing {
      border-top: 180px solid transparent;
      margin-top: -180px;
      padding: 15px; 
      -moz-background-clip: padding;
      -webkit-background-clip: padding-box;
      background-clip: padding-box;
    }

    #benefits-of-working {
      border-top: 180px solid transparent;
      margin-top: -180px;
      padding: 15px; 
      -moz-background-clip: padding;
      -webkit-background-clip: padding-box;
      background-clip: padding-box;
    }

    #webinars {
      border-top: 180px solid transparent;
      margin-top: -180px;
      padding: 15px; 
      -moz-background-clip: padding;
      -webkit-background-clip: padding-box;
      background-clip: padding-box;
    }

    @media (min-width: 1200px) {
      .who-item__desc {
        padding-left: 200px;
        width: 600px;
        padding-top: 120px;
      }
    }

    .lead-new {
      color: #263d5a;
      font-size: 16px;
      text-align: justify;
    }

    .who-item__desc {
      color:#263d5a; 
      font-size: 16px; 
      text-align: justify;
    }

    #form-box {
      height: 545px;
    }

    
    @media (min-width: 320px) and (max-width: 767px) {
      .lead-new {
        padding-left: 10px;
        padding-right: 10px;
        font-size: 14px;
      }

      .gallery .title h1 {
        font-size: 2.7em;
        margin-bottom: 20px;
      }

      .lead-ul {
        padding-left: 30px;
      }

      .onec {
        background: none;
      }

      .col-xs-6 {
        width: 49%;
      }

      .title h1 {
        font-size: 2.7em;
        line-height: 1.4em;
        font-weight: 700;
      }

      .who__title {
        text-align: center;
      }

      .who-item__desc {
        font-size: 14px; 
      }

      .pricing .title .tarif-h1 {
        margin-bottom: 20px;
      }

      .pricing_table .item {
        margin-bottom: 20px;;
      }

      .course-form-box.suscribe button {
        margin: 0 auto; 
      }

      #form-box {
        height: auto;
      }
    }

    @media (min-width: 768px) and (max-width: 991px) {
      #form-box {
        height: auto;
        margin-left: 15px;
        margin-right: 15px;
      }

      .gallery .title h1 {
        margin-bottom: 20px;
      }

      .onec {
        background: none;
      }

      section.sliderbox {
          padding-top: 50px;
      }

      #first-video {
        margin-bottom: 20px;
      }

      .title h1 {
        line-height: 1.4em;
      }

      .numeric-list {
        justify-content: center;
      }

      .pricing .title .tarif-h1 {
        margin-bottom: 20px;
      }

      .pricing_table .item {
        margin-bottom: 20px;;
      }

      .course-form-box.suscribe button {
        margin: 0 auto; 
      }

      #map-iframe {
        height: 352px;
      }
    }

    @media (min-width: 990px) and (max-width: 1199px) {
      .navbar ul.nav li:nth-child(6) {
        width: 80px;
      }
    }

    @media (min-width: 992px) and (max-width: 1199px) {
      .gallery .title h1 {
        margin-bottom: 20px;
      }

      section.sliderbox {
          padding-top: 50px;
      }

      .onec {
        background: none;
      }

      #form-box {
        height: auto;
        margin-left: 0;
        margin-right: 0;
      }

      .content_form .btn {
        font-size: 1em;
      }

      .title h1 {
        font-size: 2.7em;
        line-height: 1.4em;
        font-weight: 700;
      }

      .numeric-list {
        justify-content: center;
      }

      .pricing .title .tarif-h1 {
        margin-bottom: 20px;
      }

      .pricing_table .item {
        margin-bottom: 20px;;
      }

      #map-iframe {
        height: 350px;
      }

      .col-md-3 {
        width: 26%;
      }

      #first-video {
        width: 100%;
        margin-bottom: 20px;
      }

      #form-box {
        width: 96%;
        margin-left: 15px;
      }
    }

    @media (min-width: 1200px) {
      #first-button {
        margin-top: 60px;
      }

      #tarif-h1 {
        margin-bottom: 25px;
      }

      .pricing_table {
        min-height: 500px;
      }
    }
    </style> 
</head>


<body>

    <!--Header-->
    <header>

        <!--Top bar-->
        <section class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 sb">
                    <h1><a title="Home" href="index.html">1C школа</a></h1>
                    <a href="tel:{{ $modules["MainSettings"]->phone }}" title="Телефон" class="btn"><i class="icon-phone-1"></i> {{$modules["MainSettings"]->phone}}</a>
                    </div>
                </div>
            </div>
        </section>
        <!--End Top bar-->
        

        <!--Menu bar-->
        <nav class="navbar navbar-default navbar-inverse navbar-static-top" role="navigation">
            <div class="navbar-inner"> 
                <div class="container mn">                    
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>                            
                    </div>                 
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav nav-main">
                            <li class="active"><a href="#menu-goal">Главная</a></li>
                            <!--<li><a href="index.html#menu-goal">Цель</a></li>-->
                            <li><a href="#menu-aboutus">О нас</a></li>
                            <li><a href="#menu-pricing">Тарифы</a></li>
                            <li><a href="#benefits-of-working">Преимущества</a></li>
                            <li><a href="#webinars">Вебинары</a></li>
                            <li><a href="#menu-contact">Контакты</a></li>
                        </ul>
                        <ul class="nav navbar-nav pull-right">
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle social_button" data-toggle="dropdown">Социальные сети<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="https://www.facebook.com/coralixthemespage" class="external"><i class="icon-facebook-1"></i>Facebook</a></li>
                                    <li><a href="https://twitter.com/coralixthemes" class="external"><i class="icon-twitter-1"></i>Twitter</a></li>
                                    <li><a href="index.html#" class="external"><i class="icon-googleplus"></i>Google +</a></li>
                                    <li><a href="index.html#" class="external"><i class="icon-flickr-circled"></i>Flickr</a></li>
                                    <li><a href="index.html#" class="external"><i class="icon-youtube"></i>Youtube</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </nav>    
    </header>
    <!--Header-->

    <!-- gallery -->
    <section class="gallery generic-section first" id="menu-goal">
      <div class="onec">
        <div class="container">
        
            <!--title of the section-->
            <div class="row title">
                <h1>{{$goal["Goal"]->title}}</h1>
                {!!$goal["Goal"]->description!!}
            </div>
            <!--end title of the section-->
            

        </div>
      </div>
        
    </section>
    <!-- end gallery -->

    <!-- slider box-->
    <section class="sliderbox" id="menu-homepage">
        <div class="container">
            <div class="row">            
                <!-- slider -->
                <div class="col-md-8" id="first-video">
                        <div class="video">
                            <iframe width="760" height="550" src="http://www.youtube.com/embed/sQhY_l_J9rs" allowfullscreen></iframe>
                        </div>
                </div>
                <!-- end slider -->
                
                <!-- main form -->
                <div class="col-md-4 course-form-box" id="form-box">
                    <h3>Посмотреть первый урок бесплатно</h3>
                    <p></p>
                    <form id="curse-form" class="nm" action="" method="post" accept-charset="utf-8">
                        <div  id="loading" style="display: none" class='alert'>
                            <a class='close' data-dismiss='alert'>×</a>
                            Loading
                        </div>
                        <div id="response"></div>
                        
                        <div class="row content_form">
                                <input type="text" name="Тип" value="Посмотреть первый урок бесплатно" hidden>
                                <input class="input-large" type="text" required placeholder="Имя" name="name" id="name" />


                                <input class="input-large" type="text" required placeholder="Фамилия" name="surname"  id="surname" />


                                <input class="input-large" type="email" required placeholder="*Email" name="email" id="email"/>


                                <input class="input-large" type="text" required placeholder="Телефон" name="phone" id="phone"/>


                                <select class="input-large  chzn-select" name="city" id="city">
                                    <option>Укажите ваш город</option>
                                    <option>Иркутск</option>
                                    <option>Красноярск</option>
                                    <option>Чита</option>
                                    <option>Другой город</option>
                                </select>

                                <button class="btn btn-large btn-primary" id="first-button" type="submit"><i class="icon-edit"></i>Получить первый урок</button>
                             
                        </div>                                      
                    </form>
                </div>
                <!-- end main form -->                    
            </div>
        </div>
    </section>
    <!-- end slider box--> 

    <!-- features -->
    <section class="features generic-section" >
        <div class="container">
        
            <!--title of the section-->
            <div class="row title">
                <h1>Чем занимается программист 1С</h1>
                <!--<h3>Designed to get the highest rate of interaction</h3>-->
            </div>
            <!--end title of the section-->
            
            <div class="row">
                @foreach ($abcs as $abc)
                <div class="col-md-4 col-xs-6 fea">
                    <img src="{{ $abc->image }}" alt="image study at your  time">
                    <h4>{{ $abc->title }}</h4>
                    <!--<p>Lorem ipsum dolor sit ametiral bro constur adipisicing elit, sedAmalesuada at aliquet a, molestie eget eros. Donec felis nisl.</p>-->
                </div>
                @endforeach
            </div>
        
        </div>
    </section>
    <!-- end features -->

    <!-- map -->
    <section class="mapi generic-section" id="benefits-of-working">
        <div class="container">
        <!--title of the section-->
        <div class="row title">
            <h1 style="color: #263d5a;">{{ $profession['Profession']->title }}</h1>
            <h2 style="color: #263d5a;text-align: center; margin-top: 40px;">Плюсы:</h2>
            <!--<h3 style="color: #263d5a; font-style: normal;line-height: 1.4em;"></h3>-->
            <!--<div style="text-align: center;">
              <img src="img/thumb-up.png" alt="Плюсы" style="width: auto;">  
            </div>-->
            
            <div id="map-div" style="text-align: center; font-style: italic; font-weight: normal;  font-size: 2em; line-height: 0.9em; margin: 1% 0; color: #aaaaab; display: flex;">
                {!! $profession['Profession']->pluses !!}
                <img id="map-img" src="img/map-infographic.png" alt="image" style="width: 70%;"> 
            </div>
        </div>
        <!--end title of the section-->

        <!--<div class="row">
            <div class="col-md-12">
                <img src="img/map-infographic.png" alt="image"> 
            </div>
        </div>-->
        </div>
    </section>
    <!-- end map -->    

    <!-- information -->
    <section class="information generic-section" id="menu-aboutus">
        <div class="container">
        <div class="row">
            <div class="col-md-7">
                <img src="img/info-image.png" alt="image">
            </div>
            <div class="col-md-5">
                <h1>{{ $about["About"]->title }}</h1>
                {!! $about["About"]->description !!}
                <div class="accordion" id="accordion2">
                    @foreach($achievements as $k => $achievement)
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="index.html#collapse{{ $k }}">
                                    {{ $achievement->name }} <i class="icon-plus"></i>
                                </a>
                            </div>
                            <div id="collapse{{ $k }}" class="accordion-body collapse ">
                                <div class="accordion-inner">
                                    <p style="color:#263d5a">
                                        {{ $achievement->description }}
                                     </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- end information -->

    <section class="who" id="who" style="background: url(../img/bg_section1.png) repeat transparent;">
    <div class="who__wrapper container">
        <div class="who__header header">
            <h2 class="who__title h h--2">Курс идеально подойдет</h2>
                    </div>

        <ul class="who__paginator tabs js-paginator">
          @foreach ($targets as $j => $target)
                            <li class="tabs__item @if ($j == 0)tabs__item--active @endif" data-tab="{{ $j }}" aria-hidden="true">{{ $target->title }}</li>
          @endforeach    
                    </ul>

        <div class="who__list js-slider" >
          @foreach ($targets as $j => $target)
                            <section class="who-item @if ($j == 0)who-item--active @endif" data-tab="{{ $j }}">
                    <p class="who-item__desc">{{ $target->text }}</p>
                    <img class="who-item__photo lazy" src="{{ $target->image }}" alt="{{ $target->title }}">
                </section>
          @endforeach

          <div class="container">
            <div class="row">
                <div class="col-md-12 course-form-box" class="course-form">
                    <h3>ЗАПИСАТЬСЯ НА КУРСЫ</h3>
                    <!--<p>The Best way to help you reach your goalsDonec id elit non mi porta gravida at eget metus. </p><br>
                    <p>
                        Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuad.
                    </p>-->
                    <form id="contact-form-new" class="nm" action="" method="post">

                        <div class="content_form">
                            <input type="text" name="Тип" value="Записаться на курсы" hidden>
                            <input class="input-large" type="text" required placeholder="Имя" name="name" id="course-name-new" />


                            <input class="input-large" type="email" required placeholder="*Email" name="email" id="course-email-new" />


                            <input class="text-large" type="tel" required placeholder="Телефон" name="phone" id="course-tel-new"></input>


                            <button class="btn btn-large btn-primary" type="submit"><i class="icon-edit"></i>Отправить</button>

                        </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
        
</section>
    
        

    <section class="learning-process" id="learning-process" style="background-color: white;">
    <div class="learning-process__wrapper container">
        <div class="learning-process__header header">
            <h2 class="learning-process__title h h--2">{{ $format['Format']->title }}</h2>
        </div>

        {!! $format['Format']->description !!}
    </div>
</section>

    <!-- courses -->
    <section class="courses generic-section" id="webinars">
        <div class="container">

        <!--title of the section-->
        <div class="row title">
            <h1>Записи вебинаров</h1>
            <!--<h3>Some screenshots to catch the eye of your customers</h3>-->
        </div>
        <!--end title of the section-->

        <div class="row">
            <ul class="grid cs-style-5">
                @foreach($videos as $video)
                <li class="col-md-4">
                    <video width="300" height="400" src="{{ $video->video }}" poster="{{ $video->image }}" controls="controls"></video>
                    <p>{{ $video->description }}</p>
                </li>
                @endforeach
            </ul>
        </div>

        
        </div>
    </section>
    <!-- end courses -->   

    <!-- pricing tables -->
    <section class="pricing generic-section">
        <div class="container" id="menu-pricing">
        
            <!--title of the section-->
            <div class="row title">
                <h1 class="tarif-h1" id="tarif-h1">Стоимость обучения</h1>
                <!--<h3>Доступно 2 вида тарифов:</h3>-->
            </div>
            <!--end title of the section-->
            
            <!-- tables -->
            
            <div class="pricing_table">
                <div class="row">
                    @foreach($prices as $m => $price)
                    <div class="col-lg-3 col-xs-12 item @if($m == 0)col-lg-offset-3 @endif">
                        <div class="header">
                            <h3>{{ $price->title }}</h3>
                            <!--<h5>Great to take the first step</h5>-->
                        </div>
                        <h4 class="price">{{ $price->price }} <span id="rubl">&#8399;</span></h4>
                        {!! $price->description !!}
                    </div>
                    @endforeach
                </div>
            </div>
            
            <!-- end tables -->
            
        </div>
    </section>
    <!-- end pricing tables --> 

    <!-- contact -->
    <section class="contact generic-section">
        <div class="content_map">
            <!-- <div id="map"></div> -->
            <div id="map">
            {!! $modules["MainSettings"]->mapSRC !!}
            </div>
        </div>

        <div class="container" id="menu-contact">
            <div class="row">
                <div class="col-md-4 course-form-box" class="course-form">
                    <h3>ЗАПИСАТЬСЯ НА КУРСЫ</h3>
                    <!--<p>The Best way to help you reach your goalsDonec id elit non mi porta gravida at eget metus. </p><br>
                    <p>
                        Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuad.
                    </p>-->
                    <form id="contact-form" class="nm" action="http://university.coralixthemes.com/video/index_submit" method="post">

                        <div class="content_form">
                            <input type="text" name="Тип" value="Записаться на курсы" hidden>
                            <input class="input-large" type="text" required placeholder="Имя" name="name" id="course-name" />


                            <input class="input-large" type="email" required placeholder="*Email" name="email" id="course-email" />


                            <input class="text-large" type="tel" required placeholder="Телефон" name="phone" id="course-tel"></input>


                            <button class="btn btn-large btn-primary" type="submit"><i class="icon-edit"></i>Отправить</button>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
    <!-- end contact -->        
    
    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row">
                     
                <div class="col-md-3 col-md-offset-3">
                    <h4 class="footer-title"><i class="icon-mail"></i> НАШИ КОНТАКТЫ</h4>
                    <ul class="unstyled contact-info">
                        <li><i class="icon-home-outline"></i> Адрес: {{$modules["MainSettings"]->address}}</li>
                        <li><i class="icon-desktop-1"></i> e-mail: <a href=""></a>{{$modules["MainSettings"]->email}} </li>
                        <li><i class="icon-phone-1"></i> Телефон: <a href="tel:{{ $modules["MainSettings"]->phone }}">{{$modules["MainSettings"]->phone}}</a></li>
                        <!--<li><i class="icon-mobile"></i> Mobile: 5454-6226-26</li>-->
                    </ul>
                </div>
                   
                <div class="col-md-3">
                    <h4 class="footer-title"><i class="icon-article-alt"></i> ПОДПИСАТЬСЯ НА РАССЫЛКУ</h4>
                    <!--<p>Make sure you dont miss interesting happenings by joining our newsletter program.</p>-->
                    <div class="suscribe course-form-box">
                        <form id="news" class="nm" action="" method="post">
                            <input type="text" name="Тип" value="Подписаться на рассылку" hidden>
                            <div class="row content_form">


                                <input class="input-large" type="email" required placeholder="*Email" name="email" id="newsmail" />


                                <button class="btn btn-large btn-primary" type="submit"><i class="icon-edit"></i>Подписаться</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <ul class="unstyled">
                <li class="tooltip_hover" title="facebook" data-placement="top"  data-toggle="tooltip"><a  href="index.html#" ><i class="icon-facebook"></i></a></li>
                <li class="tooltip_hover"  title="twitter" data-placement="top"  data-toggle="tooltip"><a href="index.html#"><i class="icon-twitter"></i></a></li>
                <li class="tooltip_hover"  title="vimeo" data-placement="top"  data-toggle="tooltip"><a href="index.html#"><i class="icon-vimeo"></i></a></li>
                <li class="tooltip_hover" title="skype" data-placement="top"  data-toggle="tooltip"><a href="index.html#"><i class="icon-skype-circled"></i></a></li>
            </ul>
            <h6>Разработка и поддержка: <a href="http://www.in-site.ru/" target="_blank">In-site.ru</a></h6>
        </div>
    </footer>
    <!-- end footer -->

    <!-- modal window -->
    
       <div class="modal-contact">
          <button class="modal-contact__close" type="button">Назад</button>
          <p class="modal-contact__text modal-contact__text--first">Сообщение успешно отправлено!</p>
          <p class="modal-contact__text modal-contact__text--second">Мы обязательно Вам ответим!</p>
        </div> 
    
    

    <!-- end modal window -->    

    
    <a href="index.html#" class="scrollup"><i class="icon-up-open"></i></a>      
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- ======================= JQuery libs =========================== -->
    
    <!-- jQuery -->
    <script src="js/jquery-1.7.1.js"></script>>

    <!-- Bootstrap-->
    <script src="js/bootstrap/bootstrap.js"></script>

    <!-- Nivo slider -->
    <script type="text/javascript" src="js/nivo-slider/jquery.nivo.slider.js"></script>

    <!--Scroll To-->         
    <script src="js/nav/jquery.scrollTo.js"></script>
    <script src="js/nav/jquery.nav.js"></script>

    <!--Lightbox-->
    <script src="js/lightbox.js"></script> 

    <!--scroll-->
    <script src="js/select/chosen.jquery.js" type="text/javascript"></script>

    <!--bxslider-->
    <script src="js/bxslider/jquery.bxslider.js" type="text/javascript"></script>

    <!-- Video Responsive-->
    <script src="js/jquery.fitvids.min.js" type="text/javascript"></script>

    <!--effect hover-->
    <script src="js/effect_hover/modernizr.custom.js"></script>
    <script src="js/effect_hover/toucheffects.js"></script>

    <!--Custom Template Javascript-->
    <script type="text/javascript" src="js/script.js"></script>
    

<!-- ======================= End JQuery libs =========================== -->

    <script type="text/javascript">
    var modalContact = document.querySelector('.modal-contact');
    var closeContact = modalContact.querySelector('.modal-contact__close');
    

    if (modalContact) {

      closeContact.addEventListener('click', function (event) {
        event.preventDefault();
        modalContact.classList.remove('modal-contact--show');
      });

      window.addEventListener('keydown', function (e) {
        if (e.keyCode === 27) {
          if (modalContact.classList.contains('modal-contact--show')) {
            modalContact.classList.remove('modal-contact--show');
            overlay.classList.remove('overlay--show');
          }
        }
      });
      };    
        
			var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

			$("#curse-form").submit(function(e){
				e.preventDefault();
				
				$.ajax({
					/* the route pointing to the post function */
					url: '/send',
					type: 'POST',
					/* send the csrf-token and the input to the controller */
					data: {
						_token: CSRF_TOKEN, 
						name:$("#name").val(),
						surname:$("#surname").val(),
						email:$("#email").val(),
						phone:$("#phone").val(),
						city:$("#city").val()
					},
					dataType: 'JSON',
					/* remind that 'data' is the response of the AjaxController */
								
					success: function (data) {
            			console.log(data.message);
                  $('.modal-contact').addClass('modal-contact--show');
                  $('#name').val('');
                  $('#surname').val('');
                  $('#email').val('');
                  $('#phone').val('');
                  $('#city').val('');
					}, 

          error: function(data){
              console.log(data.message);
              $('.modal-contact__text--first').text("Ошибка!");
              $('.modal-contact__text--second').text("Пожалуйста, попробуйте отправить еще раз");
              $('.modal-contact').addClass('modal-contact--show');
              $('#name').val('');
              $('#surname').val('');
              $('#email').val('');
              $('#phone').val('');
              $('#city').val('');
          }
				});
			});

      $("#news").submit(function(e){
        e.preventDefault();
        
        $.ajax({
          /* the route pointing to the post function */
          url: '/newssend',
          type: 'POST',
          /* send the csrf-token and the input to the controller */
          data: {
            _token: CSRF_TOKEN, 
            email:$("#newsmail").val()
          },
          dataType: 'JSON',
          /* remind that 'data' is the response of the AjaxController */
                
          success: function (data) {
                  console.log(data.message);
                  $('.modal-contact').addClass('modal-contact--show');
                  $('#newsmail').val('');
          },
          error: function(data){
              console.log(data.message);
              $('.modal-contact__text--first').text("Ошибка!");
              $('.modal-contact__text--second').text("Пожалуйста, попробуйте отправить еще раз");
              $('.modal-contact').addClass('modal-contact--show');
              $('#newsmail').val('');
          }
        });
      });

      $("#contact-form").submit(function(e){
        e.preventDefault();
        
        $.ajax({
          /* the route pointing to the post function */
          url: '/contactsend',
          type: 'POST',
          /* send the csrf-token and the input to the controller */
          data: {
            _token: CSRF_TOKEN,
            name:$("#course-name").val(),
            email:$("#course-email").val(),
            phone:$("#course-tel").val()   
          },
          dataType: 'JSON',
          /* remind that 'data' is the response of the AjaxController */
                
          success: function (data) {
                  console.log(data.message);
                  $('.modal-contact').addClass('modal-contact--show');
                  $("#course-name").val('');
                  $("#course-email").val('');
                  $("#course-tel").val('');
          },
          error: function(data){
              console.log(data.message);
              $('.modal-contact__text--first').text("Ошибка!");
              $('.modal-contact__text--second').text("Пожалуйста, попробуйте отправить еще раз");
              $('.modal-contact').addClass('modal-contact--show');
              $("#course-name").val('');
              $("#course-email").val('');
              $("#course-tel").val('');
          }
        });
      });

      $("#contact-form-new").submit(function(e){
        e.preventDefault();
        
        $.ajax({
          /* the route pointing to the post function */
          url: '/contactsend',
          type: 'POST',
          /* send the csrf-token and the input to the controller */
          data: {
            _token: CSRF_TOKEN,
            name:$("#course-name-new").val(),
            email:$("#course-email-new").val(),
            phone:$("#course-tel-new").val()   
          },
          dataType: 'JSON',
          /* remind that 'data' is the response of the AjaxController */
                
          success: function (data) {
                  console.log(data.message);
                  $('.modal-contact').addClass('modal-contact--show');
                  $("#course-name-new").val('');
                  $("#course-email-new").val('');
                  $("#course-tel-new").val('');
          },
          error: function(data){
              console.log(data.message);
              $('.modal-contact__text--first').text("Ошибка!");
              $('.modal-contact__text--second').text("Пожалуйста, попробуйте отправить еще раз");
              $('.modal-contact').addClass('modal-contact--show');
              $("#course-name-new").val('');
              $("#course-email-new").val('');
              $("#course-tel-new").val('');
          }
        });
      });
    </script>
    

    <script>
      $(function() {
        var tab = $('.tabs__item');
        tab.on('click', function (e) {
          $('.who-item').removeClass('who-item--active');
          $('.tabs__item').removeClass('tabs__item--active');
          $('.who-item[data-tab='+$(this).attr('data-tab')+']')
          .toggleClass('who-item--active');
          $(this).toggleClass('tabs__item--active');
        })
      });
      
    </script>
</body>
</html>
