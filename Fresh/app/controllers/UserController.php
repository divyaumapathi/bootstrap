<?php

class UserController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public $restfull=true;

	public function get_index()
	{

           return 'user index section';

	}

public function get_new()
	{

           return View::make('new');
           
	}
	public function post_index()
	{ 
		//return 'A new user of '.  e(Input::get('user')) .'should be created';
		
			//$user2=''.  e(Input::get('user')) .'';
		$user = new Insert;
		$user = $user->insert_user();
		return var_dump($user);	
	}
	public function check_index()
	{
		$check=new Insert;
		$check=$check->check_user();
			if($check=="Already registered")
	           return Response::json(false,200);
	       else
	       	return Response::json(true,200);
	}
	public function get_edit()
	{
		return 'editing';
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function check_login()
	{
		
		$check=new Insert;
		$check=$check->check_login();
		
			//return $check;
			if($check=="login failed"){
			   //Session::flash('status',"It seems you are not registered yet");
	           return Redirect::to('home')->with('status',"It seems you are not registered yet");}
	       else
	       	return $check;
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
