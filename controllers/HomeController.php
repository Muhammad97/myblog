<?php

class HomeController extends BaseController {

	public function index()
	{

		$posts = Post::getAll();

		return View::make('home')->with('posts', $posts);
	}

}
