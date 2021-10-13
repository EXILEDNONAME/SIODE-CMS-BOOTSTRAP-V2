<?php

// MAIN - SECTIONS
Route::group([
  'as' => 'main.sections.',
  'prefix' => 'dashboard/sections',
  'namespace' => 'Backend\Main',
], function(){
  Route::get('/', 'SectionController@index')->name('index');
  Route::get('enable/{id}', 'SectionController@enable')->name('enable');
  Route::get('disable/{id}', 'SectionController@disable')->name('disable');
});

// MAIN - THEMES
Route::group([
  'as' => 'main.themes.',
  'prefix' => 'dashboard/themes',
  'namespace' => 'Backend\Main',
], function(){
  Route::get('/', 'ThemeController@index')->name('index');
  Route::get('enable/{id}', 'ThemeController@enable')->name('enable');
  Route::get('disable/{id}', 'ThemeController@disable')->name('disable');
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

// SECTIONS

// SECTION - ABOUT
Route::group([
  'as' => 'main.sections.about.',
  'prefix' => 'dashboard/sections/about',
  'namespace' => 'Backend\Main\Section',
], function(){
  Route::get('/', 'AboutController@index')->name('index');
  Route::post('store', 'AboutController@store')->name('store');
  Route::post('update', 'AboutController@update')->name('update');
});

// THEMES 2 - COUNT
Route::group([
  'as' => 'main.sections.count.',
  'prefix' => 'dashboard/sections/count',
  'namespace' => 'Backend\Main\Section',
], function(){
  Route::get('/', 'CountController@index')->name('index');
  Route::post('store', 'CountController@store')->name('store');
  Route::post('update', 'CountController@update')->name('update');
});

// SECTION - CLIENT
Route::group([
  'as' => 'main.sections.client.',
  'prefix' => 'dashboard/sections/client',
  'namespace' => 'Backend\Main\Section',
], function(){
  Route::get('status-done/{id}', 'ClientController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'ClientController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'ClientController@enable')->name('enable');
  Route::get('disable/{id}', 'ClientController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'ClientController@status')->name('status');
  Route::get('delete/{id}', 'ClientController@delete')->name('delete');
  Route::get('deleteall', 'ClientController@deleteall')->name('deleteall');
  Route::resource('/', 'ClientController')->parameters(['' => 'id']);
});

// SECTION - TESTIMONIAL
Route::group([
  'as' => 'main.sections.testimonial.',
  'prefix' => 'dashboard/sections/testimonial',
  'namespace' => 'Backend\Main\Section',
], function(){
  Route::get('status-done/{id}', 'TestimonialController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'TestimonialController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'TestimonialController@enable')->name('enable');
  Route::get('disable/{id}', 'TestimonialController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'TestimonialController@status')->name('status');
  Route::get('delete/{id}', 'TestimonialController@delete')->name('delete');
  Route::get('deleteall', 'TestimonialController@deleteall')->name('deleteall');
  Route::resource('/', 'TestimonialController')->parameters(['' => 'id']);
});

// SECTION - CONTACT
Route::group([
  'as' => 'main.sections.contact.',
  'prefix' => 'dashboard/sections/contact',
  'namespace' => 'Backend\Main\Section',
], function(){
  Route::get('/', 'ContactController@index')->name('index');
  Route::post('store', 'ContactController@store')->name('store');
  Route::post('update', 'ContactController@update')->name('update');
});

// SECTION - PRICING
Route::group([
  'as' => 'main.sections.pricing.',
  'prefix' => 'dashboard/sections/pricing',
  'namespace' => 'Backend\Main\Section',
], function(){
  Route::get('status-done/{id}', 'PricingController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'PricingController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'PricingController@enable')->name('enable');
  Route::get('disable/{id}', 'PricingController@disable')->name('disable');
  Route::get('default_on/{id}', 'PricingController@default_on')->name('default-on');
  Route::get('default_off/{id}', 'PricingController@default_off')->name('default-off');
  Route::get('premium_on/{id}', 'PricingController@premium_on')->name('premium-on');
  Route::get('premium_off/{id}', 'PricingController@premium_off')->name('premium-off');
  Route::get('status/{id}/{slug}', 'PricingController@status')->name('status');
  Route::get('delete/{id}', 'PricingController@delete')->name('delete');
  Route::get('deleteall', 'PricingController@deleteall')->name('deleteall');
  Route::resource('/', 'PricingController')->parameters(['' => 'id']);
});

// SECTION - SERVICE
Route::group([
  'as' => 'main.sections.service.',
  'prefix' => 'dashboard/sections/service',
  'namespace' => 'Backend\Main\Section',
], function(){
  Route::get('status-done/{id}', 'ServiceController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'ServiceController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'ServiceController@enable')->name('enable');
  Route::get('disable/{id}', 'ServiceController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'ServiceController@status')->name('status');
  Route::get('delete/{id}', 'ServiceController@delete')->name('delete');
  Route::get('deleteall', 'ServiceController@deleteall')->name('deleteall');
  Route::resource('/', 'ServiceController')->parameters(['' => 'id']);
});

// SECTION - TEAM
Route::group([
  'as' => 'main.sections.team.',
  'prefix' => 'dashboard/sections/team',
  'namespace' => 'Backend\Main\Section',
], function(){
  Route::get('status-done/{id}', 'TeamController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'TeamController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'TeamController@enable')->name('enable');
  Route::get('disable/{id}', 'TeamController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'TeamController@status')->name('status');
  Route::get('delete/{id}', 'TeamController@delete')->name('delete');
  Route::get('deleteall', 'TeamController@deleteall')->name('deleteall');
  Route::resource('/', 'TeamController')->parameters(['' => 'id']);
});
