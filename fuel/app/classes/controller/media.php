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
class Controller_Media extends Controller
{
        /* ログイン状態のチェック */
        /* 開発中につきコメントアウト */
        public function before()
	{
            //未ログインの場合、ログインページへリダイレクト
            if(!Auth::check()){
                    Response::redirect('/auth/index');
            }else{
                
                $mcode = Cookie::get('mcode');
                $key = 'RDTOOLのメディア名を保存する鍵';
                $mcode_decrypt = openssl_decrypt($mcode, 'AES-128-ECB', $key);

                $usergroup = Auth::get_profile_fields('usergroup');
                $medianame = Auth::get_profile_fields('medianame');

                if($mcode_decrypt != $medianame){
                    Response::redirect('auth/logout');
                }
                 
         
            }
                   
	}
        
        /**
	 * A typical "Hello, Bob!" type example.  This uses a Presenter to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
                $data = array();
                
                
                $usergroup = Auth::get_profile_fields('usergroup');
                $medianame = Auth::get_profile_fields('medianame');
                
                $data['medianame'] =  $medianame;
                
		return Response::forge(View::forge('media/index',$data));
	}
        
        
        
        
    
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_read()
        {        
                
                $data = array();
               
                $usergroup = Auth::get_profile_fields('usergroup');
                $medianame = Auth::get_profile_fields('medianame');
                
                $mid = $medianame;
                $cam = null;
                $pid = "";
                
                //$to = "";
                //$pid = isset($_POST['pid']) ? htmlspecialchars($_POST['pid']) : null;
                $pid = isset($_POST['pid']) ? htmlspecialchars($_POST['pid']):null;
                $year = isset($_POST['year']) ? htmlspecialchars($_POST['year']) : null;
                $month = isset($_POST['month']) ? htmlspecialchars($_POST['month']) : null;
                $day = isset($_POST['day']) ? htmlspecialchars($_POST['day']) : null;
                //$sql_result_alllist = DB::select()->from('mst_campaign')->where('medianame',$mid)->execute();
                $data['sql_result_alllist'] = DB::select()->from('mst_campaign')->where('medianame',$mid)->execute()->as_array();
                
                $to = $year.$month.$day; 
                $combine_ymd = $year."-".$month."-".$day;
                $clickcount = "";
                $campaignname = "";
                $cvcount = "";

            
            
                //pid あり
                
                
                
                if($to == "________"){
                    //日付なし
                
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
                    $sql_result = DB::select('*')->from('tr_clickcounter')->where('medianame',$mid)->and_where('created_at','like', $combine_ymd)->execute(); 
                    $sql_result_details = DB::select()->from('tr_clickcounter')->where('medianame',$mid)->and_where('created_at','like',$combine_ymd)->execute();  
                    
                    $clickcount = count($sql_result);  
                    $sql_result_cvcount = DB::select('*')->from('tr_cvcount')->where_open()->where('medianame',$mid)->and_where('created_at','like', $combine_ymd)->where_close()->and_where_open()->where('status','in',array('1',NULL))->and_where_close()->execute(); 
                    $cvcount = count($sql_result_cvcount);
                    //期間ロジック終了
                    
                    
                    //Debug::dump($clickcount,$cvcount);
                    
                } 
    
            
                
                    
                    

            
        
                    $campname ="";
                
                    //パラメータ取得
                    //$sql_result_cpurl = DB::select()->from('mst_campaign')->execute()->as_array();
                    $campaignname = DB::select()->from('mst_campaign')->where('medianame',$medianame)->execute(); 
                    
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
                    
                    
               
                    
	
		return Response::forge(View::forge('media/read',$data));
	}

        
            
    
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
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
                    
                    
                    
                    
	
		return Response::forge(View::forge('media/campaigndetail',$data));
	}

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
	/**
	 * A typical "Hello, Bob!" type example.  This uses a Presenter to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_hello()
	{
		return Response::forge(Presenter::forge('media/hello'));
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(Presenter::forge('media/404'), 404);
	}
}
