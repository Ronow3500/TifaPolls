@extends('backend.layouts.main')

@section('content')

  <div class="card">
    <div class="card-header">
      <h3>Roles Table</h3>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Role name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($roles as $role)
          <tr>
            <td>{{ $role['id'] }}</td>
            <td>{{ $role['name'] }}</td>
            <td>
              <a href="#" class="btn btn-outline-info">
                <i class="fas fa-pen"></i>
              </a>
              <form action="{{ route('backend.roles.destroy', $role['id']) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger">
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
      {{ $roles->links() }}
    </div>
  </div>

@endsection()