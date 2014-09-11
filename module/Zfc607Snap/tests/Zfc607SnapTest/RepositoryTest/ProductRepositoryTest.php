<?php

namespace Zfc607SnapTest\RepositoryTest;

use Zfc607Snap\Repository\ProductRepository;

class ProductRepositoryTest extends \PHPUnit_Framework_TestCase{
	
	public function setUp(){
		$this->productRepository = new ProductRepository();	
	}
	
	public function testAddProperty(){
		$this->assertTrue(true);
	}
}

?>