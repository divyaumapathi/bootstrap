<?php
class BookstoreModel extends Eloquent
{
	public function insert()
	{
		$id=Input::get('id');
		$name=Input::get('name');
        $category=Input::get('categry');
        $author=Input::get('author');
        $count=Input::get('count');
        DB::table('bookstore')->insert(array('Id'=>$id,'Name'=>$name,'Category'=>$category,'Author'=>$author,'Count'=>$count));
        return DB::table('bookstore')->where('Name',$name)->get();
    }
     public function remove()
     {
     	$id=Input::get('buk_id');
     	$name=DB::table('bookstore')->where('Id',$id)->pluck('Name');
     	$category=DB::table('bookstore')->where('Id',$id)->pluck('Category');
     	$author=DB::table('bookstore')->where('Id',$id)->pluck('Author');
     	$count=DB::table('bookstore')->where('Id',$id)->pluck('Count');
     	DB::table('recently_added')->insert(array('Id'=>$id,'Name'=>$name,'Category'=>$category,'Author'=>$author,'Count'=>$count));
     	return DB::table('bookstore')->where('Id','=',$id)->delete();
     }
     public function select()
     {
     	return DB::table('bookstore')->orderBy('Id','desc')->take(5)->get();
     }
     public function delete()
     {
          return DB::table('recently_added')->orderBy('Auto_Id','desc')->take(5)->get();

     }
     public function all_books()
     {
        return DB::table('bookstore')->get();
     }
     public function recently_update()
     {
          return DB::table('recently_updated')->orderBy('Auto_Id','desc')->take(5)->get();

     }
     
    public function search_book()
{

	$value=Input::get('Search_by');
		$text=Input::get('name');
		
		switch ($value) {
			
			case 0:
                   $available=DB::table('bookstore')->where('Name',$text)->pluck('Count');
				if($available=="")
					return "Not Available";
				else
					return DB::table('bookstore')->where('Name',$text)->get();
			break;
            case 1:
            $available=DB::table('bookstore')->where('Author',$text)->pluck('Count');
				if($available)
					return DB::table('bookstore')->where('Author',$text)->get();
				else
					 "Not Available";
				break;
				case 2:
				$available=DB::table('bookstore')->where('Category',$text)->pluck('Count');
				if($available)
					return DB::table('bookstore')->where('Category',$text)->get();
				else
					return "Not Available";
				break;
			default:
				# code...
				break;
		
}}
             public function count()
             {
             	$count=Input::get('count');
             	$name=Input::get('buk_name');
             	$id=DB::table('bookstore')->where('Name',$name)->pluck('Id');
             	$author=DB::table('bookstore')->where('Name',$name)->pluck('Author');
             	$category=DB::table('bookstore')->where('Name',$name)->pluck('Category');
             	DB::table('recently_updated')->insert(array('Id'=>$id,'Name'=>$name,'Category'=>$category,'Author'=>$author,'Count'=>$count));
             	return DB::table('bookstore')->where('Name',$name)->update(array('Count'=>$count));
             	}
                public function edit()
                {
                    $id=Input::get('');
                    echo $id;

                }
                public function del()
                {
                    $result=Input::get('bookID');
                    return $result;
                }
}