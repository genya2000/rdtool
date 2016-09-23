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
class Controller_Manager extends Controller
{
        /* ログイン状態のチェック */
        /* 開発中につきコメントアウト */
        public function before()
	{
		//未ログインの場合、ログインページへリダイレクト
		if(!Auth::check()){
			Response::redirect('/auth');
		}  else {
                    $usergroup = Auth::get_profile_fields('usergroup');
                    if($usergroup != 'manager'){
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
		return Response::forge(View::forge('manager/index'));
	}

	/**
	 * @access  public
	 * @return  Response
	 */
	public function action_register()
	{
            
            $data = array();
            
            
            if(isset($_POST)){
                
            
            
                //初期化処理
               #include_once("../config.php");  
                
                $mid = "";
                $linkurl = "";
                $parameterurl = "";
                
                $array_nul = array($mid,$linkurl);
                
                //$mid = htmlspecialchars($_POST['mid']);
                //$linkurl = htmlspecialchars($_POST['linkurl']);
                
                $mid = isset($_POST['mid']) ? htmlspecialchars($_POST['mid']) : null;
                $campname = isset($_POST['campname']) ? htmlspecialchars($_POST['campname']) : null;
                $linkurl = isset($_POST['linkurl']) ? htmlspecialchars($_POST['linkurl']) : null;
                $array = array($mid,$linkurl);
            if($array != $array_nul){
                /**
                * ランダム文字列生成 (英数字)
                * $length: 生成する文字数
                */ 
           try{
                function makeRandStr($length = 14) {
                   static $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJLKMNOPQRSTUVWXYZ0123456789';
                   $str = '';
                   for ($i = 0; $i < $length; ++$i) {
                       $str .= $chars[mt_rand(0, 61)];
                   }
                   return $str;
                }
                $parameterid = makeRandStr();
                
            } catch (Exception $ex) {
                  echo "パラメタ―生成エラー発生:" . $e->getMessage(); 
                  exit(); 
            }
                /*
                $options = array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                );
                $db = new PDO($dsn, $db_username, $db_password, $options);
                */
                
                //date_default_timezone_set('Asia/Tokyo');
                $date = new DateTime();
                $date_local = $date->format('Y-m-d H:i:s');
                //echo $date->format('Y-m-d H:i:s'); // 2014-08-06 21:15:49
            //try{
                /*
                $sql  = $db->prepare("INSERT INTO mst_campaign(mediaid, parameterid, campname, linkurl,created_at)".
                       "VALUES (:mediaid, :parameterid, :campname, :linkurl, :created_at)");
                $arg  = array(':mediaid'      => $mid,
                              ':parameterid'  => $parameterid,
                              ':campname'     => $campname,
                              ':linkurl'      => $linkurl,
                              ':created_at'   => $date_local
                               );
                //$sql->execute($arg);
                //var_dump($arg);
                if (! $sql->execute($arg)) {
                                    echo "Failed";
                                    }
                                    */
                
                                    
                $sql_result = DB::insert('mst_campaign')->set(array(
                    'medianame'         =>  $mid,
                    'parameterid'       =>  $parameterid,
                    'campname'          =>  $campname,
                    'linkurl'           =>  $linkurl,
                    'created_at'        =>  $date_local
                     ))->execute();  
                
               // $rd_dir = "";
            
            $hostname = $_SERVER['SERVER_NAME'];
            //$rd_dir = "/fuelphp-1-7-2-rdtool/public";
            $rd_dir = "";
            
                
                /* URL生成の基本条件を設定 */
            //if ($mid && $linkurl) $parameterurl = $hostname.$rd_dir.'/rd.php?mid=' .$mid.'&pid=' .$parameterid;
            if ($mid && $linkurl) $parameterurl = 'http://'.$hostname.$rd_dir.'/rd.php?mid=' .$mid.'&pid=' .$parameterid;
            //} catch (Exception $ex) {
                  //echo "エラー発生:" . $e->getMessage(); 
                  //exit(); 
            //}
            $db = null;
            }    
           
            
            
            }
            
            
            $data['parameterurl'] = $parameterurl;
            return Response::forge(View::forge('manager/register',$data));
            
	}
        
        /**
	 * @access  public
	 * @return  Response
	 */
	public function action_read()
	{
            
            //Debug::dump($pid,$mid);
            
                $data = array();
                
                
                //include_once("../config.php"); 
                $mid_q = isset($_POST['mid_q']) ? htmlspecialchars($_POST['mid_q']) : null;
                $data['mid_q'] = $mid_q; 
               
                
        
                if(!empty($mid_q)){
                 
                $sql_result_comall = DB::select()->from('mst_campaign')->where('medianame',$mid_q)->execute()->as_array(); 
                $data['sql_result_comall'] = $sql_result_comall; 
      
                
                }
                
                 //$data['campaignname'] = $campname;                  
                 //$data['clickcount'] = $clickcount;
                 //$data['cvcount']  = $cvcount;
                 //$data['sql_result_cpurl'] = $sql_result_cpurl;
                 //$data['pid'] = $pid;
                 //$data['sql_result_alllist'] = $sql_result_alllist;
                 //$data['medianame'] =  $medianame;
                
                
                
                
                                
		return Response::forge(View::forge('manager/read',$data));
	}
        
        
        
        public function action_campaigndetail()
        {        
                
                $data = array();
               
                $usergroup = Auth::get_profile_fields('usergroup');
                $medianame = Auth::get_profile_fields('medianame');
                
                $mid = $medianame;
                $cam = null;
                //$pid = "";
                
                //$to = "";
                $pid = isset($_POST['pid']) ? htmlspecialchars($_POST['pid']):null;
                $year = isset($_POST['year']) ? htmlspecialchars($_POST['year']) : null;
                $month = isset($_POST['month']) ? htmlspecialchars($_POST['month']) : null;
                $day = isset($_POST['day']) ? htmlspecialchars($_POST['day']) : null;
                //$sql_result_alllist = DB::select()->from('mst_campaign')->where('medianame',$mid)->execute();
                $data['sql_result_alllist'] = DB::select('*')->from('mst_campaign')->where('medianame',$mid)->execute()->as_array();
                $to = isset($_POST['to']) ? htmlspecialchars($_POST['to']) : null;
                
                
                
                $to = $year.$month.$day; 
                $combine_ymd = $year."-".$month."-".$day;
                $clickcount = "";
                //$campaignname = "";
                $cvcount = "";

                //Debug::dump($to,$pid,$mid);
                
                
                if(is_null($day)){
                    //日付なし
                
                    //カウント数取得
                     $sql_result = DB::select('*')->from('tr_clickcounter')->where('parameterid',$pid)->execute();
                     $clickcount = count($sql_result);
                    //成果数取得
                     $sql_result_cvcount = DB::select('*')->from('tr_cvcount')->where('parameterid',$pid)->and_where('status','in',array('1',NULL))->execute(); 
                     $cvcount = count($sql_result_cvcount);
                     
                     
                   
                     
                }elseif ($to == "________") {
            
                    
                    //カウント数取得
                    $sql_result = DB::select('*')->from('tr_clickcounter')->where('medianame',$mid)->execute();
                    $clickcount = count($sql_result);
                    //成果数取得
                    $sql_result_cvcount = DB::select('*')->from('tr_cvcount')->where('medianame',$mid)->and_where('status','in',array('1',NULL))->execute(); 
                    $cvcount = count($sql_result_cvcount);  
                    
                    
                    } else {
                         
                        
                    //日付あり
                  
                    //ここから期間のロジック(カウント数取得）
                    $combine_ymd = $combine_ymd."%";
                    $sql_result = DB::select('*')->from('tr_clickcounter')->where('parameterid',$pid)->and_where('created_at','like', $combine_ymd)->execute(); 
                    //$sql_result_details = DB::select()->from('tr_clickcounter')->where('parameterid',$pid)->and_where('created_at','like',$combine_ymd)->execute();  
                    $clickcount = count($sql_result);  
                    
                    $sql_result_cvcount = DB::select('*')->from('tr_cvcount')->where_open()->where('parameterid',$pid)->and_where('created_at','like', $combine_ymd)->where_close()->and_where_open()->where('status','in',array('1',NULL))->and_where_close()->execute(); 
                    $cvcount = count($sql_result_cvcount);
                    //期間ロジック終了
                        
                    }
                    
                    
                //Debug::dump($clickcount,$pid,$mid, $cvcount);
                    
                    
                    
                
        
                    $campname ="";
                
                    //パラメータ取得
                    //$sql_result_cpurl = DB::select()->from('mst_campaign')->execute()->as_array();
                    $campaignname = DB::select()->from('mst_campaign')->where('parameterid',$pid)->execute(); 
                    
                    foreach ($campaignname as $val) {
                        $campname = $val['campname'];    
                    }
                    
                    $data['campaignname'] = $campname;                  
                    $data['clickcount'] = $clickcount;
                    $data['cvcount']  = $cvcount;
                    //$data['sql_result_cpurl'] = $sql_result_cpurl;
                    $data['pid'] = $pid;
                    //$data['sql_result_alllist'] = $sql_result_alllist;
                    $data['medianame'] =  $medianame;
                    
                    
                    
                    
	
		return Response::forge(View::forge('manager/campaigndetail',$data));
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
            
            
            
		return Response::forge(View::forge('manager/useradd'));
	}

        
       
	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(View::forge('manager/404'), 404);
	}
}
