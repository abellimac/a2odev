<?php
namespace App\Classes;

class Problem2Class {
	private $input;
	private $n;
	private $k;
	private $rq;
	private $cq;
	private $obstacles = array();

	function __construct($input) {
		$this->input = trim($input);
	}

	public function parseInput() {
		$this->input;

		$inputData = explode("\n", $this->input);
		$firstIndex = explode(" ", $inputData[0]);
		$SecondIndex = explode(" ", $inputData[1]);

		$this->n = $firstIndex[0];
		$this->k = $firstIndex[1];

		$this->rq = $SecondIndex[0];
		$this->cq = $SecondIndex[1];

		unset($inputData[0]);
		unset($inputData[1]);

		if (count($inputData)) {
			foreach ($inputData as $key => $value) {
				$eValue = explode(" ", $value);
				$this->obstacles[] = [$eValue[0], $eValue[1]];
			}
		} else {
			$this->obstacles[] = [0, 0];
		}
	}

	public function queensAttack() {
		$up = $this->n - $this->rq;
		$right = $this->n - $this->cq;
		$down = $this->rq - 1;
		$left = $this->cq - 1;

		$upLeft = min($up, $left);
		$upRight = $this->n - max($this->cq, $this->rq);
		$downLeft = min($this->cq, $this->rq) - 1;
		$downRight = min($this->rq - 1, $this->n - $this->cq);

		for ($i = 0; $i < $this->k; $i++) {
			$ro = $this->obstacles[$i][0];
			$co = $this->obstacles[$i][1];

			$ro == $this->rq &&
		      ($co > $this->cq
		        ? ($up = min($up, $co - $this->cq - 1))
		        : ($down = min($down, $this->cq - $co - 1)));

		    $co == $this->cq &&
		      ($ro > $this->rq
		        ? ($right = min($right, $ro - $this->rq - 1))
		        : ($left = min($left, $this->rq - $ro - 1)));


			abs($co - $this->cq) == abs($ro - $this->rq) && ($co > $this->cq && $ro > $this->rq && ($upRight = min($upRight, $co - $this->cq - 1)));
			$co >  $this->cq && $ro <  $this->rq && ($downRight = min($downRight, $co -  $this->cq - 1));
			$co <  $this->cq && $ro >  $this->rq && ($upLeft = min($upLeft,  $this->cq - $co - 1));
			$co <  $this->cq && $ro <  $this->rq && ($downLeft = min($downLeft,  $this->cq - $co - 1));
		}

		return $right + $left + $up + $down + $downLeft + $upLeft + $downRight + $upRight;
	}
}