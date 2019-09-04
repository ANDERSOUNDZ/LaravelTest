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
    
    //INICIO - ELOQUENT - CODIGO MAS MANTENIBLE
    //Para crear un nuevo registro o nueva instancia de clase

    /*
    $password = bcrypt('1234');

    $user = new App\User();
    $user->name = 'Daniel';
    $user->email ='andersonmikol@livo.com';
    $user->password = $password;
    //para guardar en la base de datos es utilizar el metodo save
    $user->save();
    return 'Guardo Usuario Exitosamente';
    */
    //FIN - ELOQUENT - CODIGO MAS MANTENIBLE

    
    //INICIO - Para ver que registros tiene una tabla se utiliza 
    
            //crear registro en la tabla 
                    /*
                    DB::table('categories')->insert([
                        ['name'=>'Anderson'],
                    ]);

                    return 'Registro Creado';
                    */
            //fin crear registro tabla

        //return App\Category::all();
        return App\User::all();


    //FIN - Para ver que registros tiene una tabla se utiliza 



    //-------------------------------------FIN 2DA CLASE--------------------------------------------------
    


});
