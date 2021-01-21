@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-3">
            <div class="panel panel-default">

                <div class="panel-body">
                  <div class="panel-heading text-center form_head"><h2> Issue</h2></div>
                    <form class="form-horizontal" method="POST" action="/updateIssue/{{$issue->id}}">
                      {{ csrf_field() }}

                        <div class="custom_field form-group ">
                          Titile: {{$issue->title}}
                            
                            
                        </div>
                        <br>
                        <div class="custom_field form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                        Department: {{$issue->departments->name}}
                            
                        </div>

                        <div class="custom_field form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                        Technician: {{$issue->user->name}}
                            
                        </div>

                        <div class="custom_field form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                        Issue Type: {{$issue->type}}
                            
                        </div>

                        <div class="custom_field form-group ">
                        Description: {{$issue->desc}}
                                
                        </div>

                        <div class="custom_field form-group ">
                        Deadline: {{$issue->deadline}}
                                
                        </div>
                        

                        <div class="custom_field form-group ">
                            <div class="inner-addon left-addon">
                              <h5> Resolved Date</h5>
                            </div>


                        <div class="custom_field form-group ">
                          <div class="inner-addon left-addon">
                            <i class="glyphicon glyphicon-tag"></i>
                                <input id="userId" type="date" class="form-control" name="fix_date" value="{{ old('name') }}" >
                        </div>
                        <br>

                        <div class="custom_field form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <select class="form-control" id="type" name="status">
                                <option>--Resolution--</option>
                                <option value="Done"> Done </option>
                                <option value="Working"> Working</option>
                                <option value="Postponed"> Postponed</option>
                              </select>
                        </div>


                        <!--<div class="row" style="margin-left: 0px; margin-right: -57px;">
                            <div class="custom_field form-group col-sm-10">

                                      <select class="form-control" id="sel1" name="cat">
                                      <option>--Select Department--</option>


                                    </select>
                                </div>
                                <div class="col-sm-2 ">
                                  <button type="button" class="btn btn-primary btn-circle btn-sm"><i class="glyphicon glyphicon-plus"></i></button>
                            </div>

                        </div>

                      <div class="row" style="margin-left: 0px; margin-right: -57px;">
                        <div class="custom_field form-group col-sm-10">

                                <select class="form-control" id="sel1" name="author">
                                <option>--Select Technician--</option>


                              </select>
                          </div>
                          <div class="col-sm-2 ">
                            <button type="button" class="btn btn-primary btn-circle btn-sm"><i class="glyphicon glyphicon-plus"></i></button>
                          </div>

                        </div>

                        <div class="row" style="margin-left: 0px; margin-right: -57px;">
                          <div class="custom_field form-group col-sm-10">

                                  <select class="form-control" id="sel1" name="cat">
                                  <option>--Issue Type--</option>
                                  <option> Minor Issue </option>
                                  <option> Major Issue </option>
                                  <option> Critical Issue </option>

                                </select>
                            </div>
                            <div class="col-sm-2 ">
                              <button type="button" class="btn btn-primary btn-circle btn-sm"><i class="glyphicon glyphicon-plus"></i></button>
                            </div>

                          </div>


                        <div class="custom_field form-group ">
                          <div class="inner-addon left-addon">
                            <i class="glyphicon glyphicon-tag"></i>
                                <input id="file" type="textarea" class="form-control" name="file" required autofocus placeholder="Short Description about the Issue">
                        </div>

                        <br/>

                        <div class="form-group">
                          <div class="inner-addon left-addon">
                            <input type="file"  name="Add Picture" value="Add Picture">

                          </div>
                        </div>

                      -->

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
