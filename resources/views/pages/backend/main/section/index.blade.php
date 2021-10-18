@extends('layouts.backend.system.index_non-editable-section-index')
@push('title', 'Sections')

@push('content-head')
<th> Theme </th>
<th> Name </th>
<th> Description </th>
@endpush

@push('content-body')
{ data: 'id_themes' },
{ data: 'name' },
{ data: 'description' },
@endpush
