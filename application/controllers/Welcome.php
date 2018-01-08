<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index(){
        if(!($this->session->userdata('logged_user'))){
            redirect('/login', 'location');
        }
        $this->load->model('User_model');
        $user = $this->User_model->get_user_details();
        if($user){
            $this->load->view('welcome_message', $user);
        }else{
            $this->session->unset_userdata('logged_user');
            redirect('/login', 'location');
        }
	}
}
