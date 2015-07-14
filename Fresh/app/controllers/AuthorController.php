<?php
class AuthorController extends BaseController
{
	public $restful='true';

	public function get_index()
	{
		return View::make('')
		        ->with('title','Authors');
		        ->with('authors',student::all());
	}
}