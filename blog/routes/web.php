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
    return view('welcome');
});
Route::get('/about', function () {
    $name="youssef imzoughene";
    return view('pages.about')->with("name",$name);
});
Route::get('/make', function () {
    $job="developer";
    $company="devcorp";
    //************** */
    //return View::make('pages.make')->with("emploi",$job)->with('entreprise',$company);
    //************** */
    
    return View::make('pages.make')->with(
        [
            "emploi"=>$job,
            'entreprise'=>$company
        ]
    );
    
    //************** */
});
Route::get('/array', function () { 
    /*
    $data=[
        "emploi" => "developer",
        "entreprise" => "devcorp"
    ];
    return View::make('pages.array',$data);
    */
    $view=View::make("pages.array");
    $view->emploi     = "developer angular laravel";
    $view->entreprise = "devcorp corporation";
    return $view;
});
Route::get('/compactFunction', function () { 
    $job="developer";
    $company="devcorp";
    return View::make('pages.compactFunction',compact("job","company")); 
});
Route::get('/events', function () { 
    $events=[
        "Make PHP Great Again",
        "Php Conference",
        "Laravel Conference"
    ];
    return view('events.index',compact("events")); 
});