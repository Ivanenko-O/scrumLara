<?php

Route::get('/', function () {
    return view('pages.home.home');
});

Route::get('/scrum0', function() {
    return view('pages.scrum0.scrum0');
});

Route::get('/master-of-scrum', function() {
    return view('pages.master-of-scrum.master-of-scrum');
});

Route::get('/management30', function() {
    return view('pages.management30.management30');
});

Route::get('/analysis-and-implementation', function() {
    return view('pages.services.analysis-and-implementation.analysis-and-implementation');
});

Route::get('/coaching-and-support', function() {
    return view('pages.services.coaching-and-support.coaching-and-support');
});

Route::get('/corporate-study', function() {
    return view('pages.services.corporate-study.corporate-study');
});

Route::get('/aboutus', function() {
    return view('pages.about.aboutus.aboutus');
});

Route::get('/andriipavlenko', function() {
    return view('pages.about.andriipavlenko.andriipavlenko');
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


Route::get('/404', function() {
    return view('pages.404.404');
});
//
//Route::get('/contact', function() {
//    return view('pages.contact.contact');
//});

Route::get('/eventlist', function() {
    return view('pages.eventlist.eventlist');
});


Route::get('/blog', function() {
    return view('pages.blog.blog');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//try {
//    $posts = \TCG\Voyager\Models\Post::all();
//
//    foreach ($posts as $post) {
//        Route::get($post->slug, 'PostController@show');
//    }
//} catch (\Exception $exception) {
//
//}

//Route::get('/blog{slug}', function() {
//    return view('pages.blog.post');
//});


Route::get('contact', 'PagesController@getContact');


