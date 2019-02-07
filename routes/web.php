<?php
//
//Route::get('/{any}',function(){
//   return view('vueapp');
//})->where('any','.*');

Route::get('{any}', function (){
    return view('welcome');
})->where('any','.*');