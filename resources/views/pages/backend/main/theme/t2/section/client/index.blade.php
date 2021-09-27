@extends('layouts.backend.system.index')
@push('title', 'Section Clients')

@push('content-head')
<th> Name </th>
<th> Image </th>
<th> Description </th>
@endpush

@push('content-body')
{ data: 'name' },
{ data: 'image' },
{ data: 'description' },
@endpush
