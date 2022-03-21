@extends('backend.layouts.main')

@section('content')

  <div class="card card-primary">
    <div class="card-header">
      <div class="row">
        <div class="col">
          <h3 class="card-title">System Users</h3>
        </div>
        <div class="col">
          <a href="{{ route('backend.users.create') }}" class="btn btn-default text-dark">Create User</a>
        </div>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <td>{{ $user['first_name'] }}</td>
            <td>{{ $user['last_name'] }}</td>
            <td>{{ $user['email'] }}</td>
            <td>
              <a href="{{ route('backend.users.edit', $user['id']) }}" class="btn btn-sm btn-outline-info" title="edit">
                <i class="fas fa-pen"></i>
              </a>
              <form action="{{ route('backend.users.destroy', $user['id']) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
                  <i class="fas fa-trash-alt"></i>
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="card-footer clearfix">
      {{ $users->links() }}
    </div>
  </div>

@endsection()