<?php
//missed include file from product.class.php
include_once(ABSOLUTE_PATH . '/webconfig.php');
include_once(ABSOLUTE_PATH . '/classes/product.class.php');


class veggie extends product {

	protected $product_type = "v";

	function __construct($product_id, $product_name, $price_type, $product_price)
		{
			$this->product_id = $product_id;
			$this->product_name = $product_name;
			$this->price_type = $price_type;
			$this->product_price = $product_price;
		}

	function __get($variablename)
		{
			return $this->$variablename;
		}

	function __set($variablename, $variablevalue)
		{
			$this->$variablename = $variablevalue;
		}

	function __destruct()
		{
		}


}

?>
