@extends('layout.app')
@section('content')
<h1>To-Do List</h1>
<hr>
<form action="{{route('tasks.store')}}" method="POST">
    @csrf
<div class="row">

    <div class="col-lg-9">
            <input type="text" name="taskname" id="" class="form-control">
    </div>
    <div class="col-lg-3">
            <input type="submit" value="Add Task" class="btn btn-primary btn-block">
    </div>
</form>
</div>
    {{-- display tasks --}}
    @if(count($storedTasks)>0)
<table class="table">
    <thead>
        <th>Task</th>
        <th>Description</th>
        <th>Edit</th>
        <th>Delete</th>
    </thead>
    <tbody>
        @foreach($storedTasks as $storedTask)
 <tr>
        <td>{{$storedTask->id}}</td>
    <td>{{$storedTask->task}}</td>
 <td><a href="{{route('tasks.edit',['taks'=>$storedTask->id])}}"><div class="btn btn-primary">Edit</div></a></td>
    <td>
    <form action="{{route('tasks.destroy',['tasks'=>$storedTask->id])}}" method="POST">
                @csrf
                 <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
    </td>
 </tr>
        @endforeach
    </tbody>
</table>
    @endif
    <div class="row text-center">
            {{$storedTasks->links()}}
        </div>



@endsection