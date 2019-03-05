<?php 
/**
* Description: This class is used to obtain Standard Deviation of data set
*/

namespace Statistic;

class StandardDeviation
{
	private $rawGroup = [];

	public function setRawGroup(Array $rawGroup)
	{
		$this->rawGroup = $rawGroup;
	}

	protected function groupLength()
	{
		return count($this->rawGroup);
	}
    
    /**
    * This method is used to sum all values of array
    * @return int
    */
	protected function sumSomeGroup(Array $someGroup)
	{
		return array_sum($someGroup);
	}

	public function average()
	{
		if ($this->groupLength() <= 1) {
			return 0;
		}

		return $this->sumSomeGroup($this->rawGroup) / $this->groupLength();
	}

	protected function subtractOfAverageByDataOfTheGroup()
	{
		$subtractGroup = [];
		foreach ($this->rawGroup as $data) {
			array_push($subtractGroup, $data - $this->average());
		}

		return $subtractGroup;
	}

	protected function potentiationOfTheSubtractedData() 
	{
		$potentiationGroup = [];
		foreach ($this->subtractOfAverageByDataOfTheGroup() as $data) {
			array_push($potentiationGroup, $data**2);
		}

		return $potentiationGroup;
	}

	protected function sumOfTheSquares()
	{
		return $this->sumSomeGroup($this->potentiationOfTheSubtractedData());
	}

	public function variance()
	{
		if ($this->groupLength() <= 1) {
			return 0;
		}
        
        $divison = 0;

        try {
        	$division = ($this->sumOfTheSquares() / $this->groupLength()) - 1;
        } catch(\Exception $e) {
        	return 0;
        }

        return $division;
	}

	protected function squareRoot()
	{
		return sqrt(abs($this->variance()));
	}

	public function deviation()
	{
		if ($this->groupLength() < 1) {
			return 0;
		}

		return $this->squareRoot();
	}
}
