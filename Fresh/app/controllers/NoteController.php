<?php
class NoteController extends BaseController
{
	public function get_index()
	{
           return View::make('note');
	}
	
	public function get_insert()
	{
		$nte=new Note;
		$nte=$nte->insert_nte();
		//return var_dump($nte);
	}
	public function search()
	{//echo"hii";
		$nte=new Note;
		$nte=$nte->search_nte();
	    //return View::make('note1')->with('authors',note::all());
	   // return var_dump($nte);
	    
	    return View::make('note1')->with('data',$nte);

	}
	public function update()
	{
		$nte=new Note;
		$nte=$nte->update_nte();
		//return $nte;
	    exit();
	}
	
}