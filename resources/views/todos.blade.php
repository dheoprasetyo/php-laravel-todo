@extends('layout')
@section('content')
   
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form action="/create/todo" method="post">
            {{ csrf_field() }} 
                <input type="text" class="form-control input-lg" name="todo" placeholder="create new todo laah">
            </form>
        </div>
    </div>
<hr>


    @foreach($todos as $todo)
        {{ $todo->todo }} <a href="{{ route('todo.delete', ['id'=> $todo->id]) }}" class="btn btn-danger">del</a>
        <a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="btn btn-info btn-xs">update</a>
       @if(!$todo->completed)
            <a href="{{ route('task.completed', [ 'id' => $todo->id ]) }}" class="btn btn-xs btn-success"> Mark as completed</a>
        @else
            <span class="text-success">Task Done!</span>
        @endif
        <hr>
    @endforeach

@stop