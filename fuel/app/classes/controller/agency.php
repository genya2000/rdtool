<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.7
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2014 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Agency extends Controller
{
        /* ログイン状態のチェック */
        /* 開発中につきコメントアウト*/
        public function before()
	{
		//未ログインの場合、ログインページへリダイレクト
		if(!Auth::check()){
			Response::redirect('/auth');
		}  else {
                    $usergroup = Auth::get_profile_fields('usergroup');
                    
                    //Debug::dump($usergroup); exit;
                    
                    if($usergroup != 'agency'){
                        Response::redirect('auth/logout');
                    }    
                }
	}
       

	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		return Response::forge(View::forge('agency/index'));
	}

	/**
	 * A typical "Hello, Bob!" type example.  This uses a Presenter to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_register()
	{
		return Response::forge(View::forge('agency/register'));
	}

        
        /**
	 * A typical "Hello, Bob!" type example.  This uses a Presenter to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_useradd()
	{
                
            if($_POST)
            //if(Input::method()=='POST')

                {
                //POSTデータを受け取る
                /*
                $username=Input::post('username');
                $password=Input::post('password');
                $group=Input::post('group');
                $email=Input::post('email');
                $usergroup=Input::post('usergroup');
                */
                //$hash_passwd = password_hash($password, PASSWORD_DEFAULT);
               
                $usergroup = $_POST['usergroup'];
                $medianame = $_POST['medianame'];
                $profile_fields = array('usergroup' => $usergroup, 'medianame' => $medianame);
                
                // Authのインスタンス化
                $auth = Auth::instance(); 
                $auth->create_user(
                        $_POST['username'],
                        $_POST['password'],
                        $_POST['email'],
                        $_POST['group'],
                        $profile_fields
                        //array('usergroup' => $_POST['usergroup'])
                        );
                
                
                }
            
            
            
		return Response::forge(View::forge('agency/useradd'));
	}

        
        
	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
        
	public function action_404()
	{
		return Response::forge(View::forge('agency/404'), 404);
	}
}
