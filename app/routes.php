<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('users');

	/*BD::insert('insert into article (title, description, info, author, date) values (?,?,?,?,?)', array('monkeys','creazy','the monkeys are creazy beacause we havenot bannanas','samuel', now));*/
});

Route::get('users', function()
{
    return View::make('users');
});

Route::get('/create', function()
{
	return View::make('article.create');
});

Route::get('/show', 'ArticleController@show');

Route::post('/create', function()
{
	$title=Input::get('Titre');
	$description=Input::get('Description');
	$author=Input::get('Author');
	$info=Input::get('Contenu');
	$td=Carbon::now();

	$newArcticle=array('title'=>$title,'description'=>$description,'info'=>$info,'author'=>$author, 'date'=>$td);

	if(DB::table('article')->where('title', '=', $title)->get())
	{
		echo ' l\'article qui vous voulez ajouter existe';
	}
	else
	{
		DB::table('article')->insert($newArcticle);
		return Redirect::to('/');
	}
});