<?php

use Illuminate\Support\Facades\Route;


Route::get('/',function(){
    return redirect()->route('home');
});


Route::get('welcome/{uid?}','AdminController@welcome')->name('home');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('dashboard','ModuloController@index')->name('dashboard');
    Route::get('modulos/{lec?}','ModuloController@index')->name('modulos');
    Route::post('exam','TestController@store')->name('exam');

});


Route::get('/plantilla',function(){
    return view('plantilla');
});

Route::prefix('admin')->group(function () {

    Route::get('admlogin', 'AdminController@initContent')->name('admlogin');
    Route::get('/admregister', 'AdminController@initRegister')->name('admregister');
    Route::post('admin/register', 'AdminController@register')->name('admin/admregister');
    Route::post('/verify','AdminController@authenticate')->name('verify');
    Route::middleware('admin')->group(function () {
        Route::get('/admdashboard','AdminController@dashboard')->name('admdashboard');

        //Modulos
        Route::get('/admodulo','AdminController@AdminModule')->name('admodulo');
        Route::get('/admodlec/{mod?}','AdminController@AdminModuleLec')->name('admodlec');
        Route::post('/admodlec/create','LeccionController@create')->name('admodlec/create');
        Route::get('/admodtest/{mod?}','AdminController@AdminModuleTest')->name('admodtest');
        Route::post('/admodulo/edit','ModuloController@edit')->name('admodulo/edit');
        Route::post('/admodulo/create','ModuloController@create')->name('admodulo/create');

        //Lecciones
        Route::get('/adleccion/{lec?}','AdminController@AdminLeccion')->name('adleccion');
        Route::post('/adleccion/edit','LeccionController@edit')->name('adleccion/edit');
        Route::post('/adleccion/videoedit','VideoController@edit')->name('adleccion/videoedit');
        Route::post('/adleccion/videocreate','VideoController@create')->name('adleccion/videocreate');

        //Preguntas
        Route::post('/admodtest/create','PreguntaController@create')->name('admodtest/create');

        //Respuestas
        Route::post('/adanswer/edit','RespuestaController@edit')->name('adanswer/edit');
        Route::post('/adanswer/create','RespuestaController@create')->name('adanswer/create');

        //Certificados

        Route::get('adcertif', 'AdminController@AdminCertificado')->name('adcertif');
        Route::post('adcertif/upload', 'AdminController@UploadCertificado')->name('adcertif/upload');

        // Politicas

        Route::get('adpoliticas','AdminController@AdminPoliticas' )->name('adpoliticas');
        Route::post('adpoliticas/upload','AdminController@UploadPoliticas')->name('adpoliticas/upload');

        //Habeas Data

        Route::get('adhabeas','AdminController@AdminHabeas' )->name('adhabeas');
        Route::post('adhabeas/upload','AdminController@UploadHabeas')->name('adhabeas/upload');

        //Contrato

        Route::get('adcontrato','AdminController@AdminContrato' )->name('adcontrato');
        Route::post('adcontrato/upload','AdminController@UploadContrato')->name('adcontrato/upload');

    });


});

