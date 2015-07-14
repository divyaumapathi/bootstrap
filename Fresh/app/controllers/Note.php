<?php
class Note extends Eloquent
{   protected $table='note';
	public function insert_nte()
	{
		$name=Input::get('name');
		$mnth=Input::get('mnth');
		$day=Input::get('day');
		$year=Input::get('year');
		$textarea=Input::get('textarea');
		$name_chk=DB::table('note')->where('Name',$name)->first();
		if($name_chk)
			return 'Name should be unique';
		else
		return DB::table('note')->insert(array('Name'=>$name,'Textarea'=>$textarea,'Month'=>$mnth,'Day'=>$day,'Year'=>$year));
	}
	public function search_nte()
	{
		$srchtxt=Input::get('srchtxt');
		$name_chk=DB::table('note')->where('Name',$srchtxt)->first();
		//print_r($name_chk);
		if($name_chk)
			{
				//return View::make('note1')->with('data', $name_chk);
			   return $name_chk;
			}
		else
			return 'No such search found';
		
	}
	public function update_nte()
	{
		$srchtxt=Input::get('serchtxt');
		$txtarea=Input::get('txtarea');
		$updte_chk=DB::table('note')
            ->where('Name', $srchtxt)
            ->update(array('Textarea' => $txtarea));
          //  return $updte_chk;
             return Redirect::to('note');
            exit();

	}
}