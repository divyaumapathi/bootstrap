<?php
class LoginController extends BaseController
{
	public function home()
	{
		return View::make('home');

	}
	public function login()
	{
		return View::make('loginform');
	}
}