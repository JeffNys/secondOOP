<?php
// Vehicle.php

class Vehicle {
	/*
	 * integer
	 */
	protected $nbWheels;

	/*
	 * integer
	 */
	protected $currentSpeed;

	/*
	 * string
	 */
	protected $color;

	/*
	 * integer
	 */
	protected $nbSeats;

	public function __construct(string $color, int $nbSeats, int $nbWheels) {
		// default values
		$this->nbWheels = $nbWheels;
		$this->currentSpeed = 0;
		$this->color = $color;
		$this->nbSeats = $nbSeats;
	}

	public function forward(int $speedMore = 1):int {
		$newSpeed = $this->currentSpeed;
		if (0 > $speedMore){
			return $newSpeed;
		}
		// maybe a new test to max speed in the futur?

		$newSpeed += $speedMore;
		$this->currentSpeed = $newSpeed;
		return $newSpeed;
	}

	public function brake(int $speedLess = 1):int {
		$newSpeed = $this->currentSpeed;
		if (0 > $speedLess){
			return $newSpeed;
		}

		// test about impossible negativ speed
		if ($speedLess > $newSpeed){
			$speedLess = $newSpeed;
		}

		$newSpeed -= $speedLess;
		$this->currentSpeed = $newSpeed;
		return $newSpeed;
	}

	public function getCurrentSpeed():int {
		return $this->currentSpeed;
	}

	public function setNbWheels(int $nbWheels):void {
		$this->nbWheels = $nbWheels;
	}

	public function getNbWheels():int {
		return $this->nbWheels;
	}

	public function setNbSeats(int $nbSeats):void {
		$this->nbSeats = $nbSeats;
	}

	public function getNbSeats():int {
		return $this->nbSeats;
	}

	public function setColor(string $color):void {
		$this->color = $color;
	}

	public function getColor():string {
		return $this->color;
	}

}
