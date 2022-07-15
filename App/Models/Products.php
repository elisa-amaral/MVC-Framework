<?php 

namespace App\Models;
use Miniframework\Model\Model; 

class Products extends Model 
{ 

	public function getProducts() 
	{
		$query = "select 
					id, 
					description, 
					price 
				  from 
					products";
		return $this->connection->query($query)->fetchAll(); 
	}
}

?>