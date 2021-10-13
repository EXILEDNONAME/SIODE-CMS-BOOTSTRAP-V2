<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Name </label>
  <div class="col-lg-9">
    {!! Form::text('name', (isset($data->name) ? $data->name : ''), ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

@if ( $formMode == 'create')
<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Image </label>
  <div class="col-lg-9 col-xl-6">
    <div class="image-input image-input-outline" id="kt_image_1">
      <div class="image-input-wrapper" style="background-image: url(/assets/backend/media/users/blank.png)"></div>
      <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
        <i class="fa fa-pen icon-sm text-muted"></i>
        <input type="file" name="image" accept=".png, .jpg, .jpeg" />
        <input type="hidden" name="profile_avatar_remove" />
      </label>
      <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
        <i class="ki ki-bold-close icon-xs text-muted"></i>
      </span>
    </div>
    <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
  </div>
</div>
@else
<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Image </label>
  <div class="col-lg-9 col-xl-6">
    <div class="image-input image-input-outline" id="kt_image_1">
      <div class="image-input-wrapper" style="background-image: url('/files/user-{{ Auth::user()->id }}/client/{{ $data->image }}')"></div>
      <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
        <i class="fa fa-pen icon-sm text-muted"></i>
        <input type="file" name="image" accept=".png, .jpg, .jpeg" />
        <input type="hidden" name="profile_avatar_remove" />
      </label>
      <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
        <i class="ki ki-bold-close icon-xs text-muted"></i>
      </span>
    </div>
    <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
  </div>
</div>
@endif

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Description </label>
  <div class="col-lg-9">
    {!! Form::textarea('description', (isset($data->description) ? $data->description : ''), [ 'id' => 'kt-tinymce-1', 'class' => $errors->has('description') ? 'form-control is-invalid' : 'form-control']) !!}
    @error('description') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

@include('includes.partial.datatable.form')
