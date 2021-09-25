@extends('layouts.backend.system.index_non-editable-theme-detail')
@push('title', 'Themes')

@push('content-head')
<th> Name </th>
@endpush

@push('content-body')
{ data: 'name' },
@endpush
