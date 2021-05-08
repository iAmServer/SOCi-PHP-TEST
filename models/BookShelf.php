<?php 

	namespace App\Models;

	class BookShelf {
		
		private $shelfCapacity = 100;
		private $items = [];

		function __construct($capcity = null) {
			if ($capcity) {
				$this->shelfCapacity = $capcity;
			}
		}

		public function store(Item $item) {

			if (count($this->items) < $this->shelfCapacity) {
				$this->items[] = $item;
				echo "New Item added";
			}
			else {
				echo "Shelf is filled up";
			}
		}

		public function retrieve(): array {
			return $this->items;
		}

		public function getShelfStatus(): array {
			return array(
				'availableItems' => count($this->items),
				'spaceAvailable' => $this->shelfCapacity - count($this->items));
		}
	}
?>