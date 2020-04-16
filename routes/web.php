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


    Route::get('/', 'HomeController@index')->name('kdl.home');
    Route::get('/donut', 'HomeController@donut')->name('kdl.donut');


    /* 
    * О нас
    */

    Route::get('/about/team', 'AboutController@team')->name('kdl.about.team');
    Route::get('/about/team/{id}', 'AboutController@teamMember')->name('kdl.about.team.show');

    Route::get('/about/founders', 'AboutController@founders')->name('kdl.about.founders');
    Route::get('/about/founders/{id}', 'AboutController@founderMember')->name('kdl.about.founders.show');
    
    Route::get('/about/trustees', 'AboutController@trustees')->name('kdl.about.trustees');
    Route::get('/about/trustees/{id}', 'AboutController@trusteeMember')->name('kdl.about.trustees.show');



    /* 
    * Страницы
    */

    Route::get('/page/{slug}', 'PagesController@show')->name('kdl.pages');
    // Route::post('/volunteers');


    /* 
    * Новости
    */

    Route::resource('/news', 'PostController', ["names" => [
        "index" => "kdl.news",
        "show" => "kdl.news.show"
    ]]);
    Route::get('/medianews', 'PostController@medianews')->name('kdl.medianews');



    /* 
    * Сборы
    */

    Route::get('/collects/urgent', 'CollectsController@urgent')->name("kdl.collects.urgent");
    Route::resource('/collects', 'CollectsController', ["names" => [
        "index" => "kdl.collects",
        "show" => "kdl.collects.show"
    ]]);


    
    /* 
    * Проекты
    */

    Route::get('/projects', 'ProjectsController@index')->name('kdl.projects');
    Route::get('/projects/{id}', 'ProjectsController@show')->name('kdl.projects.show');


    
    /* 
    * Документы
    */
    
    Route::get('/documents', 'DocumentsController@index')->name('kdl.documents');


    
    /* 
    * Отчеты
    */
    
    Route::get('/reports', 'ReportsController@index')->name('kdl.reports');
    
    Route::get('/reports/media', 'ReportsController@media')->name('kdl.reports.media');
    Route::get('/reports/media/{id}', 'ReportsController@mediaShow')->name('kdl.reports.media.show');

    Route::get('/reports/financial', 'ReportsController@financial')->name('kdl.reports.financial');
    


    // Формы & AJAX

    Route::post('/ajax/reports/financial', 'ReportsController@getFinancialReports');
    
    // 
    Route::post('/form/question', 'FormsController@question')->name('kdl.forms.question');
    Route::post('/form/volunteer', 'FormsController@volunteer')->name('kdl.forms.volunteer');

    Route::get('/form/done', 'FormsController@formDone')->name('kdl.forms.done');
});






/* 
* Админка
*/

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
