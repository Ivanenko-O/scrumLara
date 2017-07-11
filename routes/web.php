<?php

Route::group(['middleware' => 'web'], function () {

        Route::get('blog', 'PostController@showAll');

        // Posts Routes
        Route::prefix('blog')->group(function(){
            Route::get('/{slug}', 'PostController@show');
        });

        Route::get('/', 'PagesController@getHome');
        Route::get('/home', 'HomeController@index');

        // Contact Routes
        Route::get('contact', 'PagesController@getContact');
        Route::post('/contact', 'MailController@postContact')->name('mail.contact');


        // Training Routes
        Route::get('scrum0', 'PagesController@getScrum0');
        Route::get('master-of-scrum', 'PagesController@getMasterScrum');
        Route::get('management30', 'PagesController@getManagement30');

        // Event Routes
        Route::get('/eventlist', 'PagesController@getEventlist');

        // About Routes
        Route::prefix('about')->group(function(){
            Route::get('andriipavlenko', 'PagesController@getAndriipavlenko');
            Route::get('aboutus', 'PagesController@getAboutus');
        });

        // Service Routes
        Route::prefix('services')->group(function(){
            Route::get('analysis-and-implementation', 'PagesController@getAnalysis');
            Route::get('coaching-and-support', 'PagesController@getCoaching');
            Route::get('corporate-study', 'PagesController@getCorporateStudy');
        });


        Route::get('/list-courses', function () {
            return view('pages.list-courses.list-courses');
        });

        Route::get('course-scrum',  'SubscriptionController@getSubscription')->middleware('auth');

        Route::get('/coming-soon', function() {
            return view('pages.coming-soon.coming-soon');
    });



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

        //Route::post('/searching', 'SearchController@index');



});
