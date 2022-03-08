@extends('layouts.frontend')

@section('content')

  <div class="container-fluid bg-dark">
  <!-- Main content here -->
     <div class="card">
       <div class="card-header">
         <h2 class="card-title">Reset your Password</h2>
       </div>
       <div class="card-body">
         <form action="{{ url('reset-password') }}" class="was-validated" method="POST">
          @csrf
           <div class="mb-3 mt-3">
             <label for="email" class="form-label">Email:</label>
             <input type="email" name="email" class="form-control" id="email" required>
             <div class="valid-feedback">??</div>
             <div class="invalid-feedback">Please fill out this field.</div>
           </div>
         </form>
       </div>
       <div class="card-footer">
         
       </div>
     </div>
  </div>

@endsection()