<?php 

	namespace App\Models;
	class NoteBook {

		private $owner;

		private $content = [];
		
		function __construct() {}

		public function setOwner($owner) {
			$this->owner = $owner;
		}

		public function getOwner(): string {
			return $this->owner;
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