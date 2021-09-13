<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Googlelogin extends CI_Controller {

public function __construct()
{
	parent::__construct();
	require_once APPPATH.'third_party/src/Google_Client.php';
	require_once APPPATH.'third_party/src/contrib/Google_Oauth2Service.php';
	
		$this->load->helper('url');
        $this->load->config('email');
        $this->load->library('email');
        $this->load->library('session');
        $this->load->model('login_model');
}
	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function login()
	{
	
		$clientId = '896631905852-8atdmu742s3dai99rt2rt0oepudmh1p9.apps.googleusercontent.com'; //Google client ID
		$clientSecret = 'CeCM1spTV5Ltx51hu8S9wMM3'; //Google client secret
		$redirectURL = base_url() .'googlelogin/login';
		//echo $redirectURL;die;
		
		//https://curl.haxx.se/docs/caextract.html

		//Call Google API
		$gClient = new Google_Client();
		$gClient->setApplicationName('Login');
		$gClient->setClientId($clientId);
		$gClient->setClientSecret($clientSecret);
		$gClient->setRedirectUri($redirectURL);
		$google_oauthV2 = new Google_Oauth2Service($gClient);
		
		if(isset($_GET['code']))
		{
			$gClient->authenticate($_GET['code']);
			$_SESSION['token'] = $gClient->getAccessToken();
			
			header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
		}

		if (isset($_SESSION['token'])) 
		{
			$gClient->setAccessToken($_SESSION['token']);
		}
		
		if ($gClient->getAccessToken()) {
            $userProfile = $google_oauthV2->userinfo->get();
			//echo "<pre>";
			//print_r($userProfile);
			$result = $this->login_model->social_media_add_user($userProfile);
			if($result){
				redirect('dashboard');	
			}
			die;
        } 
		else 
		{
            $url = $gClient->createAuthUrl();
		    header("Location: $url");
            exit;
        }
	}

function logout(){
		$clientId = '896631905852-8atdmu742s3dai99rt2rt0oepudmh1p9.apps.googleusercontent.com'; 
		$clientSecret = 'CeCM1spTV5Ltx51hu8S9wMM3'; //Google client secret
		$redirectURL = base_url() .'googlelogin/login';
		$gClient = new Google_Client();
		$gClient->setClientId($clientId);
		$gClient->setClientSecret($clientSecret);
		$gClient->setRedirectUri($redirectURL);
		//session_start();
		$accesstoken=$_SESSION['token'];
		
		
      // unset($_SESSION['userData']);
		$gClient->revokeToken();
		
		$gClient->revokeToken($accesstoken);
		//unset($_SESSION['token']);
		session_destroy();
		
		//session_regenerate_id(true);
		redirect('/');
    }		
}
