<div class="form-group row">
  <div class="col-lg-3">
    <label> Title : </label>
    {!! Form::text('title', (isset($data->title) ? $data->title : ''), ['class' => $errors->has('title') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Enter Title']) !!}
    <span class="form-text text-muted"> Please enter title </span>
  </div>
  <div class="col-lg-9">
    <label> Sub-Title : </label>
    {!! Form::text('sub_title', (isset($data->sub_title) ? $data->sub_title : ''), ['class' => $errors->has('sub_title') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Enter Sub-Title']) !!}
    <span class="form-text text-muted"> Please enter sub-title </span>
  </div>
</div>

<hr>

<div class="form-group row">
  <div class="col-lg-3">
    <label> Content Title : </label>
    {!! Form::text('content_title', (isset($data->content_title) ? $data->content_title : ''), ['class' => $errors->has('content_title') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Enter Content Title']) !!}
    <span class="form-text text-muted"> Please enter content title </span>
  </div>
  <div class="col-lg-9">
    <label> Content Description 1 : </label>
    {!! Form::text('content_description_1', (isset($data->content_description_1) ? $data->content_description_1 : ''), ['class' => $errors->has('content_description_1') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Enter Content Description']) !!}
    <span class="form-text text-muted"> Please enter content description 1 </span>
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Content Image </label>
  <div class="col-lg-9">
    {!! Form::text('content_title', (isset($data->content_title) ? $data->content_title : ''), ['class' => $errors->has('content_title') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Enter Title']) !!}
    @error('image') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    <span class="form-text text-muted"> Please enter url image </span>
  </div>
</div>

<hr>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"><i class="fas fa-store"></i></label>
  <div class="col-lg-9">
    {!! Form::text('content_1_title', (isset($data->content_1_title) ? $data->content_1_title : ''), ['class' => $errors->has('content_1_title') ? 'form-control is-invalid' : 'form-control']) !!}
    @error('content_1_title') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    <span class="form-text text-muted"> Please enter content 1 title </span>
  </div>
</div>
<div class="form-group row">
  <label class="col-lg-3 col-form-label"></label>
  <div class="col-lg-9">
    {!! Form::text('content_1_description', (isset($data->content_1_description) ? $data->content_1_description : ''), ['class' => $errors->has('content_1_description') ? 'form-control is-invalid' : 'form-control']) !!}
    @error('content_1_description') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    <span class="form-text text-muted"> Please enter content 1 description </span>
  </div>
</div>

<hr>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"><i class="fas fa-image"></i></label>
  <div class="col-lg-9">
    {!! Form::text('content_2_title', (isset($data->content_2_title) ? $data->content_2_title : ''), ['class' => $errors->has('content_2_title') ? 'form-control is-invalid' : 'form-control']) !!}
    @error('content_2_title') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    <span class="form-text text-muted"> Please enter content 2 title </span>
  </div>
</div>
<div class="form-group row">
  <label class="col-lg-3 col-form-label"></label>
  <div class="col-lg-9">
    {!! Form::text('content_2_description', (isset($data->content_2_description) ? $data->content_2_description : ''), ['class' => $errors->has('content_2_description') ? 'form-control is-invalid' : 'form-control']) !!}
    @error('content_2_description') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    <span class="form-text text-muted"> Please enter content 2 description </span>
  </div>
</div>

<hr>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Content Description 2 </label>
  <div class="col-lg-9">
    {!! Form::text('content_description_2', (isset($data->content_description_2) ? $data->content_description_2 : ''), ['class' => $errors->has('content_description_2') ? 'form-control is-invalid' : 'form-control']) !!}
    @error('content_description_2') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    <span class="form-text text-muted"> Please enter content description 2 </span>
  </div>
</div>
