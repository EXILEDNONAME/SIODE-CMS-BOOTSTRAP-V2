<?php

// CONFIGURATION - GENERAL
Route::group([
  'as' => 'dashboard.configuration.',
  'prefix' => 'dashboard/configuration',
  'namespace' => 'Backend\System',
], function(){
  Route::get('generals', 'ConfigurationController@general')->name('general');
  Route::post('general-update', 'ConfigurationController@general_update')->name('general-update');
});

// CONFIGURATION - SECTION TEAMS
Route::group([
  'as' => 'dashboard.configuration.',
  'prefix' => 'dashboard/configuration/section',
  'namespace' => 'Backend\System',
], function(){
  Route::get('teams', 'ConfigurationController@team')->name('team');
  Route::post('team-update', 'ConfigurationController@team-update')->name('team-update');
});

// CONFIGURATION - SECTION FEATURES
Route::group([
  'as' => 'dashboard.configuration.',
  'prefix' => 'dashboard/configuration/section',
  'namespace' => 'Backend\System',
], function(){
  Route::get('features', 'ConfigurationController@feature')->name('feature');
  Route::post('feature-update', 'ConfigurationController@feature_update')->name('feature-update');
});
