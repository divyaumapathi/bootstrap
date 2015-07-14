<?php
class GrouponController extends BaseController
{

	public function get_index()
	{
		return View::make('groupon');
	}
	public function admin()
	{
		return View::make('grouponadmin');
	}
	public function user()
	{
		return View::make('userdetails');
	}
	public function card()
	{
		return View::make('card');
	}
	public function coupon()
	{
		$coupondetails=new GrouponModel;        
		$coupondetails=$coupondetails->user_details();
		if($coupondetails==false)
			{ }
		else
			return View::make('userdetails')->with('data',$coupondetails);

	}
	public function crd()
	{
		$captcha=Input::get('captcha');
		$savecard=new GrouponModel;
		$savecard=$savecard->insertcard_details();
		if($savecard=='failed')
		 echo 'Payment Successfull.Your Coupon code is  ' .$captcha;
		else
	       echo 'Payment failed';
	}
	public function store()
	{
		$image=Input::file('image');
		$food=Input::get('categ');
		//$spa=Input::get('spa');

	
	$move=$image->move('public/uploads',$image->getClientOriginalName());

		$filename=$image->getClientOriginalName();
		$filepath=URL::to('/')."/uploads/".$filename;
		$product=new Product;
		$product->title=Input::get('title');
        $product->image=$filepath;
        $product->categ_id=$food;
        //if($category==F)
          $product->save();

	}
	public function index()
	{
		//echo 'hi';
		$img=new Product;
		$img=$img->get_url();

		return $img;

	}
	public function del_image()
	{   $name=Input::get('del_img');
		$img_url=New GrouponModel;
		$img_url=$img_url->delete();
		var_dump($img_url);
	}
	public function multi_img()
	{
		return View::make('multiple_img');
	}
	public function upld_img()
	{
		$multi_files=Input::file('images');
		foreach ($multi_files as $file) {
			$name=$file->getClientOriginalName();
			//echo $name;
			$mve=$file->move('public/uploads',$name);
		
		}
	}
}