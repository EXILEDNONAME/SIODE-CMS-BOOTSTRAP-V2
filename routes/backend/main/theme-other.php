<?php

// THEMES - OTHER
Route::group([
  'as' => 'main.themes.other.',
  'prefix' => 'dashboard/themes/1',
  'namespace' => 'Backend\Main\Theme',
], function(){
  Route::get('status-done/{id}', 'OtherController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'OtherController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'OtherController@enable')->name('enable');
  Route::get('disable/{id}', 'OtherController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'OtherController@status')->name('status');
  Route::get('delete/{id}', 'OtherController@delete')->name('delete');
  Route::get('deleteall', 'OtherController@deleteall')->name('deleteall');
  Route::resource('/', 'OtherController')->parameters(['' => 'id']);
});

// SECTION - (2) ABOUTS
Route::group([
  'as' => 'system.main.section.2.about.',
  'prefix' => 'dashboard/sections/2/about',
  'namespace' => 'Backend\Main\T2',
], function(){
  Route::get('/', 'AboutController@index')->name('index');
  Route::post('store', 'AboutController@store')->name('store');
  Route::post('update', 'AboutController@update')->name('update');
});

// THEMES - BIZLAND
Route::group([
  'as' => 'main.themes.bizland.',
  'prefix' => 'dashboard/themes/2',
  'namespace' => 'Backend\Main\Theme',
], function(){
  Route::get('status-done/{id}', 'BizlandController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'BizlandController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'BizlandController@enable')->name('enable');
  Route::get('disable/{id}', 'BizlandController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'BizlandController@status')->name('status');
  Route::get('delete/{id}', 'BizlandController@delete')->name('delete');
  Route::get('deleteall', 'BizlandController@deleteall')->name('deleteall');
  Route::resource('/', 'BizlandController')->parameters(['' => 'id']);
});

// CONFIGURATION - GENERAL
Route::group([
  'as' => 'main.sections.',
  'prefix' => 'dashboard/sections',
  'namespace' => 'Backend\Main',
], function(){
  Route::get('status-done/{id}', 'SectionController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'SectionController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'SectionController@enable')->name('enable');
  Route::get('disable/{id}', 'SectionController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'SectionController@status')->name('status');
  Route::get('delete/{id}', 'SectionController@delete')->name('delete');
  Route::get('deleteall', 'SectionController@deleteall')->name('deleteall');
  Route::resource('/', 'SectionController')->parameters(['' => 'id']);
});

// CONFIGURATION - GENERAL
Route::group([
  'as' => 'main.configuration.generals.',
  'prefix' => 'dashboard/configuration/generals',
  'namespace' => 'Backend\Main',
], function(){
  Route::get('status-done/{id}', 'ConfigurationGeneralController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'ConfigurationGeneralController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'ConfigurationGeneralController@enable')->name('enable');
  Route::get('disable/{id}', 'ConfigurationGeneralController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'ConfigurationGeneralController@status')->name('status');
  Route::get('delete/{id}', 'ConfigurationGeneralController@delete')->name('delete');
  Route::get('deleteall', 'ConfigurationGeneralController@deleteall')->name('deleteall');
  Route::resource('/', 'ConfigurationGeneralController')->parameters(['' => 'id']);
});
