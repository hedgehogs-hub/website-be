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

Route::get('/clients', 'ClientsController@get');
Route::get('/messages', 'MessagesController@get');
Route::get('/portfolio', 'PortfolioController@show');
Route::get('/services', 'ServicesController@show');
Route::get('/team', 'TeamController@get');
Route::get('/testimonials', 'TestimonialsController@show');
Route::post('/send', 'MailController@send');

