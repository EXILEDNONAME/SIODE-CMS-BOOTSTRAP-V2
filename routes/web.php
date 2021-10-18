<?php

Auth::routes();

Route::get('/', 'Frontend\GlobalController@index')->name('frontend.index');
Route::get('/home', 'HomeController@index')->name('home');
Route::view('/radio', 'pages.frontend.radio');


Route::get('/dashboard', 'Backend\DashboardController@index')->name('dashboard.index');
Route::get('/dashboard/file-manager', 'Backend\DashboardController@filemanager')->name('dashboard.file-manager');
Route::get('/dashboard/help-center', 'Backend\DashboardController@help_center')->name('dashboard.help-center');
Route::get('/dashboard/logout', 'Backend\DashboardController@logout')->name('dashboard.logout');
Route::get('/lang/{language}', 'LocalizationController@switch')->name('localization.switch');

// MAIN
require __DIR__.'/backend/main/configuration.php';
// require __DIR__.'/backend/main/theme-1.php';
// require __DIR__.'/backend/main/theme-2.php';
// require __DIR__.'/backend/main/theme-3.php';

// SYSTEM
require __DIR__.'/backend/system/general.php';
require __DIR__.'/backend/system/dummy.php';
require __DIR__.'/backend/system/management.php';
