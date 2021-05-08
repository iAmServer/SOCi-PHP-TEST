<?php 

	namespace App\Models;
	class Book {

		private $title;
		private $author;

		private $content = [];

		function __construct() {}

		public function setTitle($title) {
			$this->title = $title;
		}

		public function getTitle(): string {
			return $this->title;
		}

		public function setAuthor($author) {
			$this->author = $author;
		}

		public function getAuthor(): string {
			return $this->author;
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