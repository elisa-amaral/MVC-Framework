<?php 

namespace App;

use Miniframework\Init\Bootstrap; 

class Route extends Bootstrap 
{

     protected function initRoutes() 
	 {

	   $routes['home'] = array(
	       'route' => '/', 
	       'controller'=> 'IndexController',
	       'action' => 'index'
	   );

	   $routes['sample-page']  = array(
	       'route' => '/sample-page', 
	       'controller'=> 'IndexController',
	       'action' => 'samplePage'
	   );

	   $this->setRoutes($routes);
   }

}

?>