<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        if($this->session->userdata('logged_user')){
            redirect('/', 'location');
        }
        if(empty($this->input->post('email'))){
            $this->load->view('header', array('title' => 'Login'));
            $this->load->view('login');
            $this->load->view('footer');
            return;
        }
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
        if ($this->form_validation->run() == false){
            echo validation_errors();
        }else {
            $this->load->model('User_model');
            $res = $this->User_model->login();
            if ($res->num_rows()){
               $this->session->set_userdata('logged_user', $this->input->post('email'));
               echo 'success';
            }else {
                echo 'Incorrect Credentials!';
            }
        }
    }
}
