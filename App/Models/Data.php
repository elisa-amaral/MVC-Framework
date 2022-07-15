<?php 

namespace App\Models;
use Miniframework\Model\Model; 

class Data extends Model { 

	public function getData() {

	$query = "select 
					title, 
					description 
				from 
					data";
	
		return $this->connection->query($query)->fetchAll(); 

	}
}

?>