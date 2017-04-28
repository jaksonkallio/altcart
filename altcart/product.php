<?
class Product {
	private $name;
	private $crypto_price;
	private $fiat_price;

	public function __construct($product_id) {
		// Load product from the database
	}

	// Set name of product
	public function setName($new_name){

	}

	// Set price of product
	public function setPrice($new_price){
		// If MAIN_CURRENCY_FIAT is true, new price is in fiat.
	}

	private function updateProductInfo(){

	}

	private function findOtherPrice(){
		// Finds the price of the opposite currency off of the base currency.
	}
}
?>
