<?php
namespace App\Classes;

class Problem1Class {
	private $input;
	private $categories;
	private $matchResult = array();
	private $countMatch;

	function __construct($input) {
		$this->input = trim($input);
	}

	public function getInput() {
		return $this->input;
	}

	public function getCategories() {
		return $this->categories;
	}

	public function separateCategories() {
        $inputArray = explode("\n", $this->input);

        $categories = array();
        $indexCategory = 0;
        $stringCategory = "";

        foreach ($inputArray as $key => $value) {
            if ($value == "FIN") {
                $indexCategory = $key + 1;
                $stringCategory = "";
            } else {
                if ($indexCategory != $key) {
	                $stringCategory .= "$value \n";
	                $categories[$inputArray[$indexCategory]] = $stringCategory;
                }
            }
        }

        $this->categories = $categories;
	}

	public function checkResults() {
		$categories = $this->categories;
		foreach ($categories as $key => $value) {
			$this->matchResult[$key] = array();
			$this->countMatch[$key] = 0;
			$matchCategories = explode("\n", $value);
			foreach ($matchCategories as $mKey => $mValue) {
				if (trim($mValue)) {
					$this->countMatch[$key]++;
				}

				$mValue = explode("\n", $mValue);
				foreach ($mValue as $wkey => $wValue) {
					$wValue = explode(" ", trim($wValue));
					if (isset($wValue[1])) {
						if (!isset($this->matchResult[$key][$wValue[0]])) {
							$this->matchResult[$key][$wValue[0]] = 0;
						}

						if (!isset($this->matchResult[$key][$wValue[2]])) {
							$this->matchResult[$key][$wValue[2]] = 0;
						}

						if ($wValue[1] > $wValue[3]) {
							$this->matchResult[$key][$wValue[0]] += 2;
							$this->matchResult[$key][$wValue[2]] += 1;
						}
						if ($wValue[1] < $wValue[3]) {
							$this->matchResult[$key][$wValue[2]] += 2;
							$this->matchResult[$key][$wValue[0]] += 1;
						}
					}
				}
			}
		}
	}

	public function getResults() {
		$results = array();
		foreach ($this->matchResult as $key => $value) {
			$countMatchByCategory = count($this->matchResult[$key]);
			arsort($value);
			$firstKey = array_key_first($value);
			$calculateMissingMatches = (($countMatchByCategory * ($countMatchByCategory - 1)) - $this->countMatch[$key]);
			if (array_count_values($value)[$value[$firstKey]] > 1) {
				$results[] = "EMPATE $calculateMissingMatches";
			} else {
				$results[] = "$firstKey $calculateMissingMatches";
			}
		}
		return $results;
	}
}