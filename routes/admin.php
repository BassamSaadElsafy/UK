<?php


Route::group(['prefix' => 'admin' , 'namespace' => 'Admin'] , function(){

	Config::set('auth.defines' , 'admin');
	Route::get('login' , 'AdminAuth@login');
	Route::post('login' , 'AdminAuth@dologin')->name('dologin');


    Route::group(['middleware' => 'admin:admin'] , function(){

		Route::resource('/admin', 'AdminController');
		Route::delete('admin/destroy/all' , 'AdminController@multi_delete');

		Route::resource('/students', 'StudentController');
		Route::delete('students/destroy/all' , 'StudentController@multi_delete');

		Route::resource('/users', 'UsersController');
		Route::delete('users/destroy/all' , 'UsersController@multi_delete');

		Route::get('/' , function(){
		return view('admin.home');
        });
		
		Route::any('logout' , 'AdminAuth@logout');
	});
	

});
