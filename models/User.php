<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'users';
	protected $hidden = array('password', 'remember_token');

	public static $unguarded = true;

	public static function login($data)
	{
		if (Auth::attempt([
			'email' => $data['email'], 
			'password' => $data['password'] 
		]))
		{
			return Auth::user();
		}
		else
		{
			return false;
		}
	}

	public static function register($data)
	{
		try 
		{
			$user = User::create([
				'email' => $data['email'], 
				'password' => Hash::make($data['password'])
			]);
		}
		catch (Exception $e) 
		{
			return $e;
		}

		return $user;
	}

}
