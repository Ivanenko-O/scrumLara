<?php

Route::get('blog', 'PostController@showAll');
Route::get('/', 'PagesController@getHome');
Route::get('contact', 'PagesController@getContact');
Route::get('scrum0', 'PagesController@getScrum0');
Route::get('master-of-scrum', 'PagesController@getMasterScrum');
Route::get('management30', 'PagesController@getManagement30');
Route::get('eventlist', 'PagesController@getEventlist');
Route::get('andriipavlenko', 'PagesController@getAndriipavlenko');
Route::get('aboutus', 'PagesController@getAboutus');



Route::get('/analysis-and-implementation', function() {
    return view('pages.services.analysis-and-implementation.analysis-and-implementation');
});

Route::get('/coaching-and-support', function() {
    return view('pages.services.coaching-and-support.coaching-and-support');
});

Route::get('/corporate-study', function() {
    return view('pages.services.corporate-study.corporate-study');
});


Route::get('/404', function() {
    return view('pages.404.404');
});


//Route::get('/services/analysis-and-implementation', function() {
//    return view('pages.services.analysis-and-implementation.analysis-and-implementation');
//});
//
//Route::get('/services/coaching-and-support', function() {
//    return view('pages.services.coaching-and-support.coaching-and-support');
//});
//
//Route::get('/services/corporate-study', function() {
//    return view('pages.services.corporate-study.corporate-study');
//});
//
//Route::get('/about/aboutus', function() {
//    return view('pages.about.aboutus.aboutus');
//});
//
//Route::get('/about/andriipavlenko', function() {
//    return view('pages.about.andriipavlenko.andriipavlenko');
//});

//
//Route::get('/contact', function() {
//    return view('pages.contact.contact');
//});



//Route for posts
try {
    $posts = \TCG\Voyager\Models\Post::all();

    foreach ($posts as $post) {
        Route::get($post->slug, 'PostController@show');
    }
} catch (\Exception $exception) {

}

Route::get('/install', function () {
    Artisan::run('storage:link');
    return redirect('/?done');
});

//Route for admin panel
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Auth::routes();
Route::get('/home', 'HomeController@index');
