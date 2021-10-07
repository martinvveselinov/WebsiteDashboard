@extends('layout')

@section('content')

@for($i = 0; $i < 3; ++$i)
  <div class="row">
    @for($j = 0; $j < 3; ++$j)
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body border">
          <p class="card-title text-center">{{ empty($dashboard[3*$i+$j]->title) ? "Empty. Click to add a record" : $dashboard[3*$i+$j]->title}}</p>
          <p class="text-center display-3"><a style="color:{{$dashboard[3*$i+$j]->color}}" href="{{ empty($dashboard[3*$i+$j]->url) ? route('dashboard.edit', $dashboard[3*$i+$j]->number) : $dashboard[3*$i+$j]->url}}">&#8853;</a></p>
          @if(!empty($dashboard[3*$i+$j]->url))  
            <a class="btn btn-warning" href="{{ route('dashboard.edit',$dashboard[3*$i+$j]->number) }}">Edit</a>  
            <form action="{{ route('dashboard.destroy',$dashboard[3*$i+$j]->number) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          @endif
        </div>
      </div>
    </div>
    @endfor
</div>
  @endfor
@endsection