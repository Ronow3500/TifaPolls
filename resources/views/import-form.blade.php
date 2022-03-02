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
  <!-- Main Content Here -->
    <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="card">
        <div class="card-header">
          Upload Data From a Spreadsheet
        </div>
        <div class="card-body">
          @if (session('success'))
            <div class="alert alert-success" role="alert">
              {{ session('success') }}
            </div>
          @endif
          @if (session('error'))
            <div class="alert alert-danger" role="alert">
              {{ session('error') }}
            </div>
          @endif
          <div class="form-group">
            <label for="file" class="form-label">Choose File</label>
            <div class="input-group">
              <input type="file" class="form-control" name="file" id="file">
            </div>
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Import</button>
        </div>
      </div>
    </form>
  <!-- End of Main Content -->
</div>

<div class="p-4 fixed-bottom bg-primary text-dark text-center">
  <p>Footer</p>
</div>

</body>
</html>
