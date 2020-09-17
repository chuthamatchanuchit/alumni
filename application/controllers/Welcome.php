<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	function __construct()
	{
		 parent::__construct();
		 echo "My Constucter"."</br>";
	}

	public function index()
	{
		//$data['name'] = "Poramin";
		//$data['email'] = "poramin0013@gmail.com";
		$data['student'] = array("614259005","chuthamat","chanuchit","Software Engineering");
		$this->load->view("hello_view",$data);
		
	}

	public function show($name=null,$lastname=null)
	{
		echo " Hello ".$name. " ".$lastname;
		$this->_display();
	}
	public function _display(){
		echo "</br>"."Softwere Engineering";
	}
}