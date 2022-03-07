
<!DOCTYPE html>
<html lang="en">
<head>
  <title>TIFA Opinion Polls</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('assets/custom/auth_popup.css') }}" type="text/css">

  <link href="{{ asset('assets/twbs/styles/bootstrap.css') }}" rel="stylesheet">
  <script src="{{ asset('assets/twbs/js/bootstrap.bundle.js') }}"></script>
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

  <div class="login-popup">
     <div class="box">
       <div class="img-area">
        <div class="img">
        </div>
       </div>
       <div class="form">
        <div class="close">&times;</div>
        <h1>Log In</h1>
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <form action="{{ url('login') }}" method="POST">
          @csrf
          <div class="form-group">
            <input type="text" name="email" placeholder="Email" class="form-control">
          </div>
          <div class="form-group">
            <input type="password" name="password" placeholder="Password" class="form-control">
          </div>
          <div class="form-group">
            <label><input type="checkbox">
              Remember Me
            </label>
          </div>
          <button type="submit" class="btn">Log In</button>
        </form>
       </div>
     </div>
  </div>

  <div class="container-fluid bg-dark">
  <!-- Main content here -->
     <iframe width="100%" height="950" src="https://datastudio.google.com/embed/reporting/cc23d1f8-bc58-4d2f-853c-e7660cf05ffe/page/d3mlC" frameborder="0" style="border:0" allowfullscreen></iframe> 
</div>

<div class="p-4 bg-info text-dark text-center">
  <p>Footer</p>
</div>

<script src="{{ asset('assets/custom/auth_popup.js') }}"></script>
</body>
</html>