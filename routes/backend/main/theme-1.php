<?php

// THEMES - 1
Route::group([
  'as' => 'main.themes.t1.',
  'prefix' => 'dashboard/themes-1',
  'namespace' => 'Backend\Main\Theme',
], function(){
  Route::get('status-done/{id}', 'T1Controller@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'T1Controller@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'T1Controller@enable')->name('enable');
  Route::get('disable/{id}', 'T1Controller@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'T1Controller@status')->name('status');
  Route::get('delete/{id}', 'T1Controller@delete')->name('delete');
  Route::get('deleteall', 'T1Controller@deleteall')->name('deleteall');
  Route::resource('/', 'T1Controller')->parameters(['' => 'id']);
});
