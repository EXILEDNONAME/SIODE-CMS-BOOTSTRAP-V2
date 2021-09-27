<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Name </label>
  <div class="col-lg-9">
    {!! Form::text('name', (isset($data->name) ? $data->name : ''), ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Photo </label>
  <div class="col-lg-9">
    {!! Form::text('photo', (isset($data->photo) ? $data->photo : ''), ['class' => $errors->has('photo') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('photo') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Position </label>
  <div class="col-lg-9">
    {!! Form::text('position', (isset($data->position) ? $data->position : ''), ['class' => $errors->has('position') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('position') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Facebook </label>
  <div class="col-lg-9">
    {!! Form::text('social_facebook', (isset($data->social_facebook) ? $data->social_facebook : ''), ['class' => $errors->has('social_facebook') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('social_facebook') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Twitter </label>
  <div class="col-lg-9">
    {!! Form::text('social_twitter', (isset($data->social_twitter) ? $data->social_twitter : ''), ['class' => $errors->has('social_twitter') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('social_twitter') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Instagram </label>
  <div class="col-lg-9">
    {!! Form::text('social_instagram', (isset($data->social_instagram) ? $data->social_instagram : ''), ['class' => $errors->has('social_instagram') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('social_instagram') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Description </label>
  <div class="col-lg-9">
    {!! Form::textarea('description', (isset($data->description) ? $data->description : ''), [ 'id' => 'kt-tinymce-1', 'class' => $errors->has('description') ? 'form-control is-invalid' : 'form-control']) !!}
    @error('description') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

@include('includes.partial.datatable.form')
