<?php

class ArticleController extends BaseController {

	public function show()
	{
		$articles=article::all();
		return View::make('article.show')->with('articles',$articles);
	}

}