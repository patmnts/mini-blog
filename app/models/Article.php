<?php

class Article extends Eloquent{

	protected $table='article';
	protected $perPage = 2;
	public $timestamps=false;

}