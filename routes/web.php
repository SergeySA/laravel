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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::group(['middleware'=>'web'], function (){
Route::group([], function (){
    Route::match(['post', 'get'], '/', ['uses'=>'IndexController@execute', 'as'=>'home']);
    Route::get('/page/{alias}', ['uses'=>'PageController@execute', 'as'=>'page']);

//    Auth::routes();
    Auth::routes([
        'register' => false,
        'verify' => true,
        'reset' => false
    ]);
});

Route::group(['prefix'=>'admin','middleware'=>'auth'], function()
{
    Route::get('/', function ()
    {
        if (view()->exists('admin.index')){
            $data = ['title'=>'Панель администратора'];
            return view('admin.index', $data);
        }
    });

    Route::group(['prefix'=>'pages'], function (){
        Route::get('/', ['uses'=>'PagesController@execute', 'as'=>'pages']);
        Route::match(['get', 'post'], '/add', ['uses'=>'PagesAddController@execute', 'as'=>'pageadd']);
        Route::match(['get', 'post', 'delete'], '/edit/{page}', ['uses'=>'PagesEditController@execute', 'as'=>'pageedit']);
    });
    Route::group(['prefix'=>'portfolios'], function (){
        Route::get('/', ['uses'=>'PortfoliosController@execute', 'as'=>'portfolios']);
        Route::match(['get', 'post'], '/add', ['uses'=>'PortfolioAddController@execute', 'as'=>'portfolioadd']);
        Route::match(['get', 'post', 'delete'], '/edit/{portfolio}', ['uses'=>'PortfolioEditController@execute', 'as'=>'portfolioedit']);
    });
    Route::group(['prefix'=>'services'], function (){
        Route::get('/', ['uses'=>'ServiceController@execute', 'as'=>'services']);
        Route::match(['get', 'post'], '/add', ['uses'=>'ServiceAddController@execute', 'as'=>'serviceadd']);
        Route::match(['get', 'post', 'delete'], '/edit/{service}', ['uses'=>'ServiceEditController@execute', 'as'=>'serviceedit']);
    });

});


Route::get('/home', 'HomeController@index')->name('home2');
