<?php

use App\Models\Backend\Main\Theme;

function themes() {
  $items = Theme::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

function filter_themes() {
  $items = Theme::orderBy('name','asc')->pluck('name', 'name')->toArray();
  return $items;
}
