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

Route::get('/', 'TopController@index')->name('top');


// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// ログイン認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

//コミュニティ操作関連
Route::group(['middleware' => ['auth']], function () {
    Route::resource('communities', 'CommunityController');
});


//フレンド登録関連
Route::group(['middleware' => ['auth']], function () {
    Route::resource('followerlists', 'FollowerController', ['only' => ['index', 'show']]);
    Route::resource('followinglists', 'FollowingController', ['only' => ['index', 'show']]);
    
    Route::group(['prefix' => 'users/{id}'], function () {
        Route::post('follow', 'UserFollowController@store')->name('user.follow');
        Route::delete('unfollow', 'UserFollowController@destroy')->name('user.unfollow');
    });
});

//コミュニティ関連
Route::group(['middleware' => ['auth']], function() 
{
   Route::group(['prefix' => 'users/{id}'], function () 
   {
        Route::get('register_community', 'RegisterCommunityController@index')->name('register_community.index');
        Route::post('join', 'CommunityFollowController@store')->name('user.join');
        Route::delete('unjoin', 'CommunityFollowController@destroy')->name('user.unjoin');
   });
});

//インフォメーション関連
Route::group(['middleware' => ['auth']], function() 
{
    Route::get('info', function() { return view('info.new-info');})->name('info.get');
    Route::get('footer-info1', function() { return view('info.application_description');})->name('footer-info1');
    Route::get('footer-info2', function() { return view('info.application_usage');})->name('footer-info2');
    Route::get('footer-info3', function() { return view('info.end');})->name('footer-info3');
});


//コメント関連
Route::resource('comment', 'CommentController');