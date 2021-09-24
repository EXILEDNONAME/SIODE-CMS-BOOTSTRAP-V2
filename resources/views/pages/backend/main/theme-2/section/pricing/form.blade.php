<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Default </label>
  <div class="col-lg-9">
    {{ Form::select('default', ['1' => 'Yes', '2' => 'No'], (isset($data->default) ? $data->default : '2'), ['class' => $errors->has('default') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) }}
    @error('default') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Premium </label>
  <div class="col-lg-9">
    {{ Form::select('premium', ['1' => 'Yes', '2' => 'No'], (isset($data->premium) ? $data->premium : '2'), ['class' => $errors->has('premium') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) }}
    @error('premium') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
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
  <label class="col-lg-3 col-form-label"> Price </label>
  <div class="col-lg-9">
    {!! Form::text('price', (isset($data->price) ? $data->price : ''), ['class' => $errors->has('price') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('price') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Unit </label>
  <div class="col-lg-9">
    {!! Form::text('unit', (isset($data->unit) ? $data->unit : ''), ['class' => $errors->has('unit') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('unit') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
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
