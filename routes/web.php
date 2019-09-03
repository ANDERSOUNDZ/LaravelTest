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
    
    //--------------------------------------INICIO PRIMERA CLASE-------------------------------------
    //return "The new project Test";
    //return view('welcome');

    /*
    //-----INICIO INSERTAR REGRISTROS EN UNA BASE DE DATOS
    //Variables
    //Funcion bcrypt() - cifra las contraseñas, de manera obligatoria

    $password = bcrypt('1234');
    
    //Facade
    DB::table('users')->insert([
        
        ['name'=>'Anderson', 'email' =>'andersonmikol@live.com', 'password'=> $password],
        ['name'=>'Miguel', 'email' =>'miguelushina@live.com', 'password'=> $password]

    ]);

    return 'Registro Creado';
        
    //-------FIN INSERTAR REGRISTROS EN UNA BASE DE DATOS
    */

    //INICIO RETORNAR VALORES DE UNA BASE DE DATOS
        //return DB::table('users')->get();
    //FIN RETORNO DE VALORES DE UNA BASE DE DATOS

    //--------------------------------------FIN PRIMERA CLASE-----------------------------------------------

    //-------------------------------------INICIO 2DA CLASE--------------------------------------------------
    //CREAR Y OBTENER REGRISTROS



    //-------------------------------------FIN 2DA CLASE--------------------------------------------------
    

});
