@extends('layouts.master')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">Department List</div>
  <div class="panel-body">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">Department ID</th>
          <th scope="col">Department Name</th>
        </tr>
      </thead>
      @foreach ($depList as $dep)
        <tr>
          <td scope="col">{{$dep->id}}</th>
          <td scope="col">{{$dep->name}}</th>
        </tr>
      @endforeach
      <tbody>

  </div>
</div>


@endsection
