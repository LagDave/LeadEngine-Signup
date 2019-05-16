<?php
class Notfound extends CI_Controller{
    public function index(){
        return $this->load->view('pages/404');
    }
}