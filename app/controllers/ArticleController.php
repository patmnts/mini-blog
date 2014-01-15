<?php

class ArticleController extends BaseController {

	public function show()
	{
		$articles=article::paginate();
		return View::make('article.show')->with('articles',$articles);
	}

	public function edit()
	{
		$articles=article::find(idarticle);
		if(is_null ($articles))
		{
			App::abort(404);
		}
		return View::make('article.edit')->with('articles', $articles);
	}

}