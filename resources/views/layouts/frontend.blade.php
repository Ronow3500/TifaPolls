
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
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('images/logo.png') }}" alt="TIFA Opinion Polls">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="mynavbar">
      
      <div class="dropdown">
          @auth

          <form action="{{ url('logout') }}" method="POST">
            @csrf
            <button class="btn btn-warning" type="submit">Logout</button>
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
      </div> 
    </div>
  </div>
</nav>
<!-- Register Modal -->
  <div class="modal fade" id="register-modal">
    <div class="modal-dialog">
    <form method="POST" action="{{ url('register') }}">
      @csrf
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Register</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <!-- Modal Body -->
        <div class="modal-body">
          
            <div class="row">
              <div class="col">
                <input type="text" name="first_name" class="form-control form-control-lg" placeholder="Your first name">
              </div>
              <div class="col">
                <input type="text" name="last_name" class="form-control form-control-lg" placeholder="Your last name">
              </div>
          </div>
          <div class="mt-3"></div>
          <div class="row">
              <div class="col">
                <input type="email" name="email" class="form-control form-control-lg" placeholder="Your email">
              </div>
              <div class="col">
                <input type="password" name="password" class="form-control form-control-lg" placeholder=" password">
              </div>
          </div>
          <div class="mt-3"></div>
          <div class="row">
              <div class="col">
                <input type="password" name="password_confirmation" class="form-control form-control-lg" placeholder="Confirm password">
              </div>
              <div class="col">
                
              </div>
          </div>
          <div class="mt-3"></div>
         
        </div>
        <!-- Modal Footer -->
        <div class="modal-footer">
           <button type="submit" class="btn btn-primary pr-0">
                  Register
              </button>
        </div>
      </div>
    </form>
    </div>
  </div>
  <!-- End of Register Modal -->

  <!-- Login Modal -->
  <div class="modal fade" id="login-modal">
    <div class="modal-dialog">
    <form method="POST" action="{{ url('login') }}">
      @csrf
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <!-- Modal Body -->
        <div class="modal-body">
          @if(session('status'))
           <div class="is-valid">
             {{ session('status') }}
           </div>
          @endif

          @if(session('success'))
           <div class="is-valid">
             {{ session('success') }}
           </div>
          @endif
          <input type="email" name="email" class="form-control form-control-lg" placeholder="Your email">
          
          <div class="mt-3"></div>
          <input type="password" name="password" class="form-control form-control-lg" placeholder=" password">
        </div>
        <!-- Modal Footer -->
        <div class="modal-footer">
          <a href="{{ route('forgot_password') }}"
             class="btn btn-warning btn-sm pl-0"
             title="Forgot Password ?"
          >
                     ?
          </a>
          <button type="submit" class="btn btn-primary pr-0">
            Login
          </button>
        </div>
      </div>
    </form>
    </div>
  </div>
  <!-- End of Login Modal -->


  @yield('content')

<div class="p-4 bg-primary text-light text-center">
  <p>&copy; Tifa Research</p>
</div>

<script src="{{ asset('assets/custom/auth_popup.js') }}"></script>
</body>
</html>