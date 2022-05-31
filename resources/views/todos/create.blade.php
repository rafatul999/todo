@extends('layout.app')

@section('title','CREATE | TODOS')

@section('content')
<div class="row justify-content-center p-5">
	<div class="col-lg-6">
<div class="card">
	<div class="card-header">
		<h4 class="card-title">Todo List</h4>
	</div>
   <div class="card-body">
   	@if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
   	<form action="/store-todo" method="POST">

   		@csrf

   		<div class="form-group">
   			<label>Name</label>
   			<input type="text" name="name" class="form-control" placeholder="name">
   		</div>
   		<div class="form-group mt-4">
   			<label>Description</label>
   			<textarea type="text" name="description" class="form-control" placeholder="description"></textarea>
   		</div>
   		<br>
   		<div class="form-group">
		<input type="submit" name="submit" class="mt-3 btn btn-success">
		</div>

   	</form>
   </div>
</div>
</div>
</div>

@endsection