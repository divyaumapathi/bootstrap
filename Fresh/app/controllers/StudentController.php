<?php
class StudentController extends BaseController
{
	public function stu()
	{
$students = new Studen;
		$data = $students->getStudents();
			return View::make('teacher')->with('dat',$data);
		//return View::make('log');
		
		
	}
}