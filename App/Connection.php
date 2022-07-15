<?php 

namespace App;

class Connection {

	public static function getDB() 
	{
     
	    try 
		{
	    	$connection = new \PDO
			( 

	    		"mysql:host=localhost;dbname=mvc_framework_in_php;charset=utf8",
	    		"root",
	    		"" //password

	    	);

	    	return $connection;
	    
	    } 
		catch (\PDOExcepion $error)
		{ 
	    	echo $error;
	    }

	}
}

?>