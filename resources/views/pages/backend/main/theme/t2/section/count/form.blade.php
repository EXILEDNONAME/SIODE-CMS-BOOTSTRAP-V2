<div class="form-group row">
  <div class="col-lg-3">
    <label> Count 1 </label>
    {!! Form::number('context_1', (isset($data->context_1) ? $data->context_1 : ''), ['class' => $errors->has('context_1') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Enter Number Context 1']) !!}
    <span class="form-text text-muted"> Please enter number count 1 </span>
  </div>
  <div class="col-lg-3">
    <label> Count 2 </label>
    {!! Form::number('context_2', (isset($data->context_2) ? $data->context_2 : ''), ['class' => $errors->has('context_2') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Enter Number Context 2']) !!}
    <span class="form-text text-muted"> Please enter number count 2 </span>
  </div>
  <div class="col-lg-3">
    <label> Count 3 </label>
    {!! Form::number('context_3', (isset($data->context_3) ? $data->context_3 : ''), ['class' => $errors->has('context_3') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Enter Number Context 3']) !!}
    <span class="form-text text-muted"> Please enter number count 3 </span>
  </div>
  <div class="col-lg-3">
    <label> Count 4 </label>
    {!! Form::number('context_4', (isset($data->context_4) ? $data->context_4 : ''), ['class' => $errors->has('context_4') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Enter Number Context 4']) !!}
    <span class="form-text text-muted"> Please enter number count 4 </span>
  </div>
</div>

<div class="form-group row">
  <div class="col-lg-3">
    <label> Context 1 Title </label>
    {!! Form::text('context_1_title', (isset($data->context_1_title) ? $data->context_1_title : ''), ['class' => $errors->has('context_1_title') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Enter Number Context 1']) !!}
    <span class="form-text text-muted"> Please enter number context 1 title </span>
  </div>
  <div class="col-lg-3">
    <label> Context 2 Title </label>
    {!! Form::text('context_2_title', (isset($data->context_2_title) ? $data->context_2_title : ''), ['class' => $errors->has('context_2_title') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Enter Number Context 2']) !!}
    <span class="form-text text-muted"> Please enter number context 1 title </span>
  </div>
  <div class="col-lg-3">
    <label> Context 3 Title </label>
    {!! Form::text('context_3_title', (isset($data->context_3_title) ? $data->context_3_title : ''), ['class' => $errors->has('context_3_title') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Enter Number Context 3']) !!}
    <span class="form-text text-muted"> Please enter number context 1 title </span>
  </div>
  <div class="col-lg-3">
    <label> Context 4 Title </label>
    {!! Form::text('context_4_title', (isset($data->context_4_title) ? $data->context_4_title : ''), ['class' => $errors->has('context_4_title') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Enter Number Context 4']) !!}
    <span class="form-text text-muted"> Please enter number context 4 title </span>
  </div>
</div>
