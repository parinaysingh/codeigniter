<?php

class User_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }

    public function check_user_exists(){
        $email = $this->input->post('email');
        $res = $this->db->get_where('users', array('email' => $email));
        return $res->num_rows() > 0 ? true : false;
    }

    public function create_new_user(){
        $user = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );
        $insert = $this->db->insert('users', $user);
        return $insert;
    }

    public function login(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $res = $this->db->get_where('users', array('email' => $email, 'password' => $password));
        return $res;
    }

    public function get_user_details(){
        $email = $this->session->userdata('logged_user');
        $res = $this->db->query("SELECT * FROM users WHERE email = '$email'");
        return $res->row();
    }
}