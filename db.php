<?php
	// db connection management
	$conn = new mysqli('localhost', 'root', '', 'my_portfolio');

	if(!$conn)
	{
		die("Fatal Error: Connection Error!");
	}
?>
