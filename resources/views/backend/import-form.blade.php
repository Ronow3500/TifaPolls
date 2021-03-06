@extends('backend.layouts.main')

@section('content')

  <form action="{{ route('backend.import') }}" method="POST" enctype="multipart/form-data">
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
          <button type="submit" class="btn btn-warning float-right">Import
            <i class="fa fa-upload"></i></button>
        </div>
      </div>
    </form>

@endsection()