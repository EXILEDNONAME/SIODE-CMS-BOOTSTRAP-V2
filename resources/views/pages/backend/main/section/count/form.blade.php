<div class="form-group row">
  <label class="col-lg-1 col-form-label"> Count 1 </label>
  <div class="col-lg-1">
    {!! Form::number('count_1', (isset($data->count_1) ? $data->count_1 : ''), ['class' => $errors->has('count_1') ? 'form-control is-invalid' : 'form-control', 'placeholder' => '0']) !!}
    @error('count_1') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
  <div class="col-lg-10">
    {!! Form::text('count_1_name', (isset($data->count_1_name) ? $data->count_1_name : ''), ['class' => $errors->has('count_1_name') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Enter count name ...']) !!}
    @error('count_1_name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-1 col-form-label"> Count 2 </label>
  <div class="col-lg-1">
    {!! Form::number('count_2', (isset($data->count_2) ? $data->count_2 : ''), ['class' => $errors->has('count_2') ? 'form-control is-invalid' : 'form-control', 'placeholder' => '0']) !!}
    @error('count_2') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
  <div class="col-lg-10">
    {!! Form::text('count_2_name', (isset($data->count_2_name) ? $data->count_2_name : ''), ['class' => $errors->has('count_2_name') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Enter count name ...']) !!}
    @error('count_2_name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-1 col-form-label"> Count 3 </label>
  <div class="col-lg-1">
    {!! Form::number('count_3', (isset($data->count_3) ? $data->count_3 : ''), ['class' => $errors->has('count_3') ? 'form-control is-invalid' : 'form-control', 'placeholder' => '0']) !!}
    @error('count_3') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
  <div class="col-lg-10">
    {!! Form::text('count_3_name', (isset($data->count_3_name) ? $data->count_3_name : ''), ['class' => $errors->has('count_3_name') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Enter count name ...']) !!}
    @error('count_3_name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-1 col-form-label"> Count 4 </label>
  <div class="col-lg-1">
    {!! Form::number('count_4', (isset($data->count_4) ? $data->count_4 : ''), ['class' => $errors->has('count_4') ? 'form-control is-invalid' : 'form-control', 'placeholder' => '0']) !!}
    @error('count_4') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
  <div class="col-lg-10">
    {!! Form::text('count_4_name', (isset($data->count_4_name) ? $data->count_4_name : ''), ['class' => $errors->has('count_4_name') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Enter count name ...']) !!}
    @error('count_4_name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>
