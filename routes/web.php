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


//
//Route::get('/admin',function (){
//    return view('admin.dashboard.index');
//});

Route::get('/','Frontend\HomeController@index')->name('home');

Route::group([ 'namespace' => 'frontend'], function () {

    Route::get('/musics','MusicsController@index')->name('frontend.musics.index');
    Route::get('/musicvideos','MusicVideosController@index')->name('frontend.musicvideo.index');
    Route::get('/album','AlbumsController@index')->name('frontend.album.index');
    Route::get('/concerts','ConcertsController@index')->name('frontend.concert.index');
    //search
    Route::post('/search','MusicsController@search')->name('frontend.musics.search');
    //download page
    Route::get('/musics/download/{id}', 'MusicsController@download')->name('frontend.download_music.download');
    Route::get('/musicvideos/download/{id}', 'MusicVideosController@download')->name('frontend.download_musicvideo.download');
    Route::get('/album/download/{id}', 'AlbumsController@download')->name('frontend.download_albums.download');
    Route::get('/concerts/download/{id}', 'ConcertsController@download')->name('frontend.reserve_concert.download');
    //dowload file
    Route::get('/musics/downloadtwo/{id}','MusicsController@downloadtwo')->name('frontend.musics.downloadtwo');
    Route::get('/musicvideos/downloadtwo/{id}','MusicVideosController@downloadtwo')->name('frontend.musicvideos.downloadtwo');
    Route::get('/musicvideos/downloadthree/{id}','MusicVideosController@downloadthree')->name('frontend.musicvideos.downloadthree');
    Route::get('/album/downloadtwo/{id}','AlbumsController@downloadtwo')->name('frontend.album.downloadtwo');
    //   Route::get('/access','MusicsController@access')->name('frontend.musics.access');
    //user login
    Route::get('/login','UsersController@login')->name('frontend.users.login');
    Route::post('/login','UsersController@dologin')->name('frontend.users.dologin');
    Route::get('/register', 'UsersController@register')->name('frontend.users.register');
    Route::post('/register', 'UsersController@store')->name('frontend.users.store');
    Route::get('/logout', 'UsersController@logout')->name('frontend.users.logout');

    //profile
    Route::get('/profile', 'ProfileController@index')->name('frontend.users.index');
    Route::get('/profile/canceled/{id}', 'ProfileController@cancel')->name('frontend.users.cancel');
//payment
    Route::get('/payment/{id}', 'UsersController@payment')->name('frontend.users.payment');
//reserve
    Route::get('/reserve/{id}', 'UsersController@reserve')->name('frontend.reserve.reserve');
    Route::post('/reserve', 'UsersController@storeSeatNum')->name('frontend.reserve.store');

    //search of category:music
    Route::get('/musics/category/{id}','SearchCatController@findCatMusic')->name('frontend.musics.happy');

    //search of category:musicvideo
    Route::get('/musicvideos/category/{id}','SearchCatController@findCatMusicvideo')->name('frontend.musicvideos.happy');

    //search of category:album
    Route::get('/albums/category/{id}','SearchCatController@findCatAlbum')->name('frontend.albums.happy');

    //about_us
    Route::get('/about_us', 'About_UsController@index')->name('frontend.about_us.index');
    Route::post('/about_us', 'About_UsController@store')->name('frontend.about_us.store');
    //contact_us
    Route::get('/contact_us', 'Contact_UsController@index')->name('frontend.contact_us.index');
    Route::post('/contact_us', 'Contact_UsController@store')->name('frontend.contact_us.store');
});




Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', function () {
        return view('admin.dashboard.index');
    });
    Route::get('/users', 'USersController@usersList')->name('admin.user.list'); //admin.users
    Route::get('/users/delete/{user_id}', 'USersController@delete')->name('admin.user.delete');
    Route::get('/users/edit/{user_id}', 'USersController@edit')->name('admin.user.edit');
    Route::post('/users/edit/{user_id}', 'USersController@update')->name('admin.user.update');
    Route::get('/users/create', 'USersController@create')->name('admin.user.create'); //admin.users
    Route::get('users/search', 'UsersController@search');

    //music routes
    Route::get('/files', 'MusicsController@index')->name('admin.files.list');
    Route::get('/files/create', 'MusicsController@create')->name('admin.files.create');
    Route::post('/files/create', 'MusicsController@store')->name('admin.files.store');
    Route::get('/files/edit/{file_id}', 'MusicsController@edit')->name('admin.files.edit');
    Route::post('/files/edit/{file_id}', 'MusicsController@update')->name('admin.files.update');
    Route::get('/files/remove/{file_id}', 'MusicsController@remove')->name('admin.files.remove');

    //musicvideo routes
    Route::get('/musicvideo', 'MusicVideoController@index')->name('admin.musicvideo.list'); //admin.users
    Route::get('/musicvideo/create', 'MusicVideoController@create')->name('admin.musicvideo.create'); //admin.users
    Route::post('/musicvideo/create', 'MusicVideoController@store')->name('admin.musicvideo.store'); //admin.users
    Route::get('/musicvideo/edit/{id}', 'MusicVideoController@edit')->name('admin.musicvideo.edit'); //admin.users
    Route::post('/musicvideo/edit/{id}', 'MusicVideoController@update')->name('admin.musicvideo.update'); //admin.users
    Route::get('/musicvideo/remove/{id}', 'MusicVideoController@remove')->name('admin.musicvideo.remove'); //admin.users

    //concerts routes
    Route::get('/concert', 'ConcertController@index')->name('admin.concert.list'); //admin.users
    Route::get('/concert/create', 'ConcertController@create')->name('admin.concert.create'); //admin.users
    Route::post('/concert/create', 'ConcertController@store')->name('admin.concert.store'); //admin.users
    Route::get('/concert/edit/{id}', 'ConcertController@edit')->name('admin.concert.edit'); //admin.users
    Route::post('/concert/edit/{id}', 'ConcertController@update')->name('admin.concert.update'); //admin.users
    Route::get('/concert/remove/{id}', 'ConcertController@remove')->name('admin.concert.remove'); //admin.users


//Album routes
    Route::get('/albums', 'AlbumsController@index')->name('admin.albums.list');
    Route::get('/albums/create', 'AlbumsController@create')->name('admin.albums.create');
    Route::post('/albums/create', 'AlbumsController@store')->name('admin.albums.store');
    Route::get('/albums/edit/{album_id}', 'AlbumsController@edit')->name('admin.albums.edit');
    Route::post('/albums/edit/{album_id}', 'AlbumsController@update')->name('admin.albums.update');



    //payments routes
    Route::get('/payments', 'paymentsController@index')->name('admin.payments.list'); //admin.users
    Route::get('/payments/remove/{id}', 'paymentsController@remove')->name('admin.payments.remove'); //admin.users


    //concerts routes
    Route::get('/categories', 'CategoriesController@index')->name('admin.categories.list'); //admin.users
    Route::get('/categories/create', 'CategoriesController@create')->name('admin.categories.create'); //admin.users
    Route::post('/categories/create', 'CategoriesController@store')->name('admin.categories.store'); //admin.users
    Route::get('/categories/edit/{category_id}', 'CategoriesController@edit')->name('admin.categories.edit'); //admin.users
    Route::post('/categories/edit/{category_id}', 'CategoriesController@update')->name('admin.categories.update'); //admin.users
    Route::get('/categories/remove/{category_id}', 'CategoriesController@remove')->name('admin.categories.remove'); //admin.users


    //about_us route
    Route::get('/comment', 'About_UsController@show')->name('admin.about_us.show'); //admin.users
    Route::get('/comment/okey/{id}', 'About_UsController@okey')->name('admin.about_us.okey'); //admin.users
    Route::get('/comment/remove/{id}', 'About_UsController@remove')->name('admin.about_us.remove'); //admin.users
    //contact_us route
    Route::get('/contact', 'Contact_UsController@show')->name('admin.contact_us.show'); //admin.users
    Route::get('/contact/okey/{id}', 'Contact_UsController@okey')->name('admin.contact_us.okey'); //admin.users
    Route::get('/contact/remove/{id}', 'Contact_UsController@delete')->name('admin.contact_us.remove'); //admin.users

});



