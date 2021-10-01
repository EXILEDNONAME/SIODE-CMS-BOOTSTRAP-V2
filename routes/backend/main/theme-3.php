<?php

// THEMES 3
Route::group([
  'as' => 'main.themes.t3.',
  'prefix' => 'dashboard/themes-3',
  'namespace' => 'Backend\Main\Theme',
], function(){
  Route::get('enable/{id}', 'T3Controller@enable')->name('enable');
  Route::get('disable/{id}', 'T3Controller@disable')->name('disable');
  Route::get('/', 'T3Controller@index')->name('index');
});
