@extends('layouts.master')

@section('content')
@php
     $admin = Auth::user()->roles->pluck('name')->contains('admin');
@endphp

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
          <th scope="col">FixDate</th>
          <th scope="col">Issue Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      @foreach ($issues as $issue)
        <tr>
          <td scope="col">{{$issue->id}}</td>
          <td scope="col">{{$issue->title}}</td>
          <td scope="col">{{$issue->departments->name}}</td>
          <td scope="col">{{$issue->user->name}}</td>
          <td scope="col">{{$issue->type}}</td>
          <td scope="col">{{$issue->desc}}</td>
          <td scope="col">{{$issue->deadline}}</td>
          <td scope="col">{{$issue->fix_date}}</td>
          <td scope="col">{{$issue->status}}</td>
          <td scope="col">
            @if($admin) 
            <a href="issue-delete/{{$issue->id}}"> Delete </a> | 
            @endif <a href="viewIssue/{{$issue->id}}"> View </a>
          </td>
        </tr>
      @endforeach
      <tbody>
    </table>
  </div>
</div>


@endsection
