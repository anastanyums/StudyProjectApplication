@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-3">
            <div class="panel panel-default">

                <div class="panel-body">
                  <div class="panel-heading text-center form_head"><h2><b>Add</b> New Issue</h2></div>
                    <form class="form-horizontal" method="POST" action="/addIs">
                      {{ csrf_field() }}

                        <div class="custom_field form-group ">
                          <div class="inner-addon left-addon">
                            <i class="glyphicon glyphicon-tag"></i>
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('name') }}" required autofocus placeholder="The Issue">
                        </div>
                        <br>
                        <div class="custom_field form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <select class="form-control" id="type" name="type">
                                <option>--Department--</option>
                                <option> Manufacturing </option>
                                <option> Painting</option>
                                <option> Packaging</option>

                              </select>
                        </div>

                        <div class="custom_field form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <select class="form-control" id="type" name="type">
                                <option>--Technician--</option>
                                <option> Id 001 </option>
                                <option> Id 002</option>
                                <option> Id 003</option>
                              </select>
                        </div>

                        <div class="custom_field form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <select class="form-control" id="type" name="type">
                                <option>--Issue Type--</option>
                                <option> Minor Issue </option>
                                <option> Major Issue</option>
                                <option> Critical Issue</option>
                              </select>
                        </div>

                        <div class="custom_field form-group ">
                          <div class="inner-addon left-addon">
                            <i class="glyphicon glyphicon-tag"></i>
                                <input id="issueDescription" type="text" class="form-control" name="des" value="{{ old('name') }}" required autofocus placeholder="Issue Description">
                        </div>
                        

                        <div class="custom_field form-group ">
                            <div class="inner-addon left-addon">

                              <h5> Deadline</h5>
                            </div>


                        <div class="custom_field form-group ">
                          <div class="inner-addon left-addon">
                            <i class="glyphicon glyphicon-tag"></i>
                                <input id="userId" type="date" class="form-control" name="user" value="{{ old('name') }}" >
                        </div>
                        <br>


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
