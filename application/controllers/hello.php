<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

//localhost/ci/index.php/(hello)/you
class Hello extends CI_Controller
{
function __construct(){
parent::__construct();
}



//localhost/ci/index.php/hello/(you)
function you()
{
$this->load->view('you_view');
}
}
?>