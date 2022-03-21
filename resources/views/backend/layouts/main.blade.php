<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ config('app.name') ?? 'Tifa Polls Backend' }}</title>
<link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.jpeg') }}">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<script src="https://kit.fontawesome.com/63b4fcb6d3.js" crossorigin="anonymous"></script>
<!-- AdminLTE -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
<script nonce="7d1b7430-0c3e-432f-9da5-bd216d87895c">(function(w,d){!function(a,e,t,r,z){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zarazData.tracks=[],a.zaraz={deferred:[]};var s=e.getElementsByTagName("title")[0];s&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.dataLayer=a.dataLayer||[],a.zaraz.track=(e,t)=>{for(key in a.zarazData.tracks.push(e),t)a.zarazData["z_"+key]=t[key]},a.zaraz._preSet=[],a.zaraz.set=(e,t,r)=>{a.zarazData["z_"+e]=t,a.zaraz._preSet.push([e,t,r])},a.dataLayer.push({"zaraz.start":(new Date).getTime()}),a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r);z.defer=!0,z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script></head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<nav class="main-header navbar navbar-expand navbar-white navbar-light">

<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="http://polls.tifaresearch.com" class="nav-link">Frontend</a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="#" class="nav-link">Contact</a>
</li>
</ul>

<ul class="navbar-nav ml-auto">
  <li class="nav-item">
    @auth

    <form action="{{ url('logout') }}" method="POST">
      @csrf
      <button class="btn btn-warning btn-sm" type="submit">Logout</button>
    </form>

    @else
    <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown">
              Account
    </button>
    <ul class="dropdown-menu">
       <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#login-modal">Login</a></li>
       <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#register-modal">Register</a></li>
    </ul>
    @endauth
  </li>
</ul>

</nav>


@include('backend/layouts/sidebar')

<div class="content-wrapper">

<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1 class="m-0">{{ $title ?? 'TIFA Polls' }}</h1>
</div>
<div class="col-sm-6">
</div>
</div>
</div>
</div>


<div class="content">
    <div class="container-fluid">
        @include('backend/layouts/alerts')
        @yield('content')

    </div>
</div>

</div>


<footer class="main-footer">

<div class="float-right d-none d-sm-inline">
Opinion Polls
</div>

<strong class="text-warning">Copyright &copy; <?= date('Y') ?> <a href="http://tifaresearch.com">TIFA Research</a>.</strong> All rights reserved.
</footer>
</div>



<script src="plugins/jquery/jquery.min.js"></script>

<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
