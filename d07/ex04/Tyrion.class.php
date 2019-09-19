<?php
class Tyrion extends Lannister {
	public function sleepWith($name) {
		if (get_parent_class($name) == "Lannister") {
				echo "Not even if I'm drunk !\n";
		}
		if (get_parent_class($name) == "Stark")
			echo "Let's do this.\n";
	}
}
?>