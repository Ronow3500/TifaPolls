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


<aside class="main-sidebar sidebar-dark-warning elevation-4">

<a href="index3.html" class="brand-link">
<img src="{{ asset('images/logo.png') }}" alt="TIFA Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
<span class="brand-text font-weight-light">Polls</span>
</a>

<div class="sidebar">

<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="{{ asset('images/avatar.png') }}" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
<a href="#" class="d-block">User Name</a>
</div>
</div>

<div class="form-inline">
<div class="input-group" data-widget="sidebar-search">
<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-sidebar">
<i class="fas fa-search fa-fw"></i>
</button>
</div>
</div>
</div>

<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

<li class="nav-item menu-open">
<a href="#" class="nav-link active">
<i class="nav-icon fas fa-bars-alt"></i>
<p>
Menu
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="{{ url('table') }}" class="nav-link active">
<i class="far fa-th nav-icon"></i>
<p>Table</p>
</a>
</li>
<li class="nav-item">
<a href="{{ url('data_studio') }}" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Data Studio</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="{{ asset('import') }}" class="nav-link">
<i class="nav-icon fas fa-upload"></i>
<p>
Import
<span class="right badge badge-danger">New</span>
</p>
</a>
</li>
</ul>
</nav>

</div>

</aside>

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
