<?php 

	namespace App\Models;
	class Item {

		public $name;

		function __construct($name) {
			$this->name = $name;
		}
	}
?>