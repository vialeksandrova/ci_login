<?php

class Login extends CI_Controller
{

function index()
{
$data['main_content'] = "login_view";
$this->load->view("includes/template",$data);
}

function validation()
{
$this->load->model('login_model');
$query = $this->login_model->validate();

if($query){//ако данните са валидирани
$data = array(
'username'=>$this->input->post('username'),
'is_logged_in'=>true
);
$this->session->set_userdata($data);
redirect('site/site_view');
}



else{
$this->index();
if($this->input->post('sbm')=="Create Account"){
redirect('login/signup');
}
}
}

function signup()
{
$data['main_content'] = "signup_view";
$this->load->view("includes/template",$data);
}

function create_member()
{
$this->load->library('form_validation');

$this->form_validation->set_rules('username','Username','trim|required|min_length[4]');
$this->form_validation->set_rules('password','Password','trim|required|min_length[4]');
$this->form_validation->set_rules('passwordconf','Confirm password','trim|required|matches[password]');

if($this->form_validation->run() ==FALSE){
$this->signup();
}

else{
$this->load->model('login_model');
if($query = $this->login_model->add_user()){
$data['main_content'] = 'congrats';
$this->load->view('includes/template', $data);
}
else{
$this->load->view('signup_view');
}
}
}


function logout()
{
$this->session->sess_destroy();
$this->index();
}

}
