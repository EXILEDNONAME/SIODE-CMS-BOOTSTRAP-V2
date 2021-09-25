<?php

// THEMES
Route::group([
  'as' => 'main.themes.',
  'prefix' => 'dashboard/themes',
  'namespace' => 'Backend\Main',
], function(){
  Route::get('enable/{id}', 'ThemeController@enable')->name('enable');
  Route::get('disable/{id}', 'ThemeController@disable')->name('disable');
  Route::get('{id}', 'ThemeController@show')->name('show');
  Route::get('{id}/{slug}', 'ThemeController@section_index')->name('section-index');
  Route::get('{id}/{slug}/{categories}', 'ThemeController@section')->name('section');
  Route::get('/', 'ThemeController@index')->name('index');
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

// CONFIGURATION - THEMES
Route::group([
  'as' => 'main.configuration.themes.',
  'prefix' => 'dashboard/configuration/themes',
  'namespace' => 'Backend\Main',
], function(){
  Route::get('status-done/{id}', 'ConfigurationThemeController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'ConfigurationThemeController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'ConfigurationThemeController@enable')->name('enable');
  Route::get('disable/{id}', 'ConfigurationThemeController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'ConfigurationThemeController@status')->name('status');
  Route::get('delete/{id}', 'ConfigurationThemeController@delete')->name('delete');
  Route::get('deleteall', 'ConfigurationThemeController@deleteall')->name('deleteall');
  Route::resource('/', 'ConfigurationThemeController')->parameters(['' => 'id']);
});
