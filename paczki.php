<?php
class Paczki {
	private $x;
	private $y;
	private $z;

	private $min = 0;
	private $sum = 0;

	public function __construct()
	{
		$this->x = 0;
		$this->y = 0;
		$this->z = 0;
	}

	private function readData($data = '')
	{
		$arrayData = explode('x',$data);
		if (count($arrayData) == 3) {
			$this->setData($arrayData[0], $arrayData[1], $arrayData[2]);
			return true;
		}
		return false;
	}

	private function setData($x = 0, $y = 0, $z = 0)
	{
 		$this->x = $x;
		$this->y = $y;
		$this->z = $z;
	}

	private function setArea()
	{
		$areaXY = $this->x * $this->y;
		$areaXZ = $this->x * $this->z;
		$areaYZ = $this->y * $this->z;

		$arrayToMin = [$areaXY, $areaXZ, $areaYZ];

		$this->min = min($arrayToMin);
		$this->sum = $areaXY * 2 + $areaXZ * 2 + $areaYZ * 2;
	}

	public function result($data = '') {
		if( !$this->readData($data) ) {
			return 0;
		}
		$this->setArea();
		return $this->sum + $this->min;
	}

}
