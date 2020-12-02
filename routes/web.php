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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/page',['uses'=>'UtilisateurController@page','as'=>'page.page'])->middleware('auth');

Route::get('/page_pub_utilisateur',['uses'=>'UtilisateurController@pubutilisateur','as'=>'page.pubutilisateur'])->middleware('auth');

Route::get('/pagelogout',['uses'=>'UtilisateurController@pagelogout','as'=>'page.logout'])->middleware('auth');

Route::get('/profile',['uses'=>'UtilisateurController@profile','as'=>'page.profile'])->middleware('auth');

Route::get('/pub',['uses'=>'PublicationController@pub','as'=>'page.pub'])->middleware('auth');

Route::get('/infopub/{id}',['uses'=>'UtilisateurController@infopub','as'=>'page.infopub'])->middleware('auth');

Route::post('/like1',['uses'=>'UtilisateurController@like','as'=>'page.like1'])->middleware('auth');

Route::post('/pub',['uses'=>'PublicationController@publierpub','as'=>'page.publierpub'])->middleware('auth');


Route::get('/pubprofile',['uses'=>'PublicationController@publi_profile','as'=>'page.pubfrofile'])->middleware('auth');

Route::get('/igtv',['uses'=>'PublicationController@igtv','as'=>'page.igtv'])->middleware('auth');

Route::get('/like/{id}',['uses'=>'LikeController@like1','as'=>'page.like1'])->middleware('auth');
Route::post('/like',['uses'=>'LikeController@like','as'=>'page.like'])->middleware('auth');

Route::get('/save/{id}',['uses'=>'EnregistrementController@save1','as'=>'page.save1'])->middleware('auth');
Route::post('/save',['uses'=>'EnregistrementController@save','as'=>'page.save'])->middleware('auth');
Route::get('/enregistrements',['uses'=>'EnregistrementController@enregistrement','as'=>'page.enregistrement'])->middleware('auth');


Route::get('/commentaire/{id}',['uses'=>'CommentaireController@commentaire1','as'=>'page.commentaire1'])->middleware('auth');
Route::post('/commentaire',['uses'=>'CommentaireController@commentaire','as'=>'page.commentaire'])->middleware('auth');

Route::get('/modifierprofile',['uses'=>'PublicationController@modifierprofile','as'=>'page.modifierprofile'])->middleware('auth');
Route::post('/modifierprofile',['uses'=>'PublicationController@modifierprofilemo','as'=>'page.modifierprofilemo'])->middleware('auth');
// Route::post('/modifierprofile',['uses'=>'PublicationController@modifierprofilemo1','as'=>'page.modifierprofilemo1']);
// Route::post('/modifierprofile',['uses'=>'PublicationController@modifierprofilemo2','as'=>'page.modifierprofilemo2']);

Route::get('/changermotdepasse',['uses'=>'PublicationController@changermotdepasse','as'=>'page.changermotdepasse'])->middleware('auth');

// Route::get('/page', function () {
//     return view('page');
// });


Route::get('/suivre/{id}',['uses'=>'Controller@suivre','as'=>'page.suivre'])->middleware('auth');


Route::post('/inscrire',['uses'=>'UtilisateurController@inscrire','as'=>'page.inscrire']);




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
