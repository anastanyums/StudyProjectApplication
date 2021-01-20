@extends('layouts.master')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">Issue List</div>
  <div class="panel-body">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">IssueID</th>
          <th scope="col">Issue</th>
          <th scope="col">Department</th>
          <th scope="col">Technician</th>
          <th scope="col">Issue Type</th>
          <th scope="col">Issue Description</th>
          <th scope="col">Deadline</th>
          <th scope="col">Issue Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      @foreach ($issues as $issue)
        <tr>
          <td scope="col">{{$issue->id}}</td>
          <td scope="col">{{$issue->title}}</td>
          <td scope="col">{{$issue->department}}</td>
          <td scope="col">{{$issue->tec_id}}</td>
          <td scope="col">{{$issue->type}}</td>
          <td scope="col">{{$issue->desc}}</td>
          <td scope="col">{{$issue->deadline}}</td>
          <td scope="col">Issue Status</td>
          <td scope="col">Action</td>
        </tr>
      @endforeach
      <tbody>
    </table>
  </div>
</div>


@endsection
