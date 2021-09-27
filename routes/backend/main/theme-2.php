<?php

// THEMES 2
Route::group([
  'as' => 'main.themes.t2.',
  'prefix' => 'dashboard/themes-2',
  'namespace' => 'Backend\Main\Theme',
], function(){
  Route::get('/', 'T2Controller@index')->name('index');
});

// THEMES 2 - ABOUT
Route::group([
  'as' => 'main.themes.t2.about.',
  'prefix' => 'dashboard/themes-2/about',
  'namespace' => 'Backend\Main\T2',
], function(){
  Route::get('/', 'AboutController@index')->name('index');
  Route::post('store', 'AboutController@store')->name('store');
  Route::post('update', 'AboutController@update')->name('update');
});

// SECTION - CLIENTS
Route::group([
  'as' => 'main.themes.t2.client.',
  'prefix' => 'dashboard/themes-2/client',
  'namespace' => 'Backend\Main\T2',
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

// SECTION - CONTACT-US
Route::group([
  'as' => 'main.themes.t2.contact-us.',
  'prefix' => 'dashboard/themes-2/contact-us',
  'namespace' => 'Backend\Main\T2',
], function(){
  Route::get('/', 'ContactUsController@index')->name('index');
  Route::post('store', 'ContactUsController@store')->name('store');
  Route::post('update', 'ContactUsController@update')->name('update');
});

// THEMES 2 - COUNT
Route::group([
  'as' => 'main.themes.t2.count.',
  'prefix' => 'dashboard/themes-2/count',
  'namespace' => 'Backend\Main\T2',
], function(){
  Route::get('/', 'CountController@index')->name('index');
  Route::post('store', 'CountController@store')->name('store');
  Route::post('update', 'CountController@update')->name('update');
});

// SECTION - PRICING
Route::group([
  'as' => 'main.themes.t2.pricing.',
  'prefix' => 'dashboard/themes-2/pricing',
  'namespace' => 'Backend\Main\T2',
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
  'as' => 'main.themes.t2.service.',
  'prefix' => 'dashboard/themes-2/service',
  'namespace' => 'Backend\Main\T2',
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

// SECTION - SKILL
Route::group([
  'as' => 'main.themes.t2.skill.',
  'prefix' => 'dashboard/themes-2/skill',
  'namespace' => 'Backend\Main\T2',
], function(){
  Route::get('/', 'SkillController@index')->name('index');
  Route::post('store', 'SkillController@store')->name('store');
  Route::post('update', 'SkillController@update')->name('update');
});

// SECTION - TEAM
Route::group([
  'as' => 'main.themes.t2.team.',
  'prefix' => 'dashboard/themes-2/team',
  'namespace' => 'Backend\Main\T2',
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

// SECTION - TESTIMONIALS
Route::group([
  'as' => 'main.themes.t2.testimonial.',
  'prefix' => 'dashboard/themes-2/testimonial',
  'namespace' => 'Backend\Main\T2',
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
