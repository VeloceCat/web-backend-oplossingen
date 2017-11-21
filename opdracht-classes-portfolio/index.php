<?php

    function __autoload($classname) 
    {
        $filename = 'classes/' . $classname . '-class.php';
        include_once($filename);
    }
	
	$page = new HTMLbuilder('header.html', 'body.html', 'footer.html');

?>
