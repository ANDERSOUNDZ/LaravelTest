<?php

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



Route::get('/', function () {
    
    //return "The new project Test";
    //return view('welcome');

    //Variables
    //Funcion bcrypt() - cifra las contraseñas, de manera obligatoria
    $password = bcrypt('1234');
    
    //Facade
    DB::table('users')->insert([

        
        ['name'=>'Anderson', 'email' =>'andersonmikol@live.com', 'password'=> $password],
        ['name'=>'Miguel', 'email' =>'miguelushina@live.com', 'password'=> $password]

    ]);

    return 'Registro Creado';

});
