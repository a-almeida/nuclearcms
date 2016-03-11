<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Testiu
{
	public $scripts=array('jquery','boostrap');
	function __construct()
	{
		
	}
	
	function init($scripts)
	{
		push_js();
		$scripts = push_array($scripts, $this->scripts);
		return $scripts;
	}
}