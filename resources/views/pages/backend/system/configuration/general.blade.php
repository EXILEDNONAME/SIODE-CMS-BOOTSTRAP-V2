@extends('layouts.backend.system.edit')
@push('title', 'Generals')

@push('content-body')

@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert"> {{ $message }} </div><hr>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger" role="alert"> {{ $message }} </div><hr>
@endif

<form method="POST" id="form-exilednoname" action="{{ URL::current() }}/../general-update" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
  {{ csrf_field() }}

  <input class="form-control" name="id" type="hidden" value="{{ $data->id }}">
  <input class="form-control" name="updated_by" type="hidden" value="{{ Auth::User()->id }}">
  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Name </label>
    <div class="col-lg-9">
      {!! Form::text('name', (isset($data->name) ? $data->name : ''), ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>
  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Slogan </label>
    <div class="col-lg-9">
      {!! Form::text('slogan', (isset($data->slogan) ? $data->slogan : ''), ['class' => $errors->has('slogan') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('slogan') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>
  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Address </label>
    <div class="col-lg-9">
      {!! Form::text('name', (isset($data->name) ? $data->address : ''), ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>
  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Email </label>
    <div class="col-lg-9">
      {!! Form::email('email', (isset($data->email) ? $data->email : ''), ['class' => $errors->has('email') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('email') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>
  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Phone </label>
    <div class="col-lg-9">
      {!! Form::text('phone', (isset($data->phone) ? $data->phone : ''), ['class' => $errors->has('phone') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('phone') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>
  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Social Twitter </label>
    <div class="col-lg-9">
      {!! Form::text('social_twitter', (isset($data->social_twitter) ? $data->social_twitter : ''), ['class' => $errors->has('social_twitter') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('social_twitter') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>
  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Social Facebook </label>
    <div class="col-lg-9">
      {!! Form::text('social_facebook', (isset($data->social_facebook) ? $data->social_facebook : ''), ['class' => $errors->has('social_facebook') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('social_facebook') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>
  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Social Instagram </label>
    <div class="col-lg-9">
      {!! Form::text('social_instagram', (isset($data->social_instagram) ? $data->social_instagram : ''), ['class' => $errors->has('social_instagram') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('social_instagram') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>
</form>
@endpush
