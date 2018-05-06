<?php defined('BASEPATH') or exit('No script allowed here');

class Admin extends CI_Controller{

    function index(){
        $this->load->view('admin/login');
    }

    function panel(){
        $this->load->view('admin/panel');
    }

}