<?php

// MAIN - THEMES
Route::group([
  'as' => 'main.themes.',
  'prefix' => 'dashboard/themes',
  'namespace' => 'Backend\Main',
], function(){
  Route::get('/', 'ThemeController@index')->name('index');
});

// MAIN - GENERALS
Route::group([
  'as' => 'main.themes.generals.',
  'prefix' => 'dashboard/generals',
  'namespace' => 'Backend\Main',
], function(){
  Route::get('/', 'GeneralController@index')->name('index');
  Route::post('store', 'GeneralController@store')->name('store');
  Route::post('update', 'GeneralController@update')->name('update');
});
