<?php defined('BASEPATH') or exit('No Script Allowed Here');

class Penerbit extends CI_Controller{

    function index(){
        $this->load->view('home');
    }

    function register(){
        $this->load->view('signup');
    }

    function promo(){
        $this->load->view('promo');
    }

}