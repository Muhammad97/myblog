<?php

class UserController extends BaseController {

	public function login()
	{

		$data = Input::all();

		$rules = [
			'email' => 'required|email|min:6',
			'password' => 'required|min:6'
		];

		$validator = Validator::make($data, $rules);

		if ($validator->fails())
		{
			$errors = $validator->messages()->toArray();

			return View::make('errors.validation')->with('errors', $errors);

		}

		$user = User::login($data);

		if ($user === false)
		{
			return 'Ошибка авторизации!';
		}

		return Redirect::to(URL::previous());

	}

	public function register()
	{
		$data = Input::all();

		$rules = [
			'email' => 'required|email|min:6|unique:users',
			'password' => 'required|min:6',
			'password' => 'required|min:6|same:password'
		];

		$validator = Validator::make($data, $rules);

		if ($validator->fails())
		{
			$errors = $validator->messages()->toArray();

			return View::make('errors.validation')->with('errors', $errors);

		}

		$user = User::register($data);

		if ($user instanceof Exception)
		{
			return "Go out";
		}

		Auth::login($user, true);

		return Redirect::to('/');
	}

}
