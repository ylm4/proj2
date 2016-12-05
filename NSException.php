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
$fp = new files();
$fp->open($file);

//will read file that does exist. 


?>
