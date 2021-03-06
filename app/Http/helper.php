<?php

if(!function_exists('setting')){
	function setting($url=null){
		return \App\Model\Setting::orderBy('id', 'desc')->first();
	}
}
if(!function_exists('up')){
	function up($url=null){
		return new \App\Http\Controllers\Upload;
	}
}
if(!function_exists('aurl')){
	function aurl($url=null){
		return url('admin/'.$url);
	}
}
if(!function_exists('admin')){
	function admin(){
		return auth()->guard('admin');
	}
}
if(!function_exists('active_menu')){
	function active_menu($link){
		if(preg_match('/'.$link.'/i' , Request::segment(2))){
			return['menu-open' , 'display:block' , 'active'];
		}
		else{
			return['','' ,''];
		}
	}
}

if(!function_exists('lang')){
	function lang(){
		if(session()->has('lang')){
			return session('lang'); 
		}
		else{
			//return setting()->main_lang;
			return 'ltr';
		}
	}
}

if(!function_exists('direction')){
	function direction(){
		if(session()->has('lang')){
			if(session('lang') == 'ar'){
				return 'rtl';
			}
			else{
				return 'ltr';
			}
		}else{
			return 'ltr';
		}
	}
}
