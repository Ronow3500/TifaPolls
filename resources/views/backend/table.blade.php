@extends('backend.layouts.main')

@section('content')

  <div class="card">
    <div class="card-header">
      <h3>Table</h3>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Sno</th>
            <th>Agex</th>
            <th>Gender</th>
            <th>Setting</th>
            <th>Region</th>
            <th>PPA</th>
            <th>Pref_President</th>
            <th>Weight</th>
            <th>Wave</th>
          </tr>
        </thead>
        <tbody>
          @foreach($items as $item)
          <tr>
            <td>{{ $item['Sno'] }}</td>
            <td>{{ $item['Agex'] }}</td>
            <td>{{ $item['Gender'] }}</td>
            <td>{{ $item['Setting'] }}</td>
            <td>{{ $item['Region'] }}</td>
            <td>{{ $item['PPA'] }}</td>
            <td>{{ $item['Pref_President'] }}</td>
            <td>{{ $item['Weight'] }}</td>
            <td>{{ $item['Wave'] }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="card-footer clearfix">
      {{ $items->links() }}
    </div>
  </div>

@endsection()