@extends('layouts.app')
@section('content')
<div class="w-100 h-100 d-flex justify-content-center align-items-center">
<div class="w-50 text-center">
<h1 class="display-2 text-white">Edit Your Todo called {{$todo -> title}}</h1>

<form action="{{route('todo.update', $todo->id)}}" method="POST">
@csrf
@method('PUT')
<div class="input-group mb-3 w-100">

<input type="text" class="form-control form-control-lg" name="title" value = "{{$todo->title}}"aria-label="recipient username" aria-describedby="button2">
       <div class="input-group-append">
              <button type="submit" class="btn btn-success" id="button2">Save</button>
       </div>
</div>
</form>

    
</div>

</div>
@endsection

