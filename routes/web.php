<?php

use Illuminate\Support\Facades\Route;

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
Route::view('/', 'main')->name('Home');
Route::view('/second', 'second')->name('News');
Route::view('/third', 'third')->name('Authorization');
Route::view('/fourth', 'fourth')->name('Personal Area');
//1
Route::get('/my-name', function () {
    return ('Ярков Юрий Александрович');
});

//2
Route::get('/my-friend', function () {
    return ('Петров Александр Андреевич');
});

//3

Route::get('/get-friend/{name}', function ($name) {
    return ($name);
});

//4
Route::get('/my-city/{city}', function ($city){
    return "Мой город: {$city}";
})->where(['city'=>'[A-Za-z]+']);

//5
Route::get('/level/{lvl}', function ($lvl){
    if($lvl<0||$lvl>99){
        return "Неплохо";
    }
    elseif($lvl<=25){
        return "Молодец";
    }
    elseif($lvl>25&&$lvl<=50){
        return "Красавчик";
    }
    elseif($lvl>50&&$lvl<=75){
        return "Бог";
    }
    elseif($lvl>75&&$lvl<=98){
        return "Не БОГ";
    }
    elseif($lvl==99){
        return "";
    }
    else{
        return "Давай пиши нормально!";
    }
});

//6
Route::get('working/{name}/{date}', function($name , $date) {
    return "Имя проекта - " . $name . ", время его исполнения" . $date;
});

// 7
Route::get('/power', function (){
    return \route('power');
})->name('power');

//8
Route::prefix('admin')->group(function (){
    Route::get('/login', function (){
        return \route('login');
    })->name('login');

    Route::get('/logout', function (){
        return \route('logout');
    })->name('logout');

    Route::get('/info', function (){
        return \route('info');
    })->name('info');

    Route::get('/color', function (){
        return \route('color');
    })->name('color');
});

//9
Route::redirect('/admin/web' , '/admin/color');

//10
Route::get('/color/{hex}', function ($hex){
    return "Цвет: #{$hex}";
})->where(['hex'=>'[0-9A-F]{6}']);
