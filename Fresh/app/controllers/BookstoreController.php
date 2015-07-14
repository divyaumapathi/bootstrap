<?php
class BookstoreController extends BaseController
{
	public function make()
	{
		return View::make('bookstore_main');
	}
	public function hey()
	{
		return View::make('hey');
	}
	public function login()
	{
		return View::make('bookstore_admin_login');
	}
	public function admin()
	{
		return View::make('bookstore_admin');
	}
	public function add()
	{
		return View::make('add_books');
	}
	public function delete()
	{
		return View::make('delete_books');
	}
	public function update_books()
	{
		return View::make('update_books');
	}
	public function book_details()
	{
		return View::make('book_details');
	}
	public function add_success()
	{
		return View::make('add_success');
	}
	public function modal()
	{
		return View::make('modal');
	}
	public function deletebuk()
	{
		return View::make('deletebuk');
	}
	public function edit_book()
	{
		return View::make('edit_book');
	}
	public function all_books()
	{
        $all=new BookstoreModel;
        $all=$all->all_books();
		return View::make('all_books')->with('data',$all);
	}
	public function recently_added()
	{
		$select=new BookstoreModel;
		$select=$select->select();
        return View::make('recently_added')->with('data',$select);

	}
	public function recently_deleted()
	{
		$delete=new BookstoreModel;
		$delete=$delete->delete();
		return View::make('recently_deleted')->with('data',$delete);

	}
	public function recently_updated()
	{
		$update=new BookstoreModel;
		$update=$update->recently_update();
        return View::make('recently_updated')->with('data',$update);		
	}
	public function insert()
	{
		$insert=new BookstoreModel;
		$insert=$insert->insert();
		return View::make('add_success')->with('data',$insert);
	}
	public function remove()
	{
		$remove=New BookstoreModel;
		$remove=$remove->remove();
		var_dump($remove);
	}
	public function search_book()
	{
		$search=new BookstoreModel;
		$search=$search->search_book();
        if($search=="Not Available")
        	return Redirect::to('bookstore')->with('status',"Not Available");
        else
		return View::make('search')->with('data',$search);
	}
	public function update_count()
	{
          $count=new BookstoreModel;
          $count=$count->count();
          var_dump($count);

	}
	public function edit()
	{
		$edit=new BookstoreModel;
		$edit=$edit->edit();
		//var_dump($edit);

	}
	public function del_buk()
	{
	$mesg=Input::get('bookID');
	return DB::table('bookstore')->where('Id','=',$mesg)->delete();
	}
	public function ajax_edit()
	{
		$id=Input::get('edit_bookId');
	    $result = DB::table('bookstore')->where('Id',$id)->get();
	    return Response::json($result,200);
	    
	}
	public function update_buk()
	{
		
		$id=Input::get('bookId');
		//$id2=Input::get('1');
		$name=Input::get('bookName');
		$category=Input::get('bookCategory');
		$author=Input::get('bookAuthor');
		$update_id=Input::get('id');
	  
		return DB::table('bookstore')->where('Id',$update_id)->update(array('Name'=>$name,'Author'=>$author,'Category'=>$category));
	}

	
}
