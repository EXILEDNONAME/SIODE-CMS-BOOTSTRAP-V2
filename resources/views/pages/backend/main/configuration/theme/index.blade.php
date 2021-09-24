@extends('layouts.backend.system.index')
@push('title', 'Configuration Themes')

@push('content-head')
<th> Theme </th>
<th> Name </th>
<th> Section </th>
<th> Description </th>
@endpush

@push('content-body')
{ data: 'id_themes' },
{ data: 'name' },
{ data: 'section' },
{ data: 'description' },
@endpush
