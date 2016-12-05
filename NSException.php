<?php
//include_once "file.txt";
$file= "file.txt";

class files {
	public function open($file) {
		//echo "start\n";
		try
		{
		$openFile = fopen($file, "r");
		//echo " open succeeded\n";
		}
		catch(Exception $e)
		{
		echo ' caught exception: ', $e->getMessage(),'\n';
		}
		try 
		{
		//	echo " try to read something";

		//	echo fgets($openFile);
		echo readfile($file);
		}
		catch( Exception $e)
		{
		echo ' caught exception: ', $e->getMessage(),'\n';
		}
	}
}
/*
	try {
		if (!file_exists($file)) {
		throw new Exception ("Error: File Does Not Exist");
		}
	}	 
	catch (Exception $e) {
		echo $e->getMessage();
	}
*/
$fp = new files();
$fp->open($file);




?>
