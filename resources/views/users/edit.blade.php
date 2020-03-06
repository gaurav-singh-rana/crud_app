@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {{ Form::model($user,['route'=>['users.update',$user->id],'method'=>'PATCH']) }}
      @include('users.form_master')
      {{ Form::close() }}
    </div>
  </div>
@endsection