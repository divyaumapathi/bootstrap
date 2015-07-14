$students = new Studen;
		$data = $students->getStudents();
		return View::make('log')->with('dat',$data);
		