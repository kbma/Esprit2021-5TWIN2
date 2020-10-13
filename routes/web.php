<?php

use App\Http\Controllers\PhotoController;
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

Route::get('/', function () {
    return view('welcome');
})->name('accueil');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/formations', function () {
    return view('pages.formations');
})->name('formations');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
























/****************************************************/
Route::get('/esprit', function () {
    return view('Front/hello');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/bjr', function () {
    return 'Bonjour mes amis!';
});

//Route::redirect('/','bjr')->name('RouteBJR');

Route::view('R1','hello',['nom'=>'Ali','age'=>23]);

Route::get('user/{nom}/{prenom}/{id}/{ville?}',function ($nom,$prenom,$id,$ville='Bizerte'){
    return 'Bonjour  '.$nom. ' '. $prenom. ' id = '.$id.'votre ville est : '.$ville;

})->where(['nom'=>'[A-Za-z]+', 'prenom'=>'[A-Za-z]+', 'id'=>'[0-9]+']);


Route::resource('photos', PhotoController::class);


Route::get('ma/{age}',[PhotoController::class,'ma_fonction']);


Route::get('/R4', function () {
    return response('Créer un cookie', 200)
        ->header('Content-Type', 'text/plain')
        ->cookie('Esprit2', 'Classe 5TWIN2', 120);
});

Route::get('/message2', function () {
    return redirect('home')->with('msg','Le client ajouté avec succés');
});


Route::get('/R5',function (){
    return response()->json([
        'name' => 'Abigail',
        'state' => 'CA',
    ]);
});
