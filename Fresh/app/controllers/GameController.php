<?php
class GameController extends BaseController
{
	public function index()
	{
		return View::make('game');
	}
	public function index1()
	{
		return View::make('player2');
	}
	public function save()
     {
     	$insrt=new GameModel;
     	$insrt=$insrt->insrt_score();
     
     	return Redirect::to('player2');
     }
     public function login()
     {
        return View::make('gamelogin');
     }
     public function scre_list()
     {
          return View::make('scorelist');
     }
     public function find()
     {
     	$find=New GameModel;
     	$find=$find->search();
          if($find==NULL)
               echo 'Your score is 0';
          else
     	echo "Your score is $find";
     }
     public function scorelist()
     {
          $list=New GameModel;
          $list=$list->score_list();
          return View::make('scorelist')->with('lists',$list);
     }
     public function register()
     {
          return View::make('gameregister');
     }
     public function reg_user()
     {
          $reg=New GameModel;
          $reg=$reg->register();
          /*if($reg=="Already registered")
                return Response::json(false,200);
            else
               return Response::json(true,200);*/
               $pass=Input::get('pass1');
              Mail::send('emails.auth.reminder', array('key' =>$pass), function($message)
{
    $message->to('divyaumapathi23@gmail.com', 'Divya Umapathi')->subject('Welcome!');
});
               
               
     }
     public function insert()
     {  //$usrnme=Input::get('user');
     	$save=New GameModel;
     	$save=$save->insrt_usr();
          if($save=="not registered")
               return Redirect::to('gamereg');
     	   /* if($save=="Not Registered")
     	    {

     	    	return Redirect::to('gmelogin')->with('session',$save);
     		     	}*/
     		     
     		     		Session::put('status',$save);
     		            return Redirect::to('player2');

                          // return Redirect::to('login');
     		     	
   
     }	
     public function mail()
     {
          return View::make('reset');
     }
     public function reset()
     {
          return View::make('pass_change');
     }
     public function change()
     {
          $change=New GameModel;
          $change=$change->pass_change();
          var_dump($change);
     }
     public function reset_pass()
     {
        $to=new GameModel;
        $to=$to->reset_pass();
        //var_dump($to);
        echo "Please check your mail" ; 
     }
     public function resetpassword()
     {
          return View::make('password_change');
     }
     public function rset()
     {
          $update=New GameModel;
          $update=$update->rset();
          //var_dump($update);
          echo "You successfully changed your password";
     }
     public function style()
     {
          return View::make('style');
     }

}