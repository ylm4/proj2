<?php

class files {
	public function open($file) {
		$openFile = fopen($file, 'r');
			if (file_exists($file)){
			echo "File Exists.";
			}
	}
}

	try {
		if (!file_exists($file)) {
		throw new Exception ("Error: File Does Not Exist");
		}
	}	 
	catch (Exception $e) {
		echo $e->getMessage();
	}






?>
