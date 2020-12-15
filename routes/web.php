<?php


Route::get('/', function () {

    return view('uk.index') ;
})->name('home');

Route::get('/login', function(){
 
     return view('admin.login');

})->name('login');
Route::post('/login' , 'Admin\AdminAuth@dologin');

Route::get('/about', function(){
 
    return view('uk.about');

})->name('about');

Route::get('/cheak', function(){
 
    return view('uk.cheak');

})->name('cheak');

Route::get('/contact', function(){
 
    return view('uk.contact');

})->name('contact');

Route::get('/pages', function(){
 
    return view('uk.pages');

})->name('pages');

// Route::get('/certificate', function(){
 
//     return view('uk.certificate');

// })->name('certificate');

Route::get('/certificate', 'SiteController@certificate')->name('certificate');
