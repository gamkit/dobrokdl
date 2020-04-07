<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::group(['prefix' => '/'], function() {

    // Route::get('/page/{slug}', 'HomeController@index')->name('kdl.page');


    Route::get('/', 'HomeController@index')->name('kdl.home');
    

    Route::get('/about', 'AboutController@index')->name('kdl.about');
    Route::get('/about/team', 'AboutController@team')->name('kdl.about.team');
    Route::get('/about/founders', 'AboutController@founders')->name('kdl.about.founders');
    Route::get('/about/trustees', 'AboutController@trustees')->name('kdl.about.trustees');

    
    // Route::get('/news', 'NewsController@index')->name('kdl.news');
    Route::resource('/news', 'NewsController', ["names" => [
        "index" => "kdl.news",
        "show" => "kdl.news.show"
    ]]);
    Route::get('/medianews', 'MediaNewsController@index')->name('kdl.medianews');

    
    Route::get('/collects/urgent', 'CollectsController@urgent')->name("kdl.collects.urgent");
    Route::resource('/collects', 'CollectsController', ["names" => [
        "index" => "kdl.collects",
        "show" => "kdl.collects.show"
    ]]);

    
    /* 
    * Проекты
    */
    Route::resource('/projects', 'ProjectsController', ["names" => [
        "index" => "kdl.projects",
        "show" => "kdl.projects.show"
    ]]);


    Route::get('/volunteers', 'VolunteersController@index')->name('kdl.volunteers');


    Route::get('/documents', 'DocumentsController@index')->name('kdl.documents');

    
    Route::get('/reports', 'ReportsController@index')->name('kdl.reports');
    Route::get('/reports/media', 'ReportsController@media')->name('kdl.reports.media');
    Route::get('/reports/financial', 'ReportsController@financial')->name('kdl.reports.financial');


    Route::get('/contacts', 'ReportsController@financial')->name('kdl.contacts');
    Route::get('/help', 'HelpController@financial')->name('kdl.help');

});



// Voyager Admin Routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
