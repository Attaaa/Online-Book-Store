<?php defined('BASEPATH') or exit('No script allowed here');

class Admin extends CI_Controller{

    function index(){
        $this->load->view('admin/login');
    }

    function panel(){
        $this->load->view('admin/panel');
    }

    function writer(){
        $this->load->view('admin/writer');
    }

    function editor(){
        $this->load->view('admin/editor');
    }

    function product(){
        $this->load->view('admin/product');
    }

    function insert_book(){
        $this->load->view('admin/insert_book');
    }

}