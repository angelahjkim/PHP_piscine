<?php
class Lannister {
	public function sleepWith($name) {
		if (get_parent_class($name) == "Stark")
			echo "Let's do this.\n";
	}
}
?>