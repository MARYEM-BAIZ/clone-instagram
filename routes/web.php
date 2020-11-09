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

Route::get('/page',['uses'=>'UtilisateurController@page','as'=>'page.page']);

Route::get('/pagelogout',['uses'=>'UtilisateurController@pagelogout','as'=>'page.logout']);

Route::get('/profile',['uses'=>'UtilisateurController@profile','as'=>'page.profile']);

Route::get('/pub',['uses'=>'PublicationController@pub','as'=>'page.pub']);

Route::get('/infopub/{id}',['uses'=>'UtilisateurController@infopub','as'=>'page.infopub']);

Route::post('/pub',['uses'=>'PublicationController@publierpub','as'=>'page.publierpub']);


Route::get('/pubprofile',['uses'=>'PublicationController@publi_profile','as'=>'page.pubfrofile']);

Route::get('/igtv',['uses'=>'PublicationController@igtv','as'=>'page.igtv']);

Route::get('/like/{id}',['uses'=>'LikeController@like1','as'=>'page.like1']);
Route::post('/like/{id}',['uses'=>'LikeController@like','as'=>'page.like']);

Route::get('/save/{id}',['uses'=>'EnregistrementController@save1','as'=>'page.save1']);
Route::post('/save/{id}',['uses'=>'EnregistrementController@save','as'=>'page.save']);
Route::get('/enregistrements',['uses'=>'EnregistrementController@enregistrement','as'=>'page.enregistrement']);


Route::get('/commentaire/{id}',['uses'=>'CommentaireController@commentaire1','as'=>'page.commentaire1']);
Route::post('/commentaire/{id}',['uses'=>'CommentaireController@commentaire','as'=>'page.commentaire']);

Route::get('/modifierprofile',['uses'=>'PublicationController@modifierprofile','as'=>'page.modifierprofile']);
Route::post('/modifierprofile',['uses'=>'PublicationController@modifierprofilemo','as'=>'page.modifierprofilemo']);
// Route::post('/modifierprofile',['uses'=>'PublicationController@modifierprofilemo1','as'=>'page.modifierprofilemo1']);
// Route::post('/modifierprofile',['uses'=>'PublicationController@modifierprofilemo2','as'=>'page.modifierprofilemo2']);

Route::get('/changermotdepasse',['uses'=>'PublicationController@changermotdepasse','as'=>'page.changermotdepasse']);

// Route::get('/page', function () {
//     return view('page');
// });

Route::post('/inscrire',['uses'=>'UtilisateurController@inscrire','as'=>'page.inscrire']);




Route::middleware(['auth:sanctum', 'verified'])->get('/template', function () {
    return view('template');
})->name('template');
