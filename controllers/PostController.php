<?php

class PostController extends BaseController {

	public function getPost($id)
	{

		$id = (int) $id;

		$post = Post::get($id);


		if ($post instanceof Exception)
		{
			return 'error';
		}
			
		return View::make('post.show-post')->with('post', $post);
	}

	public function addPost()
	{

		$data = Input::all();

		$rules = [
			'title' => 'required|min:10',
			'body' => 'required|min:10'
		];

		$validator = Validator::make($data, $rules);

		if ($validator->fails())
		{
			$errors = $validator->messages()->toArray();

			return View::make('errors.validation')->with('errors', $errors);

		}

		$post = Post::add($data);;

		if ($post instanceof Exception)
		{
			return 'error';
		}

		return Redirect::to('/');

	}

}
