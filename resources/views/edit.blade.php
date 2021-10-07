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
    Edit & Update
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
      <form method="post" action="{{ route('dashboard.update', $dashboard->number) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="tile">Title</label>
              <input type="text" class="form-control" name="title" value="{{ $dashboard->title }}"/>
          </div>
          <div class="form-group">
              <label for="url">URL</label>
              <input type="url" class="form-control" name="url" value="{{ $dashboard->url }}"/>
          </div>
          <div class="form-group">
              <label for="color">Color</label>
              <input type="color" class="form-control" name="color" value="{{ $dashboard->color }}"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Update Block</button>
      </form>
    

  </div>
</div>
@endsection