<?php
use App\Abonnement;
use App\Inscription;


use Illuminate\Support\Facades\Auth;

Route::post('/write', 'HomeController@write')->name('write');
Route::get('/clear/records', 'HomeController@clear')->name('clear.records');
Route::get('/open', 'SettingController@open')->name('open');
Route::get('/fix', 'HomeController@fix')->name('fix');
Route::post('/write2', 'HomeController@write2')->name('write2');
Route::post('/set/count', 'ClientController@setCount')->name('set.count');
Route::get('/lang/{lang}', 'LangController@setLang')->name('lang');











Route::group(['prefix' => 'user','middleware' =>'lang', 'as' => 'user'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'UserController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'UserController@create']);
    Route::post('/create', ['as' => '.create', 'uses' => 'UserController@store']);
    Route::post('/store/coach', ['as' => '.store.coach', 'uses' => 'UserController@storeCoach']);
    Route::get('/destroy/{id_user}', ['as' => '.destroy', 'uses' => 'UserController@destroy']);    
    Route::get('/edit/{id_user}', ['as' => '.edit', 'uses' => 'UserController@edit']);
    Route::get('/show/{id_user}', ['as' => '.show', 'uses' => 'UserController@show']);
    Route::post('/update/{id_user}', ['as' => '.update', 'uses' => 'UserController@update']);    
});

Route::group(['prefix' => 'role','middleware' =>'lang', 'as' => 'role'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'RoleController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'RoleController@create']);
    Route::post('/store', ['as' => '.store', 'uses' => 'RoleController@store']);
    Route::post('/create/{type}', ['as' => '.create', 'uses' => 'RoleController@store']);
    Route::post('/store/coach', ['as' => '.store.coach', 'uses' => 'RoleController@storeCoach']);
    Route::get('/destroy/{id_role}', ['as' => '.destroy', 'uses' => 'RoleController@destroy']);    
    Route::get('/edit/{id_role}', ['as' => '.edit', 'uses' => 'RoleController@edit']);
    Route::get('/show/{id_role}', ['as' => '.show', 'uses' => 'RoleController@show']);
    Route::post('/update/{id_role}', ['as' => '.update', 'uses' => 'RoleController@update']);    
});


Route::group(['prefix' => 'setting','middleware' =>'lang', 'as' => 'setting'], function () {
    Route::get('/{elt}', ['as' => '.index', 'uses' => 'SettingController@index']);
    Route::post('/store/{elt}', ['as' => '.store', 'uses' => 'SettingController@store']);
    Route::get('/destroy/{elt}/{id_elt}', ['as' => '.destroy', 'uses' => 'SettingController@destroy']); 
    Route::post('/update/{elt}/{id_elt}', ['as' => '.update', 'uses' => 'SettingController@update']);    
});



Route::get('/clients', 'ClientController@index')->name('client.index');
Route::get('/c/{id_client}', 'ClientController@compteur')->name('client.compteur');
Route::get('/clients/get/compteur/{id_client}', 'ClientController@getCompteur')->name('getCompteur');


Route::get('/clients/plus/{id_client}', 'ClientController@plus')->name('client.plus');
Route::get('/clients/minus/{id_client}', 'ClientController@minus')->name('client.minus');

Route::get('/inscription', 'ClientController@inscription')->name('client.inscription');
Route::get('/profile', 'ClientController@profile')->name('client.profile');
Route::get('/profile/update', 'ClientController@profileUpdate')->name('client.profile.update');

Route::post('/clients/store/citoyen', 'ClientController@storeTypecitoyen')->name('client.store.citoyen');
Route::post('/clients/store/association', 'ClientController@storeTypeassociation')->name('client.store.association');
Route::post('/clients/store/operateur', 'ClientController@storeTypeoperateur')->name('client.store.operateur');
Route::get('/clients/show/create','ClientController@create')->name('client.show.create');
Route::get('/clients/edit/{id_client}', 'ClientController@edit')->name('client.edit');
Route::get('/clients/destroy/{id_client}', 'ClientController@destroy')->name('client.destroy');

// Route::get('/', ['as' => '.index', 'uses' => 'InvestissementController@create']);

Auth::routes();
Route::get('/lang/{lang}', 'LangController@setLang')->name('lang');











// Route::view('/', 'auth.login');
Route::view('/', 'welcome')->name('welcome');

// Route::view('/dashboard', 'dashboard')->name('dashboard');
Route::get('/dashboard', 'ClientController@dashboard')->name('dashboard');
Route::get('/histo', 'ClientController@histo')->name('histo');
Route::get('/count', 'ClientController@count')->name('count');
Route::post('/clients/search', 'ClientController@search')->name('client.search');

// Route::view('/count', 'count')->name('count');
Route::get('/inscription', 'HomeController@inscription')->name('inscription');



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout')->name('_logout')->middleware('lang');


Route::get('/admin', 'AdminController@admin')->name('admin');
Route::post('/confirm', 'HomeController@confirm')->name('confirm');
Route::view('/calendar', 'calendar')->name('calendar');
Route::view('/forget', 'forget')->name('forget');
Route::post('/forget', 'HomeController@forget')->name('forget.action');

Route::view('/confirm/email', 'confirm_email')->name('confirm_email');

Route::get('/wilayas', 'AdminController@wilayas')->name('wilayas');

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::post('/login/admin', 'Auth\LoginController@adminLogin')->name('login.admin');

Route::get('/login/client', 'Auth\LoginController@showClientLoginForm');
Route::post('/login/client', 'Auth\LoginController@clientLogin')->name('login.client');

Route::group(['prefix' => 'rdv','middleware' =>'lang', 'as' => 'rdv'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'RdvController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'RdvController@create']);
    Route::post('/create', ['as' => '.create', 'uses' => 'RdvController@store']);
    Route::post('/store', ['as' => '.store', 'uses' => 'RdvController@store']);
    Route::post('/update/{id_rdv}', ['as' => '.update', 'uses' => 'RdvController@update']);
    Route::get('/destroy/{id_rdv}', ['as' => '.destroy', 'uses' => 'RdvController@destroy']);    
    Route::get('/edit/{id_rdv}', ['as' => '.edit', 'uses' => 'RdvController@edit']);
});


Route::group(['prefix' => 'ticket','middleware' =>'lang', 'as' => 'ticket'], function () {
    Route::get('/{source}', ['as' => '.index', 'uses' => 'TicketController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'TicketController@create']);
    Route::post('/create', ['as' => '.create', 'uses' => 'TicketController@store']);
    Route::post('/store', ['as' => '.store', 'uses' => 'TicketController@store']);
    Route::post('/update/{id_ticket}', ['as' => '.update', 'uses' => 'TicketController@update']);
    Route::get('/destroy/{id_ticket}', ['as' => '.destroy', 'uses' => 'TicketController@destroy']);    
    Route::get('/edit/{id_ticket}', ['as' => '.edit', 'uses' => 'TicketController@edit']);
});


Route::group(['prefix' => 'categorie','middleware' =>'lang', 'as' => 'categorie'], function () {
    Route::get('/{source}', ['as' => '.index', 'uses' => 'CategorieController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'CategorieController@create']);
    Route::post('/create', ['as' => '.create', 'uses' => 'CategorieController@store']);
    Route::post('/store', ['as' => '.store', 'uses' => 'CategorieController@store']);
    Route::post('/update/{id_categorie}', ['as' => '.update', 'uses' => 'CategorieController@update']);
    Route::get('/destroy/{id_categorie}', ['as' => '.destroy', 'uses' => 'CategorieController@destroy']);    
    Route::get('/edit/{id_categorie}', ['as' => '.edit', 'uses' => 'CategorieController@edit']);
});


Route::group(['prefix' => 'soussouscategorie','middleware' =>'lang', 'as' => 'soussouscategorie'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'SoussouscategorieController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'SoussouscategorieController@create']);
    Route::post('/store', ['as' => '.store', 'uses' => 'SoussouscategorieController@store']);
    Route::post('/update/{id_soussouscategorie}', ['as' => '.update', 'uses' => 'SoussouscategorieController@update']);
    Route::get('/destroy/{id_soussouscategorie}', ['as' => '.destroy', 'uses' => 'SoussouscategorieController@destroy']);    
    Route::get('/edit/{id_soussouscategorie}', ['as' => '.edit', 'uses' => 'SoussouscategorieController@edit']);
});


Route::group(['prefix' => 'soussousadministration','middleware' =>'lang', 'as' => 'soussousadministration'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'SoussousadministrationController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'SoussousadministrationController@create']);
    Route::post('/store', ['as' => '.store', 'uses' => 'SoussousadministrationController@store']);
    Route::post('/update/{id_soussousadministration}', ['as' => '.update', 'uses' => 'SoussousadministrationController@update']);
    Route::get('/destroy/{id_soussousadministration}', ['as' => '.destroy', 'uses' => 'SoussousadministrationController@destroy']);    
    Route::get('/edit/{id_soussousadministration}', ['as' => '.edit', 'uses' => 'SoussousadministrationController@edit']);
});

Route::group(['prefix' => 'souscategorie','middleware' =>'lang', 'as' => 'souscategorie'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'SouscategorieController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'SouscategorieController@create']);
    Route::post('/store', ['as' => '.store', 'uses' => 'SouscategorieController@store']);
    Route::post('/update/{id_souscategorie}', ['as' => '.update', 'uses' => 'SouscategorieController@update']);
    Route::get('/destroy/{id_souscategorie}', ['as' => '.destroy', 'uses' => 'SouscategorieController@destroy']);    
    Route::get('/edit/{id_souscategorie}', ['as' => '.edit', 'uses' => 'SouscategorieController@edit']);
});

Route::group(['prefix' => 'sousadministration','middleware' =>'lang', 'as' => 'sousadministration'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'SousadministrationController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'SousadministrationController@create']);
    Route::post('/store', ['as' => '.store', 'uses' => 'SousadministrationController@store']);
    Route::post('/update/{id_sousadministration}', ['as' => '.update', 'uses' => 'SousadministrationController@update']);
    Route::get('/destroy/{id_sousadministration}', ['as' => '.destroy', 'uses' => 'SousadministrationController@destroy']);    
    Route::get('/edit/{id_sousadministration}', ['as' => '.edit', 'uses' => 'SousadministrationController@edit']);
});

Route::group(['prefix' => 'attribution','middleware' =>'lang', 'as' => 'attribution'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'AttributionController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'AttributionController@create']);
    Route::post('/create/{requete_id}', ['as' => '.store', 'uses' => 'AttributionController@store']);
    Route::post('/update/{id_attribution}', ['as' => '.update', 'uses' => 'AttributionController@update']);
    Route::get('/destroy/{id_attribution}', ['as' => '.destroy', 'uses' => 'AttributionController@destroy']);    
    Route::get('/edit/{id_attribution}', ['as' => '.edit', 'uses' => 'AttributionController@edit']);
});

Route::group(['prefix' => 'affectation','middleware' =>'lang', 'as' => 'affectation'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'AffectationController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'AffectationController@create']);
    Route::post('/create/{requete_id}', ['as' => '.store', 'uses' => 'AffectationController@store']);
    Route::post('/update/{id_affectation}', ['as' => '.update', 'uses' => 'AffectationController@update']);
    Route::get('/destroy/{id_affectation}', ['as' => '.destroy', 'uses' => 'AffectationController@destroy']);    
    Route::get('/edit/{id_affectation}', ['as' => '.edit', 'uses' => 'AffectationController@edit']);
});

Route::group(['prefix' => 'courrier','middleware' =>'lang', 'as' => 'courrier'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'CourrierController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'CourrierController@create']);
    Route::post('/create/{requete_id}/{source}', ['as' => '.store', 'uses' => 'CourrierController@store']);
    Route::post('/update/{requete_id}/{source}/{courrier}', ['as' => '.update', 'uses' => 'CourrierController@update']);
    Route::post('/create/{requete_id}', ['as' => '.store.extrerne', 'uses' => 'CourrierController@storeExterne']);
    Route::post('/update/{id_courrier}/{source}', ['as' => '.update', 'uses' => 'CourrierController@update']);
    Route::get('/destroy/{id_courrier}', ['as' => '.destroy', 'uses' => 'CourrierController@destroy']);    
    Route::get('/edit/{id_courrier}', ['as' => '.edit', 'uses' => 'CourrierController@edit']);
});

Route::group(['prefix' => 'wilaya','middleware' =>'lang', 'as' => 'wilaya'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'WilayaController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'WilayaController@create']);
    Route::post('/store', ['as' => '.store', 'uses' => 'WilayaController@store']);
    Route::post('/update/{id_wilaya}', ['as' => '.update', 'uses' => 'WilayaController@update']);
    Route::get('/destroy/{id_wilaya}', ['as' => '.destroy', 'uses' => 'WilayaController@destroy']);    
    Route::get('/edit/{id_wilaya}', ['as' => '.edit', 'uses' => 'WilayaController@edit']);
});


Route::group(['prefix' => 'commune','middleware' =>'lang', 'as' => 'commune'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'CommuneController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'CommuneController@create']);
    Route::post('/store', ['as' => '.store', 'uses' => 'CommuneController@store']);
    Route::post('/update/{id_commune}', ['as' => '.update', 'uses' => 'CommuneController@update']);
    Route::get('/destroy/{id_commune}', ['as' => '.destroy', 'uses' => 'CommuneController@destroy']);    
    Route::get('/edit/{id_commune}', ['as' => '.edit', 'uses' => 'CommuneController@edit']);
});


Route::group(['prefix' => 'typerequete','middleware' =>'lang', 'as' => 'typerequete'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'TyperequeteController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'TyperequeteController@create']);
    Route::post('/create', ['as' => '.store', 'uses' => 'TyperequeteController@store']);
    Route::post('/update/{id_requete}', ['as' => '.update', 'uses' => 'TyperequeteController@update']);
    Route::get('/destroy/{id_requete}', ['as' => '.destroy', 'uses' => 'TyperequeteController@destroy']);    
    Route::get('/edit/{id_requete}', ['as' => '.edit', 'uses' => 'TyperequeteController@edit']);
});

Route::group(['prefix' => 'suggestion','middleware' =>'lang', 'as' => 'suggestion'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'SuggestionController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'SuggestionController@create']);
    Route::get('/show/create/client',['as'=>'.show.create.client', 'uses' => 'SuggestionController@createClient']);
    Route::post('/create', ['as' => '.store', 'uses' => 'SuggestionController@store']);
    Route::post('/update/{id_suggestion}', ['as' => '.update', 'uses' => 'SuggestionController@update']);
    Route::get('/destroy/{id_suggestion}', ['as' => '.destroy', 'uses' => 'SuggestionController@destroy']);    
    Route::get('/edit/{id_suggestion}', ['as' => '.edit', 'uses' => 'SuggestionController@edit']);
});



Route::group(['prefix' => 'typedoleance','middleware' =>'lang', 'as' => 'typedoleance'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'TypedoleanceController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'TypedoleanceController@create']);
    Route::post('/create', ['as' => '.store', 'uses' => 'TypedoleanceController@store']);
    Route::post('/update/{id_doleance}', ['as' => '.update', 'uses' => 'TypedoleanceController@update']);
    Route::get('/destroy/{id_doleance}', ['as' => '.destroy', 'uses' => 'TypedoleanceController@destroy']);    
    Route::get('/edit/{id_doleance}', ['as' => '.edit', 'uses' => 'TypedoleanceController@edit']);
});


Route::group(['prefix' => 'sourcerequete','middleware' =>'lang', 'as' => 'sourcerequete'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'SourcerequeteController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'SourcerequeteController@create']);
    Route::post('/create', ['as' => '.store', 'uses' => 'SourcerequeteController@store']);
    Route::post('/update/{id_source}', ['as' => '.update', 'uses' => 'SourcerequeteController@update']);
    Route::get('/destroy/{id_source}', ['as' => '.destroy', 'uses' => 'SourcerequeteController@destroy']);    
    Route::get('/edit/{id_source}', ['as' => '.edit', 'uses' => 'SourcerequeteController@edit']);
});

Route::group(['prefix' => 'sourceaudience','middleware' =>'lang', 'as' => 'sourceaudience'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'SourceaudienceController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'SourceaudienceController@create']);
    Route::post('/create', ['as' => '.store', 'uses' => 'SourceaudienceController@store']);
    Route::post('/update/{id_source}', ['as' => '.update', 'uses' => 'SourceaudienceController@update']);
    Route::get('/destroy/{id_source}', ['as' => '.destroy', 'uses' => 'SourceaudienceController@destroy']);    
    Route::get('/edit/{id_source}', ['as' => '.edit', 'uses' => 'SourceaudienceController@edit']);
});

Route::group(['prefix' => 'fichier','middleware' =>'lang', 'as' => 'fichier'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'FichierController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'FichierController@create']);
    Route::post('/create', ['as' => '.store', 'uses' => 'FichierController@store']);
    Route::post('/update/{id_fichier}', ['as' => '.update', 'uses' => 'FichierController@update']);
    Route::get('/destroy/{id_fichier}', ['as' => '.destroy', 'uses' => 'FichierController@destroy']);    
    Route::get('/edit/{id_fichier}', ['as' => '.edit', 'uses' => 'FichierController@edit']);
});

Route::group(['prefix' => 'sujetrequete','middleware' =>'lang', 'as' => 'sujetrequete'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'SujetrequeteController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'SujetrequeteController@create']);
    Route::post('/create', ['as' => '.store', 'uses' => 'SujetrequeteController@store']);
    Route::post('/update/{id_sujet}', ['as' => '.update', 'uses' => 'SujetrequeteController@update']);
    Route::get('/destroy/{id_sujet}', ['as' => '.destroy', 'uses' => 'SujetrequeteController@destroy']);    
    Route::get('/edit/{id_sujet}', ['as' => '.edit', 'uses' => 'SujetrequeteController@edit']);
});

Route::group(['prefix' => 'sujetdoleance','middleware' =>'lang', 'as' => 'sujetdoleance'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'SujetdoleanceController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'SujetdoleanceController@create']);
    Route::post('/create', ['as' => '.store', 'uses' => 'SujetdoleanceController@store']);
    Route::post('/update/{id_sujet}', ['as' => '.update', 'uses' => 'SujetdoleanceController@update']);
    Route::get('/destroy/{id_sujet}', ['as' => '.destroy', 'uses' => 'SujetdoleanceController@destroy']);    
    Route::get('/edit/{id_sujet}', ['as' => '.edit', 'uses' => 'SujetdoleanceController@edit']);
});


Route::group(['prefix' => 'etatrequete','middleware' =>'lang', 'as' => 'etatrequete'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'EtatrequeteController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'EtatrequeteController@create']);
    Route::post('/create', ['as' => '.store', 'uses' => 'EtatrequeteController@store']);
    Route::post('/update/{id_etat}', ['as' => '.update', 'uses' => 'EtatrequeteController@update']);
    Route::get('/destroy/{id_etat}', ['as' => '.destroy', 'uses' => 'EtatrequeteController@destroy']);    
    Route::get('/edit/{id_etat}', ['as' => '.edit', 'uses' => 'EtatrequeteController@edit']);
});


Route::group(['prefix' => 'administration','middleware' =>'lang', 'as' => 'administration'], function () {

    Route::get('/', ['as' => '.index', 'uses' => 'AdministrationController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'AdministrationController@create']);
    Route::post('/create', ['as' => '.store', 'uses' => 'AdministrationController@store']);
    Route::post('/update/{id_administration}', ['as' => '.update', 'uses' => 'AdministrationController@update']);
    Route::get('/destroy/{id_administration}', ['as' => '.destroy', 'uses' => 'AdministrationController@destroy']);    
    Route::get('/edit/{id_administration}', ['as' => '.edit', 'uses' => 'AdministrationController@edit']);
});


Route::group(['prefix' => 'daira','middleware' =>'lang', 'as' => 'daira'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'DairaController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'DairaController@create']);
    Route::post('/create', ['as' => '.store', 'uses' => 'DairaController@store']);
    Route::post('/update/{id_daira}', ['as' => '.update', 'uses' => 'DairaController@update']);
    Route::get('/destroy/{id_daira}', ['as' => '.destroy', 'uses' => 'DairaController@destroy']);    
    Route::get('/edit/{id_daira}', ['as' => '.edit', 'uses' => 'DairaController@edit']);
});


Route::group(['prefix' => 'daira','middleware' =>'lang', 'as' => 'daira'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'DairaController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'DairaController@create']);
    Route::post('/create', ['as' => '.store', 'uses' => 'DairaController@store']);
    Route::post('/update/{id_daira}', ['as' => '.update', 'uses' => 'DairaController@update']);
    Route::get('/destroy/{id_daira}', ['as' => '.destroy', 'uses' => 'DairaController@destroy']);    
    Route::get('/edit/{id_daira}', ['as' => '.edit', 'uses' => 'DairaController@edit']);
});

Route::group(['prefix' => 'secteur','middleware' =>'lang', 'as' => 'secteur'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'SecteurController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'SecteurController@create']);
    Route::post('/create', ['as' => '.store', 'uses' => 'SecteurController@store']);
    Route::post('/update/{secteur}', ['as' => '.update', 'uses' => 'SecteurController@update']);
    Route::get('/destroy/{secteur}', ['as' => '.destroy', 'uses' => 'SecteurController@destroy']);    
    Route::get('/edit/{secteur}', ['as' => '.edit', 'uses' => 'SecteurController@edit']);
});


Route::group(['prefix' => 'axe','middleware' =>'lang', 'as' => 'axe'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'AxeController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'AxeController@create']);
    Route::post('/create', ['as' => '.store', 'uses' => 'AxeController@store']);
    Route::post('/update/{axe}', ['as' => '.update', 'uses' => 'AxeController@update']);
    Route::get('/destroy/{axe}', ['as' => '.destroy', 'uses' => 'AxeController@destroy']);    
    Route::get('/edit/{axe}', ['as' => '.edit', 'uses' => 'AxeController@edit']);
});


Route::group(['prefix' => 'axedoleance','middleware' =>'lang', 'as' => 'axedoleance'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'AxedoleanceController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'AxedoleanceController@create']);
    Route::post('/create', ['as' => '.store', 'uses' => 'AxedoleanceController@store']);
    Route::post('/update/{axedoleance}', ['as' => '.update', 'uses' => 'AxedoleanceController@update']);
    Route::get('/destroy/{axedoleance}', ['as' => '.destroy', 'uses' => 'AxedoleanceController@destroy']);    
    Route::get('/edit/{axedoleance}', ['as' => '.edit', 'uses' => 'AxedoleanceController@edit']);
});

Route::get('/membre/ajax','MembreController@indexAjax');
Route::get('/membre/getMembres/','MembreController@getMembres')->name('membres.getMembres');
