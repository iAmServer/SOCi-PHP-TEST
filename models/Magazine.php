<?php 

	namespace App\Models;
	class Magazine {

		private $name;
		private $content = [];

		function __construct() {}

		public function setName($name) {
			$this->name = $name;
		}

		public function getName(): string {
			return $this->name;
		}

		public function getPage($pageNumber): string {
			if (isset($this->content[$pageNumber])) {
				return $this->content[$pageNumber];
			}
			else {
				return "Page does not exist!";
			}
		}
	}
?>