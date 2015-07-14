<?php
class BackboneController extends BaseController
{
	public function get_index()
	{
		return View::make('backbone');
	}
}