<!DOCTYPE html>
<html lang="tr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script language="Javascript1.2">

        var mymessage = "Bu siteden içerik kopyalamak yasaktır.!!";
        function rtclickcheck(keyp){
            if (navigator.appName == "Netscape" && keyp.which == 3) {
                alert(mymessage);
                return false;
            }

            if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) {
                alert(mymessage);
                return false;
            }

        }

        document.onmousedown = rtclickcheck

    </script>

    <title>@yield('title','Blog Sitesi')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('front/')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('front/')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{asset('front/')}}/css/clean-blog.min.css" rel="stylesheet">

</head>

<body>


<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{route('homepage')}}">VBlog</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('homepage')}}">Ana Sayfa</a>
                </li>
                @php
                    $pages= \App\Models\Page::orderBy('order','ASC')->get();
                @endphp
                @foreach($pages as $page)
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('page',$page->slug)}}">{{$page->title}}</a>
                    </li>
                @endforeach
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">İletişim</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<header class="masthead"

        style="background-image: url('@yield('bg',asset('front/img/home-bg.jpg'))')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h2>@yield('title')</h2>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
