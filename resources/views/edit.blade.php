@extends('master')
@section('title')
Edit | Student Management
@endsection

@section('content')
        <h2>Edit Student id: {{ $student->id}}</h2>
        <form class="form-horizontal" action="{{ route('update',$student->id)}}" method="post">
        {{ csrf_field() }}
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" name="name" value="{{ $student->name}}">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="registration_id">Registration No:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="registration_id" name="registration_id" value="{{ $student->registration_id }}">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="department_name">Department:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="department_name" name="department_name" value="{{ $student->department_name }}">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="department_name">Info:</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="info" name="info" rows="10">{{$student->info}}</textarea>
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Update Student</button>
      </div>
    </div>
  </form>
@endsection