<?php
class GrouponModel extends Eloquent
{
	public function insertcard_details()
	{
		$crdnumber=Input::get('card_number4');
		$crdname=Input::get('nameoncard');
		$cvv=Input::get('cvv-number');
		$captcha=Input::get('captcha');
		return DB::table('card')->insert(array('CardNumber'=>$crdnumber,'Name'=>$crdname,'Cvv'=>$cvv,'Captcha'=>$captcha));
	}
	public function user_details()
	{
		$code=Input::get('coupon');
		$check=DB::table('card')->where('Captcha',$code)->first();
		if($check)
		{
			return $check;
		}
		else
		{
			return Response::json(false,200);
		}
	}
}