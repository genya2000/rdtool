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
class Controller_Admin extends Controller
{
        /* ログイン状態のチェック */
        /*開発中につきコメントアウト*/
        public function before()
	{
		//未ログインの場合、ログインページへリダイレクト
		if(!Auth::check()){
			Response::redirect('/auth');
		}  else {
                    $usergroup = Auth::get_profile_fields('usergroup');
                    if($usergroup != 'admin'){
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
		return Response::forge(View::forge('admin/index'));
	}

	/**
	 * A typical "Hello, Bob!" type example.  This uses a Presenter to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_sum()
	{
            
                $data = array(); // ビューに渡す変数を格納
            
                $sql_result = NULL;
                $sql_result_details = NULL;
                
                
                $pid = isset($_POST['pid']) ? htmlspecialchars($_POST['pid']) : null;
                $year = isset($_POST['year']) ? htmlspecialchars($_POST['year']) : null;
                $month = isset($_POST['month']) ? htmlspecialchars($_POST['month']) : null;
                $day = isset($_POST['day']) ? htmlspecialchars($_POST['day']) : null;

                $to = $year.$month.$day;                   
                
            try{
                 $join_ymd = $year."-".$month."-".$day;
                 
                 if($to != "______"){
                    if(empty($pid)){
                    $join_ymd = $join_ymd."%";
                    $sql_result = DB::select('*')->from('tr_clickcounter')->where('created_at','like', $join_ymd)->execute()->as_array(); 
                    $sql_result_details = DB::select()->from('tr_clickcounter')->where('created_at','like',$join_ymd)->execute()->as_array();                     
                    }else{            
                    $join_ymd = $join_ymd."%";
                    $sql_result = DB::select('*')->from('tr_clickcounter')->where('parameterid',$pid)->and_where('created_at','like', $join_ymd)->execute()->as_array(); 
                    $sql_result_details = DB::select()->from('tr_clickcounter')->where('parameterid',$pid)->and_where('created_at','like',$join_ymd)->execute()->as_array();  
                    
                    
                    };
                 }else{
                    if(!empty($pid)){
                       $sql_result = DB::select('*')->from('tr_clickcounter')->where('parameterid',$pid)->execute()->as_array(); 
                       $sql_result_details = DB::select()->from('tr_clickcounter')->where('parameterid',$pid)->execute()->as_array();  
                  
                    };
                 };

                        $data['sql_result'] = $sql_result;
                        $data['sql_result_details'] = $sql_result_details;
                        
                 
                        
                        $num_rows = "";
                        $data['num_rows'] = count($sql_result);
                        
                      


                  } catch (Exception $ex) {
                            echo "エラー発生:" . $ex->getMessage(); 
                            exit(); 
                    } 

                    
                    
                   

            
            
		return Response::forge(View::forge('admin/sum',$data));
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
            
            
            
		return Response::forge(View::forge('admin/useradd'));
	}


	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(View::forge('admin/404'), 404);
	}
}
