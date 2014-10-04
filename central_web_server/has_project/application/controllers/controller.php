<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* This file controller.php is part of has_project project
 * Created on Apr 18, 2013  @ 2:38:40 PM
 * ============================================
 *                                            * 
 *       Developer : Sujith G                 * 
 *                   sujith3g@gmail.com       *
 *                                            *   
 * ============================================
 */
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function index() {
        if ($this->session->userdata('h_device')) {
            $data['dev_ip'] = $this->session->userdata('h_device_ip');
            $this->load->view('home', $data);
        } else {
            $this->load->view('sign_in');
        }
    }

    public function sign_in() {

        //echo $this->input->post('email');
        $email = $this->input->post('email');


        $password = $this->input->post('password');
        $this->db->where('dev_id', $email);
        $this->db->where('dev_passwd', $password);
        $query = $this->db->get('devices');
        if ($query->num_rows() >= 1) {
            $row = $query->row();
            $this->session->set_userdata('h_device', $email);
            $this->session->set_userdata('h_device_ip', $row->dev_ip);
            //echo "logged in";
            $data['dev_ip'] = $this->session->userdata('h_device_ip');
            $this->load->view('home', $data);
        } else {
            $data['err_msg'] = "wrong username or password !! try again";
            $this->load->view('sign_in', $data);
        }
    }

    public function sign_out() {
        $this->session->unset_userdata('h_device');
        echo "signed_out";
        redirect('controller');
    }
    public function post(){
        $test = $this->input->post('test');
        $test1 = $this->input->post('test1');
        $test2 = $this->input->post('test2');
        
        //echo $test.$test1.$test2;
    }
    public function android_get() {
        $user = $this->input->post('username');
        $pswd = $this->input->post('pswd');
        $ip = $this->input->post('ip');
        if ($ip !=""){
            $this->db->where('dev_id', $user);
            $query = $this->db->get('devices');
            if($query->num_rows() >= 1){
                $data['dev_ip'] = $ip;
                $this->db->where('dev_id',$user);
                $this->db->update('devices',$data);
            }else{
                echo "error";
            }
        } else {
            $this->db->where('dev_id', $user);
            $this->db->where('dev_passwd', $pswd);
            $query = $this->db->get('devices');
            if ($query->num_rows() >= 1) {
                $row = $query->row();
                echo "OK-" . "http://" . $row->dev_ip."/raspi.php";
            }else
                echo "Fail";
        }
    }

    public function test() {
        echo"<form action='android_get' method='post'><input type='text' name='username'/><input type='text' name='pswd'/><input type='submit'/></form>";
    }
    public function ip_update(){
        $user = $this->input->post('username');
        $paswd = $this->input->post('pswd');
        $ip = $this->input->post('ip');
        $query = $this->db->get('devices');
        if ($query->num_rows() >= 1) {
            $this->db->where('dev_id',$user);
            $dat['dev_ip']=$ip;
            $this->db->update('devices',$dat);
        }else{
            
        }
    }
}

?>
