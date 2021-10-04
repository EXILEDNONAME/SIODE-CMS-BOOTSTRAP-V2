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

// SECTION - CONTACT-US
Route::group([
  'as' => 'main.themes.t3.contact-us.',
  'prefix' => 'dashboard/themes-3/contact-us',
  'namespace' => 'Backend\Main\T3',
], function(){
  Route::get('/', 'ContactUsController@index')->name('index');
  Route::post('store', 'ContactUsController@store')->name('store');
  Route::post('update', 'ContactUsController@update')->name('update');
});
