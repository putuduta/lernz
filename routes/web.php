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

Route::get('/', function () {
    return view('welcome');
});



// Route::get('/blog', function (){
//     return view('blog');
// });


// Route::prefix('admin')->group(function() {

//         Route::get('/home', 'PostController@index')->name('home');

// });
Route::get('/page1', 'PagesController@page1');
Route::get('/page2', 'PagesController@page2');
Route::get('/page3', 'PagesController@page3');

Route::get('/donation', 'DonationController@showDonation')->name('donation');
Route::get('/donation-create', 'DonationController@showCreate')->name('donation_show_create');
Route::post('/donation-create/post', 'DonationController@create')->name('donation_create');

Route::get('/donation-update/{id}', 'DonationController@showUpdate')->name('donation_show_update');
Route::put('/donation-update/post/{id}', 'DonationController@update')->name('donation_update');
Route::delete('/donation/{id}', 'DonationController@delete')->name('donation_delete');


Route::get('/registration', 'RegistrationController@showRegistration')->name('registration');
Route::get('/registration-create', 'RegistrationController@showCreate')->name('registration_show_create');
Route::post('/registration-create/post', 'RegistrationController@create')->name('registration_create');

Route::get('/registration-update/{id}', 'RegistrationController@showUpdate')->name('registration_show_update');
Route::put('/registration-update/post/{id}', 'RegistrationController@update')->name('registration_update');
Route::delete('/registration/{id}', 'RegistrationController@delete')->name('registration_delete');


Route::get('/bom_recruitment', 'BomRecruitmentController@showBomrecruitment')->name('bom_recruitment');
Route::get('/bom_recruitment-create', 'BomRecruitmentController@showCreate')->name('bom_recruitment_show_create');
Route::post('/bom_recruitment-create/post', 'BomRecruitmentController@create')->name('bom_recruitment_create');
Route::delete('/bom_recruitment/{id}', 'BomRecruitmentController@delete')->name('bom_recruitment_delete');


Route::get('/welcome-party-shift', 'WelcomePartyShiftController@create');
Route::get('/welcome-party-edit', 'WelcomePartyShiftController@edit');
Route::get('/welcome-party-details', 'WelcomePartyShiftController@show');
Route::get('/welcome-party-attendance', 'WelcomePartyShiftController@show_absence');
//get
//post -> bikin data bary
//put ->update
