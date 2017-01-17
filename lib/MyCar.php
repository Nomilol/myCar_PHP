<?php

class MyCar extends Car {
	public function __construct() {
		parent::setManufacturer('unknow');
		parent::getWheels();
		parent::setKilometrage(100000);
		parent::setAirbag('true');
		parent::setAbs('false');
		parent::setDoors(5);
	}
}


