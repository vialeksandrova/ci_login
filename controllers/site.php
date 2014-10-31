<?php

class Site extends CI_Controller{

function __construct()
{
parent:: __construct();
$this->is_logged_in();
}

function index()
{
$data['main_content'] = "login_view";
$this->load->view("includes/template",$data);
}

function site_view(){
$this->load->view('site_view');
}

function signup_view(){
$this->load->view('signup_view');
}

function is_logged_in()
{
$is_logged_in = $this->session->userdata('is_logged_in');
if(!isset($is_logged_in)||$is_logged_in!=true){
echo "You don't have permission to accses this page. <a href='../login'>Login</a>";
die();
}
}

}
