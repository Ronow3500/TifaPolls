@extends('layouts.frontend')

@section('content')

<div class="jumbotron bg-warning" style="height: 100vh;">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <div class="card card-login mx-auto mt-5 mb-5">
      <div class="card-header text-center">
        <div class="row">
          <div class="col">
            <h3 class="text-primary">
              Login To Proceed
            </h3>
          </div>
          <div class="col">
            @if(session('status'))
               <div class="alert alert-info" role="alert">
                    {{ session('status') }}
               </div>
            @endif
          </div>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('login') }}" method="post" accept-charset="utf-8">
           @csrf
            <div class="form-group">
              <div class="form-label-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your Email" name="email" value="{{ old('email') }}" required>
                @error('email')
                  <span class="invalid-feedback" role="alert">
                      {{ $message }}
                  </span>
                @enderror
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <label for="inputPassword">Password</label>
                <input type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required>
                @error('password')
                  <span class="invalid-feedback" role="alert">
                      {{ $message }}
                  </span>
                @enderror
              </div>
            </div>
            
            <div class="row mt-4">
              <div class="col">
                <button type="submit" class="btn btn-primary btn-block">Login</button>
              </div>
              <div class="col">
                <a href="{{ route('password.request') }}" class="btn btn-warning" title="Reset it here">Umesahau Password ?</a>
              </div>
            </div>
          </form>
      </div>
    </div>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>

@endsection