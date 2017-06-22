<?php

Route::group(['middleware' => 'web'], function () {

Route::get('blog', 'PostController@showAll');

// Posts Routes
//try {
//    $posts = \TCG\Voyager\Models\Post::all();
//
//    foreach ($posts as $post) {
//        Route::get($post->slug, 'PostController@show');
//    }
//} catch (\Exception $exception) {
//
//}

Route::get('/blog/{slug}', 'PostController@show');

        Route::get('/', 'PagesController@getHome');
        Route::get('/home', 'HomeController@index');

        // Contact Routes
        Route::get('contact', 'PagesController@getContact');
        Route::post('/contact', 'PagesController@postContact')->name('mail.contact');


        // Training Routes
        Route::get('scrum0', 'PagesController@getScrum0');
        Route::get('master-of-scrum', 'PagesController@getMasterScrum');
        Route::get('management30', 'PagesController@getManagement30');

        // Event Routes
        Route::get('/eventlist', 'PagesController@getEventlist');

        // About Routes
        Route::get('/about/andriipavlenko', 'PagesController@getAndriipavlenko');
        Route::get('/about/aboutus', 'PagesController@getAboutus');

        // Service Routes
        Route::get('services/analysis-and-implementation', 'PagesController@getAnalysis');
        Route::get('services/coaching-and-support', 'PagesController@getCoaching');
        Route::get('services/corporate-study', 'PagesController@getCorporateStudy');



        Route::get('/list-courses', function () {
            return view('pages.list-courses.list-courses');
        });

        Route::get('course-scrum', function (){
            return view('pages.course-scrum.course-scrum');
        })->middleware('auth');



        Route::get('/install', function () {
            Artisan::run('storage:link');
            return redirect('/?done');
        });

        // Admin panel Routes
        Route::group(['prefix' => 'admin'], function () {
            Voyager::routes();
        });

        // Authentication Routes
        Auth::routes();



});
