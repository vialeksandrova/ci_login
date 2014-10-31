<?php

class Login_model extends CI_Model
{

function validate(){
$this->db->where('username',$this->input->post('username'));
$this->db->where('password',md5($this->input->post('password')));
$query = $this->db->get('login');
$num = $query->num_rows();

if($num == 1){
return true;
}

}

function add_user(){
$new_user = array(
'username'=>$this->input->post('username'),
'password'=>md5($this->input->post('password')),
);
$insert = $this->db->insert('login',$new_user);
return $insert;
}

}
