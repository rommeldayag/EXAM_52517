<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

function __construct()

{

parent::__construct();

$this->load->helper('url');

$this->load->model('users_model');

}

public function index()

{

$data['user_list'] = $this->users_model->get_all_users();

$this->load->view('show_users', $data);

}




//Load Insert Form

public function add_form()

{

$this->load->view('insert');

}

//End



//Inserting users method
public function insert_new_user()

{

$udata['code'] = $this->input->post('code');

$udata['name'] = $this->input->post('name');

$udata['stocks'] = $this->input->post('stocks');

$udata['price'] = $this->input->post('price');

$res = $this->users_model->insert_users_to_db($udata);

if($res)
{

header('location:'.base_url()."index.php/users/".$this->index());

}
}
//End



//send getID to edit.php
public function edit(){
$id = $this->uri->segment(3);
$data['user'] = $this->users_model->getById($id);
$this->load->view('edit', $data);
}
//end




//Update users method
public function update()

{

$mdata['code']=$_POST['code'];

$mdata['name']=$_POST['name'];

$mdata['stocks']=$_POST['stocks'];

$mdata['price']=$_POST['price'];

$res=$this->users_model->update_info($mdata, $_POST['id']);

if($res){

header('location:'.base_url()."index.php/users/".$this->index());

}

}

//end



//delete method
public function delete($id)

{

$this->users_model->delete_a_user($id);

$this->index();

}


}
