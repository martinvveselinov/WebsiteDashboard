@extends('layout')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    Add Block
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('dashboard.store') }}">
        <div class="form-group">
              <label for="number">Number</label>
              <input type="number" class="form-control" name="number"/>
          </div>
          <div class="form-group">
              @csrf
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title"/>
          </div>
          <div class="form-group">
              <label for="url">URL</label>
              <input type="url" class="form-control" name="url"/>
          </div>
          <div class="form-group">
              <label for="color">Color</label>
              <input type="color" class="form-control" name="color"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Create User</button>
      </form>
  </div>
</div>
@endsection