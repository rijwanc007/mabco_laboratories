<?php


Route::get('/', 'FrontEnd\IndexController@index')->name('frontend.index');

Route::resource('/about-us','FrontEnd\AboutController');
Route::get('/about-us','FrontEnd\AboutController@index')->name('frontend.about');

Route::resource('/research','FrontEnd\ResearchController');
Route::get('/research','FrontEnd\ResearchController@index')->name('frontend.research');

Route::resource('/mission','FrontEnd\MissionController');
Route::get('/mission','FrontEnd\MissionController@index')->name('frontend.mission');

Route::resource('/product','FrontEnd\ProductController');
Route::get('/product/{id}/{category_id}','FrontEnd\ProductController@product')->name('frontend.product');

Route::resource('/category','FrontEnd\CategoryController');
Route::get('/category-{id}','FrontEnd\CategoryController@category')->name('frontend.category');

Route::resource('/top-product','FrontEnd\TopController');
Route::get('/top-product','FrontEnd\TopController@index')->name('frontend.top');

Route::resource('/contact-us','BackEnd\ContactController');
Route::get('/contact-us','BackEnd\ContactController@store')->name('contact-us.store');

Route::resource('/subscribe-us','FrontEnd\SubscriberController');
Route::get('/subscribe-us','FrontEnd\SubscriberController@store')->name('subscribe-us.store');

Route::resource('/list','FrontEnd\ListController');
Route::get('/list','FrontEnd\ListController@index')->name('frontend.list');

Route::resource('/produced','FrontEnd\ProducedController');
Route::get('/produced','FrontEnd\ProducedController@index')->name('frontend.produced');

Auth::routes();
Route::group(['middleware' => ['preventbackbutton','auth']],function() {
Route::get('/home', 'BackEnd\IndexController@index')->name('home');

    Route::resource('/user', 'BackEnd\UserController');
    Route::get('user-index', 'BackEnd\UserController@index')->name('user.index');
    Route::get('user-create', 'BackEnd\UserController@create')->name('user.create');
    Route::get('user-search','BackEnd\UserController@search')->name('user.search');

    Route::resource('/contact', 'BackEnd\ContactController');
    Route::get('contact-index','BackEnd\ContactController@index')->name('contact.index');
    Route::get('contact-search','BackEnd\ContactController@search')->name('contact.search');

    Route::resource('/subscriber','BackEnd\SubscriberController');
    Route::get('subscriber-index','BackEnd\SubscriberController@index')->name('subscriber.index');
    Route::get('subscriber-search','BackEnd\SubscriberController@search')->name('subscriber.search');

    Route::resource('/review','BackEnd\ReviewController');
    Route::get('review-index','BackEnd\ReviewController@index')->name('review.index');
    Route::get('review-create','BackEnd\ReviewController@create')->name('review.create');
    Route::get('review-search','BackEnd\ReviewController@search')->name('review.search');



    Route::resource('/product-back','BackEnd\ProductController');
    Route::get('product-back-index','BackEnd\ProductController@index')->name('product-back.index');
    Route::get('product-back-create','BackEnd\ProductController@create')->name('product-back.create');
    Route::get('product-back-search','BackEnd\ProductController@search')->name('product-back.search');

    Route::resource('/type','BackEnd\CategoryController');
    Route::get('type-index','BackEnd\CategoryController@index')->name('type.index');
    Route::get('type-create','BackEnd\CategoryController@create')->name('type.create');
    Route::get('type-search','BackEnd\CategoryController@search')->name('type.search');
});
