@extends('backend.layouts.main')

@section('content')

  <div class="card card-primary">
    <div class="card-header">
      <h3>Edit User</h3>
    </div>
    <div class="card-body">
      <form method="POST" action="{{ route('backend.users.update', $user->id) }}" novalidate="novalidate">
        @method('PATCH')
        @include('backend.users.partials.form')
      </form>
    </div>
    <div class="card-footer clearfix">
    </div>
  </div>

@endsection()