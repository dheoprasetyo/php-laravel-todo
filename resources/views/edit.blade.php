@extends('layout')
@section('content')
   
    <br><br><br>
<div class="row justify-content-center">
    <div class="col-12">
       <form action="{{ route('todo.save', ['id' => $todo->id]) }}" method="post">
        {{ csrf_field() }}
            <input type="text" class="form-control input-lg" name="todo" value={{ $todo->todo }} placeholder="create new todo">
        </form>
    </div>
</div>
<br>

@stop