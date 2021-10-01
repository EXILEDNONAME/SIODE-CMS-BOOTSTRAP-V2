@extends('layouts.backend.system.index_non-editable-theme-index')
@push('title', 'T3 Sections')

@push('content-head')
<th> Theme </th>
<th> Name </th>
<th> Description </th>
@endpush

@push('content-body')
{ data: 'id_themes', width: '1' },
{ data: 'name' },
{ data: 'description' },
@endpush
