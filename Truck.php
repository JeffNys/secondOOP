<?php
// Truck.php

require_once "Vehicle.php";
	/*
	 * Vehicle
	 * 	int $nbWheels
	 * 	int $currentSpeed
	 * 	string $color
	 * 	int nbSeats
	 *
	 * 	function forward([int]):int
	 * 	function brake([int]):int
	 * 	function setNbWheels(int):void
	 * 	function getNbWhells():int
	 * 	function setNbSeats(int):void
	 * 	function getNbSeats():int
	 * 	function setColor(string):void
	 * 	function getColor():string
	 */

class Truck extends Vehicle {
	/*
	* string
	*/
	private $energy;

	/*
	 * integer
	 */
	private $energyLevel;

	/*
	 * integer
	 */
	private $maxLoading;

	/*
	 * integer
	 */
	private $loading;

	public function __construct(string $color, int $nbSeats, int $nbWheels, string $energy, int $maxLoading, $energyLevel = 0) {
		parent::__construct($color, $nbSeats, $nbWheels);
		$this->maxLoading = $maxLoading;
		$this->energy = $energy;
		$this->energyLevel = $energyLevel;
	}
	
	public function setEnergy(String $energy):void {
		$this->energy = $energy;
	}

	public function getEnergy():String {
		return $this->energy;
	}

	public function setEnergyLevel(int $energyLevel):void {
		// petite condition anti "plein ilimité"
		if (100 < $energyLevel)$energyLevel = 100;
		$this->energyLevel = $energyLevel;
	}

	public function getEnergyLevel():int {
		return $this->energyLevel;
	}

	public function setMaxLoading(int $maxLoading):void {
		$this->maxLoading = $maxLoading;
	}

	public function getMaxLoading():int {
		return $this->maxLoading;
	}

	public function addLoading(int $load):string {
		if (($load + $this->loading) > $this->maxLoading) return "False";
		$this->loading += $load;
		return "ok";
	}

	public function lessLoading(int $load):void {
		if ($load > $this->loading) {
			$this->loading = 0;
		}else {
			$this->loading -= $load;
		}
	}

	public function getLoading():int {
		return $this->loading;
	}

	public function loadingStatus():string {
		if ($this->loading < $this->maxLoading) {
			return "in filling";
		}
		elseif ($this->loading >= $this->maxLoading) {
			return "full";
		}
		else return "bizare";
	}	
}
