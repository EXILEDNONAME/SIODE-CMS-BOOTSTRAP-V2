<?php

// THEMES
Route::group([
  'as' => 'main.themes.',
  'prefix' => 'dashboard/themes',
  'namespace' => 'Backend\Main',
], function(){
  Route::get('enable/{id}', 'ThemeController@enable')->name('enable');
  Route::get('disable/{id}', 'ThemeController@disable')->name('disable');
  Route::get('/', 'ThemeController@index')->name('index');
});

// SECTIONS
Route::group([
  'as' => 'main.sections.',
  'prefix' => 'dashboard/sections',
  'namespace' => 'Backend\Main',
], function(){
  Route::get('/', 'SectionController@index')->name('index');
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
