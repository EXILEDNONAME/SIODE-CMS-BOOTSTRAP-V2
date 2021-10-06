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
    {!! Form::text('address', (isset($data->address) ? $data->address : ''), ['class' => $errors->has('address') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('address') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
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
  <label class="col-lg-3 col-form-label"> Twitter </label>
  <div class="col-lg-9">
    {!! Form::text('social_twitter', (isset($data->social_twitter) ? $data->social_twitter : ''), ['class' => $errors->has('social_twitter') ? 'form-control is-invalid' : 'form-control']) !!}
    @error('social_twitter') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>
<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Facebook </label>
  <div class="col-lg-9">
    {!! Form::text('social_facebook', (isset($data->social_facebook) ? $data->social_facebook : ''), ['class' => $errors->has('social_facebook') ? 'form-control is-invalid' : 'form-control']) !!}
    @error('social_facebook') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>
<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Instagram </label>
  <div class="col-lg-9">
    {!! Form::text('social_instagram', (isset($data->social_instagram) ? $data->social_instagram : ''), ['class' => $errors->has('social_instagram') ? 'form-control is-invalid' : 'form-control']) !!}
    @error('social_instagram') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>
<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Maps </label>
  <div class="col-lg-9">
    {!! Form::text('maps', (isset($data->maps) ? $data->maps : ''), ['class' => $errors->has('maps') ? 'form-control is-invalid' : 'form-control']) !!}
    <span class="form-text text-muted"> Please enter google maps pb code </span>
    @error('maps') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>
