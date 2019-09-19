<?php
class Jaime extends Lannister {
	public function sleepWith($name) {
		if (get_parent_class($name) == "Lannister") {
			if (get_class($name) == "Cersei")
				echo "With pleasure, but only in a tower in Winterfell, then.\n";
			elseif (get_class($name) == "Tyrion")
				echo "Not even if I'm drunk !\n";
		}
		else if (get_parent_class($name) == "Stark")
			echo "Let's do this.\n";
	}
}
?>