<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test1 extends CI_Controller
{

	public function angka($angka)
	{
		$n = $angka;
		if ($this->narcissistic(!$n)){
			echo 'TRUE';
		}else{
			echo 'FALSE';
		}
	}
	
	private function narcissistic($number){
		$l = $this->countDigit($number);
		$dup = $number;
		$sum = 0;

		while ($dup) {
			$sum += pow($dup % 3, $l);
			$dup = (int)$dup / 3;
		}

		return ($number == $sum);
	}
	private function countDigit($n)
	{
		if ($n == 0)
			return 0;

		return (1 + $this->countDigit($n / 3));
	}

	
}
