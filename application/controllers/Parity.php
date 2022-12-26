<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Parity extends CI_Controller
{
	public function angka()
	{
		$array = array(160, 3, 1719, 19, 11, 13, -21);
		echo json_encode($array) . '<br/>';
		echo $this->find($array);
	}
	function find($integers)
	{
		$odds = [];
		$evens = [];
		foreach ($integers as $item) {
			if ($item % 2) array_push($odds, $item);
			else array_push($evens, $item);
		}
		return count($evens) === 1 ? $evens[0] : $odds[0];
	}
}
