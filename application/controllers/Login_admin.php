<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients_nl extends All_Controller {
    
    
	function __construct()
	{
        parent::__construct();
    }
    
	public function login()
	{
		$data['menu']="home";
		$this->load->view('client/login',$data);
    }

    public function ajax_login(){
        $this->form_validation->set_rules('user_set', "user value", 'required|trim|xss_clean|callback__check_bool');
        $this->form_validation->set_rules('g-recaptcha-response', "Captcha", 'required|trim|xss_clean|callback__check_recaptcha');
        $this->form_validation->set_rules('email', "Email", 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', "Password", 'trim|required|xss_clean|min_length[8]|max_length[200]');
        $error=array();
        if ($this->form_validation->run()) {	
            $this->load->model('user/auth_advokat');
            $user=$this->auth_advokat->get_data_user_by_email($this->form_validation->set_value('email'));
            if($user){
                if($user->password==hashpass($this->form_validation->set_value('password'))){
                    if(!$user->username){
                        $user->username=$user->email;
                    }
                    $set_session=array(
                        'user_id'	=> $user->id,
                        'username'	=> $user->username,
                        'email'		=> $user->email,
                        'status'	=> $user->activated,
                        'login_config' => hashadvokat($user->email)
                    );
                    /* login user */
                    echo json_encode(array(
                        'is_error'=>false
                    ));
					$this->session->set_userdata($set_session);
                    return;
                }
                $error[]="Email atau Password salah";
            }else{
                $error[]="Email atau Password salah";
            }
			
        }
        if(validation_errors()){
            $eror[]=validation_errors();
        }
		echo json_encode(array(
            'is_error'=>true,
			'error_message'=>  $error
        ));
        return;
    }





}