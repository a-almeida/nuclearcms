<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Layout_model extends CI_Model
{
	
	
	public function common()
	{
	 	$obj=(object)array();
	  	 $obj->head      ='common/head';
		 $obj->navbar    ='common/navbar';
		 $obj->asideleft ='common/asideleft';
		 $obj->scripts   ='common/scripts';
		 $obj->footer    ='common/footer';
		return $obj;
	}
	public function login()
	{
		$obj=(object)array();
		 $obj->head      ='common/head';
		return $obj;
	}
}