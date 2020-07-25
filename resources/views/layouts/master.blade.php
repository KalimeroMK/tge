<!DOCTYPE html>
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    @yield('SOE')
    @if (Request::path() == '/')
        <title>{{$settings->title}}</title>
        <meta name="robots" content="index, follow">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link type="text/plain" rel="author" href="http://tge.mk/humans.txt"/>
        <meta property="og:title" content="МПЦ - ОА Европска епархија"/>
        <meta property="article:author" content="https://www.facebook.com/Sefot"/>
        <meta property="og:site_name" content="МПЦ - ОА Европска епархија"/>
        <meta property="fb:app_id" content="1192823797520220"/>
        <meta name="google-site-verification" content="tk0mLfz9VdFAzjzllTBY5jIFtMhVFoJM2HxUkLMidEM"/>
        <meta property="og:type" content="article"/>
        <meta property="og:image" content="http://tge.mk/assets/img/logo/logo.jpg"/>
        <meta property="article:tag"
              content="pravoslavna, crkva, православие, pravoslavie, црква, Бог, религија, bog, religija, manastir, gospodi, isus hristos, bogorodica"/>
        <meta property="og:description"
              content="Официјален веб портал на  Македонска правлславна црква Европска епархија">
        <meta name="description" content="Официјален веб портал на  Македонска правлславна црква Европска епархија"/>
        <meta name="keywords"
              content="pravoslavna, crkva, православие, pravoslavie, црква, Бог, религија, bog, religija, manastir, gospodi, isus hristos, bogorodica, виена, австрија, епархија, македонска, охридска, архиепископија"/>
        <meta name="author" content="Zoran Shefot Bogoevski">
@endif
<!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/img/favicon.ico">

    <!-- Bootstrap core CSS -->

    <!-- Font Awesome CSS -->
    <link href="/assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Include All CSS -->

    <link rel="stylesheet" type="text/css" href="/assets/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}"/>


    <!-- End Include All CSS -->

</head>
<body>

@yield('menu')

@yield('slider')


@yield('content')

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 text-center">
                <div class="footLogo">
                
                </div>
                <p class="copyrightText">© tge.mk 2014 - ALL RIGHTS RESERVED | Made by Zoran Shefot
                    Bogoevskid</span></p>
                <div class="footSocial">
                    @if($settings->twitter)
                        <a target="_blank" href="{{ $settings->twitter }}"><i
                                    class="fa fa-twitter"></i></a>
                    @endif
                    @if($settings->skype)
                        <a target="_blank" href="{{ $settings->skype }}"><i
                                    class="fa fa-skype"></i></a>
                    @endif
                    @if($settings->linkedin)
                        <a target="_blank" href="{{ $settings->linkedin }}"><i
                                    class="fa fa-linkedin"></i></a>
                    @endif
                    @if($settings->gplus)
                        <a target="_blank" href="{{$settings->gplus}}"><i
                                    class="fa fa-google-plus"></i></a>
                    @endif
                    @if($settings->youtube)
                        <a target="_blank" href="{{$settings->youtube}}"><i
                                    class="fa fa-youtube-play"></i></a>
                    @endif
                    @if($settings->flickr)
                        <a target="_blank" href="{{ $settings->flickr }}"><i
                                    class="fa fa-flickr"></i></a>
                    @endif
                    @if($settings->facebook)
                        <a target="_blank" href="{{ $settings->facebook }}"><i
                                    class="fa fa-facebook"></i></a>
                    @endif
                    @if($settings->pinterest)
                        <a target="_blank" href="{{$settings->pinterest}}"><i
                                    class="fa fa-pinterest"></i></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Include All JS -->
<script type="text/javascript" src="/assets/js/jquery.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.js"></script>
<script type="text/javascript" src="/assets/js/owl.carousel.js"></script>

<script type="text/javascript" src="/assets/js/theme.js"></script>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=244156195915980&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
@yield('scripts')
</body>
</html>
