@extends('layouts.backend.system.index')
@push('title', 'Section Testimonials')

@push('content-head')
<th> Name </th>
<th> Photo </th>
<th> Position </th>
<th> Description </th>
@endpush

@push('content-body')
{ data: 'name' },
{ data: 'photo' },
{ data: 'position' },
{ data: 'description' },
@endpush
