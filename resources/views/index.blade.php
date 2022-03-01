<!DOCTYPE html>
<html lang="en">
<head>
  <title>TIFA Opinion Polls</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('assets/twbs/styles/bootstrap.css') }}" rel="stylesheet">
  <script src="{{ asset('assets/twbs/js/bootstrap.bundle.js') }}"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">
        <img src="{{ asset('images/logo.png') }}" alt="TIFA Opinion Polls">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="mynavbar">
      
      <div class="dropdown">
          <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown">
            Sign Up
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Login</a></li>
            <li><a class="dropdown-item" href="#">Register</a></li>
          </ul>
      </div> 
    </div>
  </div>
</nav>

<div class="container-fluid bg-dark">
  <!-- Main content here -->
     <iframe width="100%" height="950" src="https://datastudio.google.com/embed/reporting/cc23d1f8-bc58-4d2f-853c-e7660cf05ffe/page/d3mlC" frameborder="0" style="border:0" allowfullscreen></iframe> 
</div>

<div class="p-4 bg-info text-dark text-center">
  <p>Footer</p>
</div>

</body>
</html>
