<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blueocean extends CI_Controller
{
	public function angka(){
		$array1=array(1,3,2,4,6,10);

		$key = array_search('10', $array1);
		unset($array1[$key]);
		echo json_encode($array1);
	}
	

}
