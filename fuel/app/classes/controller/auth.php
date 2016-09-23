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
class Controller_Auth extends Controller
{

	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
            
                //すでにログイン済であればログイン後のページへリダイレクト
                //Auth::check() and Response::redirect('welcome');
                
                Auth::check();
                
                $usergroup = Auth::get_profile_fields('usergroup');
                $medianame = Auth::get_profile_fields('medianame'); 
                
                switch ($usergroup) {
                    case "media":            
                        $key = 'RDTOOLのメディア名を保存する鍵';
                        $medianame = openssl_encrypt($medianame, 'AES-128-ECB', $key);
                        Cookie::set('mcode', $medianame, time()+3600, '/');  /* 有効期限は一時間です */   
                                    
                        Response::redirect('media/read');
                        break;
                                
                    case "agency":
                        Response::redirect('agency/register');
                        break;
                                
                    case "manager":   
                        Response::redirect('manager/read');
                        break;
                                
                    case "admin":
                        Response::redirect('admin/sum');
                        break;              
                }
                
                
                
                //エラーメッセージ用変数初期化
                $error = null;

                //ログイン用のオブジェクト生成
                $auth = Auth::instance();

                //ログインボタンが押されたら、ユーザ名、パスワードをチェックする
                if (Input::post()) {

                    if ($auth->login(Input::post('username'), Input::post('password'))) {
                        // ログイン成功時、ログイン後のページへリダイレクト
                        //Response::redirect('welcome/');
                           
                        //認証結果に応じて異なるページへリダイレクト                         
                        $usergroup = Auth::get_profile_fields('usergroup');
                        $medianame = Auth::get_profile_fields('medianame');                               
                        //Debug::dump($usergroup,$medianame); exit;
                        
                        switch ($usergroup) {
                            case "media":    
                                $key = 'RDTOOLのメディア名を保存する鍵';
                                $medianame = openssl_encrypt($medianame, 'AES-128-ECB', $key);
                                Cookie::set('mcode', $medianame, time()+3600, '/');  /* 有効期限は一時間です */   
                                    
                                Response::redirect('media/index');
                                break;
                                
                            case "agency":
                                Response::redirect('agency/register');
                                break;
                                
                            case "manager":   
                                Response::redirect('manager/read');
                                break;
                                
                            case "admin":
                                Response::redirect('admin/sum');
                                break;     
                        }
                         
                    }else{
                        // ログイン失敗時、エラーメッセージ作成
                        $error = 'ユーザ名かパスワードに誤りがあります';
                    }
                }

                //ビューテンプレートを呼び出し
                $view = View::forge('auth/index');

                //エラーメッセージをビューにセット
                $view->set('error', $error);
                
                //Debug::dump($view); exit;
                

                return $view;

            
		//return Response::forge(View::forge('auth/index'));
	}

	/**
	 * A typical "Hello, Bob!" type example.  This uses a Presenter to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_logout()
	{
                $auth = Auth::instance();
                $auth->logout();

                //Response::redirect('/');
		return Response::forge(View::forge('auth/logout'));
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
