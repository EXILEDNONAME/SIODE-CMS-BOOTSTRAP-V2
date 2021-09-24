@extends('layouts.backend.system.section-custom')
@push('title', 'Section Count')

@push('content-body')

@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert"> {{ $message }} </div><hr>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger" role="alert"> {{ $message }} </div><hr>
@endif

@if (!empty($data->id))
<form method="POST" id="form-exilednoname" action="{{ URL::current() }}/update" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
  {{ csrf_field() }}

  <input class="form-control" name="id" type="hidden" value="{{ $data->id }}">
  <input class="form-control" name="updated_by" type="hidden" value="{{ Auth::User()->id }}">
  @include($path . '.form', ['formMode' => 'edit'])
</form>
@else
<form method="POST" id="form-exilednoname" action="{{ URL::current() }}/store" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
  {{ csrf_field() }}

  <input class="form-control" name="created_by" type="hidden" value="{{ Auth::User()->id }}">
  @include($path . '.form', ['formMode' => 'create'])
</form>
@endif

@endpush
