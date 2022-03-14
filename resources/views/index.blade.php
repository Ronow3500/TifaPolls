@extends('layouts.frontend')

@section('content')

  <div class="container-fluid bg-dark">
  <!-- Main content here -->
  @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif
  
  <iframe width="100%" height="950" src="https://datastudio.google.com/embed/reporting/cc23d1f8-bc58-4d2f-853c-e7660cf05ffe/page/d3mlC" frameborder="0" style="border:0" allowfullscreen></iframe>


  @guest   
  <!-- Login Popup -->
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
  <!-- End Login Popup -->
  @endguest
  </div>

@endsection()