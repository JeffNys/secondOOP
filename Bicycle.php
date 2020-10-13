<?php
// Bicycle.php

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

class Bicycle extends Vehicle {
	public function __construct(string $color, int $nbSeats, int $nbWheels) {
    		parent::__construct($color, $nbSeats, $nbWheels);
	}
}
