<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Needles extends CI_Controller
{
	public function angka()
	{
		$arr=
			array("red", "blue", "yellow", "black", "grey");
		$haystack="blue";
		echo json_encode($arr);

		echo $this->array_strpos($haystack,$arr);
	}
	private function array_strpos($haystack, $needles)
	{
		foreach ($needles as $needle)
			if (strpos($haystack, $needle) !== false) return true;
		return false;
	}
}
