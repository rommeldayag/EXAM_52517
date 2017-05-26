<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Hello3 extends CI_Controller{
// declare variables or class properties
var $name;
var $lname;
var $color;

function __construct(){
parent::__construct();
// give default value
$this->name="Cleofe";
$this->lname="Dayag";
$this->color="pink";
}
function you($firstname='', $lastname='')// Give variable that can GET value
{
$data['name']=($firstname)?$firstname:$this->name;
$data['lname']=($lastname)?$lastname:$this->lname;
$data['color']=$this->color;
// define variable sent to views
$this->load->view('you_view2',$data);
}
}
?>