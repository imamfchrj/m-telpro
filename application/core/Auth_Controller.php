<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Auth_Controller extends CI_Controller
{

	function __construct()
	{
        parent::__construct();
    }
    

	/**
	 * Get user_id
	 *
	 * @return	string
	 */
	function get_user_id()
	{
		return intval($this->session->userdata('user_id'));
	}

	/**
	 * Get username
	 *
	 * @return	string
	 */
	function get_username()
	{
		return $this->session->userdata('username');
	}

	/**
	 * Get email
	 *
	 * @return	string
	 */
	function get_email()
	{
		return $this->session->userdata('email');
    }

	/**
	 * Get login_config
	 *
	 * @return	string
	 */
	function get_login_config()
	{
		return intval($this->session->userdata('login_config'));
    }
    
    function logout_sess(){

        $this->session->sess_destroy();
        
		$this->session->set_userdata(array(
            'user_id'	=> "",
            'username'	=> "",
            'email'		=> "",
            'status'	=> "",
            'login_config' => ""));
	}
	
	function _check_email($val){
		$this->load->config('unallowed_email');
		if(preg_match($this->config->item('unallowed_email_regex'), $val)){ 
			$this->form_validation->set_message('_check_email', __('Email tidak diizinkan'));
			return FALSE;
		}
		$email_used = $this->db->where('email', $val)->get('admin_user')->num_rows();
		if($email_used){
			$this->form_validation->set_message('_check_email', 'Email telah digunakan. Silahkan gunakan Email lain.');
			return FALSE;
		}
		return TRUE;
	}
    

}