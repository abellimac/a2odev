<?php
namespace App\Classes;

class Problem3Class {
	private $input;

	function __construct($input) {
		$this->input = trim($input);
	}

	public function getResult() {
		return $this->f();;
	}


	public function f() {
		$s = $this->input;
		$max = strlen($s);
		for ($i = 1; $i < strlen($s); $i++) {
			for ($j=0; $j <= strlen($s) - $i; $j++) {
				$l = substr($s, $j, $i);
				$ch = strlen($l) * $this->check($s, $l);
				if ($ch > $max) {
					$max = $ch;
				}
			}
		}
		return $max;
	}

	public function check($a, $b) {
		$k = 0;
		$j = 0;
		while(true) {
			$l = ((($test = strpos($a, $b, $j)) == "")? (($test === 0) ? $test : -1) : $test);
			if ($l == -1) {
				break;
			}
			$j = $l + 1;
			$k++;
		}
		return $k;
	}
}