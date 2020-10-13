<?php
// Car.php

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

class Car extends Vehicle {
	/*
	* string
	*/
	private $energy;

	/*
	 * integer
	 */
	private $energyLevel;

	public function __construct(string $color, int $nbSeats, int $nbWheels, string $energy, $energyLevel = 0) {
		parent::__construct($color, $nbSeats, $nbWheels);
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
}
