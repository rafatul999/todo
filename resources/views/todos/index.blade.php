@extends('layout.app')

@section('title','HOME | TODOS')

@section('content')
<div class="row justify-content-center p-5">
	<div class="col-lg-6">
<div class="card">
	<div class="card-header">
		<h4 class="card-title">Todo List</h4>
	</div>
   <div class="card-body">
    <ul class="list-group">
    @foreach($todos as $todo)
   <li class="list-group-item">{{ $todo->name }} 
    @if(!$todo->completed)
   <a href="/todos/{{ $todo->id }}/complete"class="btn btn-warning float-end">Complete</a>
   @endif
    
   
   </li>
   
    @endforeach

   </ul>
   
</div>
</div>
</div>
</div>
@endsection

