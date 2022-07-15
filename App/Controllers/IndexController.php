<?php 

namespace App\Controllers;

use Miniframework\Controller\Action; 
use Miniframework\Model\Container; 

use App\Models\Products;
use App\Models\Data; 

class IndexController extends Action 
{

	public function index() 
   {
   
      $products = Container::getModel('Products');

      $this->view->data = $products->getProducts();

      $this->render('index', 'layout_1'); 
	}

	public function samplePage() 
   {
      
      $data = Container::getModel('Data');
 
		$this->view->data = $data->getData();

		$this->render('samplePage', 'layout_2');
	
	}
}

?>