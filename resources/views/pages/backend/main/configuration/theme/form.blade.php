<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Theme </label>
  <div class="col-lg-9">
    {!! Form::select('id_theme', themes(), (isset($data->id_theme) ? $data->id_theme : NULL), ['placeholder' => '- Select Theme -', 'class' => 'form-control', 'required' => 'required']) !!}
    @error('id_theme') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Name </label>
  <div class="col-lg-9">
    {!! Form::text('name', (isset($data->name) ? $data->name : ''), ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Section </label>
  <div class="col-lg-9">
    {!! Form::text('section', (isset($data->section) ? $data->section : ''), ['class' => $errors->has('section') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('section') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
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
