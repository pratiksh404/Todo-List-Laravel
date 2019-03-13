@extends('layout.app')
@section('content')
<h1>Edit</h1>
<hr>
<div class="container">
<a href="{{route('tasks.index')}}"><div class="btn btn-default">Go Back</div></a>
<br>

<form action="{{route('tasks.update',[$taskEdit->id])}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
            <div class="row">
       <div class="col-lg-12">
       <input type="text" name="editTask" id="" class="form-control" value="{{$taskEdit->task}}">
       </div>
       <br>
       <hr>
       </div>
       <div class="row">
            <div class="col-lg-12">
                    <input type="submit" value="Save Change" class="btn btn-primary btn-block">
                   </div>
       </div>
   
    </form>

</div>
@endsection