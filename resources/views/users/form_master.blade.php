<div class="row">
  <div class="col-sm-2">
    {!! form::label('title','Name') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('name') ? 'has-error' : "" }}">
      {{ Form::text('name',NULL, ['class'=>'form-control', 'id'=>'name', 'placeholder'=>'Enter Name...']) }}
      {{ $errors->first('name', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    {!! form::label('title','Email') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('email') ? 'has-error' : "" }}">
      {{ Form::text('email',NULL, ['class'=>'form-control', 'id'=>'email', 'placeholder'=>'Enter Email...']) }}
      {{ $errors->first('email', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    {!! form::label('title','City') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('city') ? 'has-error' : "" }}">
      {{ Form::text('city',NULL, ['class'=>'form-control', 'id'=>'city', 'placeholder'=>'Enter City...']) }}
      {{ $errors->first('city', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="form-group">
  {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>