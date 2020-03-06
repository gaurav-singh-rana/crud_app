@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-sm-12">
		<div class="full-right">
			<h2>Crud App</h2>
			
		</div>
		
	</div>
	
</div>

 @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif
<table class="table table-bordered">
	<tr>
		<th with="80px;">No.</th>
		<th>Name</th>
		<th>Email</th>
		<th>City</th>
		<th with="140px;" class="text-center">
			<a href="{{route('users.create')}}" class="btn btn-success btn-sm">
				<i class="glyphicon glyphicon-plus"></i>
			</a>
			
		</th>

	</tr>
	<?php  $no=1; ?>
	@foreach($user as $key=>$value)
	<tr>
   <td>{{$no++}}</td>
   <td>{{$value->name}}</td>
   <td>{{$value->email}}</td>
   <td>{{$value->city}}</td>
   <td>
   	<a href="{{route('users.show',$value->id)}}" class="btn btn-info btn-sm">
   		<i class="glyphicon glyphicon-plus"></i>
   	</a>
   	<a href="{{route('users.edit',$value->id)}}" class="btn btn-primary btn-sm">
   		<i class="glyphicon glyphicon-pencil"></i>
   	</a>
   	{!! Form::open(['method'=>'DELETE', 'route'=>['users.destroy',$value->id],'style'=>'display:inline' ]) !!}
      <button type="submit" style="display:inline;" class="btn btn-danger btn-sm">
      	<i class="glyphicon glyphicon-plus"></i>
      </button>

   	{!! Form::close() !!}
   </td>
</tr>



	@endforeach
	
</table>


@endsection