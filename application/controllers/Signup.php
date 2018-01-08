<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

    public function index()
    {
        if($this->session->userdata('logged_user')){
            redirect('/', 'location');
        }
        if(empty($this->input->post('email'))){
            $this->load->view('header', array('title' => 'Signup'));
            $this->load->view('signup');
            $this->load->view('footer');
            return;
        }

        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('passwordConf', 'Confirm Password', 'trim|required|matches[password]');
        if ($this->form_validation->run() == false){
            echo validation_errors();
        }else {
            $this->load->model('User_model');
            if ($this->User_model->check_user_exists()){
               echo "Email already exists. Please login!";
               return;
            }
            if($this->User_model->create_new_user()){
                $this->session->set_userdata('logged_user', $this->input->post('email'));
                echo 'success';
            }else{
                echo 'Error!';
            }

        }
    }
}
