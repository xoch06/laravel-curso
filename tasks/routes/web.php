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
	$name ="Xoch";
	$edad = 27;
	
	/*
    return view('welcome', array(
    	'name' => $nombre,
    	'age' => $edad
    	));
    */
    	
    
    return view('welcome', compact('nombre','edad'));
    
    /* 
    return view('welcome')->whith('nombre','Xoch');
    */
});
    Route::get('/tareas', function() {

    	 /* $tareas = array(
    		'Tareas 1',
    		'Tareas 2',
    		'Tareas 3'
			); */
    	$tareas =DB::table('tareas')->get();
    	dd($tareas[0]->titulo);
    	
    	return view('tareas', compact('tareas'));

    } );

    Route::get('/tareas',function() {
        $tareas = DB::table('tareas')->get();
        return view('tareas.index', compact('tareas'));

    });

    Route::get('/tareas/{id}', function($id) {
       $tarea = DB::table('tareas')->find($id);
        return view('tareas.show',compact('tarea'));

    });