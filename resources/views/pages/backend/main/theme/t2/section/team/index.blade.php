@extends('layouts.backend.system.index')
@push('title', 'Section Teams')

@push('content-head')
<th> Name </th>
<th> Photo </th>
<th> Position </th>
<th> Facebook </th>
<th> Twitter </th>
<th> Instagram </th>
@endpush

@push('content-body')
{ data: 'name' },
{ data: 'photo' },
{ data: 'position' },
{ data: 'social_facebook' },
{ data: 'social_twitter' },
{ data: 'social_instagram' },
@endpush
