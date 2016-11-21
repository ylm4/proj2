<?php

function __autoload($html){
	echo "class path= " .$html;
	die;
}
new \htmlElementCreation\design();

?>
