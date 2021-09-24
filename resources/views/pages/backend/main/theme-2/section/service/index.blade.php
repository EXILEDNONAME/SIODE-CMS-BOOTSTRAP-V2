@extends('layouts.backend.system.index')
@push('title', 'Section Services')

@push('content-head')
<th> Name </th>
<th> Sub Title </th>
@endpush

@push('content-body')
{ data: 'name' },
{ data: 'sub_title' },
@endpush
