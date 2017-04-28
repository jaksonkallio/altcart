<?
class Product {
	private $name;
	private $crypto_price;
	private $fiat_price;

	public function __construct($product_id) {
		// Load product from the database
		// Generate price based on which is set to main currency
	}

	// Set name of product
	public function setName($new_name){

	}

	// Set price of product
	public function setPrice($new_price){
		// If MAIN_CURRENCY_FIAT is true, new price is in fiat.

		if(MAIN_CURRENCY_FIAT){
			$fiat_price = $new_price;
		}else{
			$crypto_price = $new_price;
		}
	}

	public function getName(){
		return $name;
	}

	public function getPrice(){
		if(MAIN_CURRENCY_FIAT){
			return $fiat_price;
		}else{
			return $crypto_price;
		}
	}

	private function updateProductInfo(){

	}

	private function findOtherPrice(){
		// Finds the price of the opposite currency off of the base currency.
	}
}
?>
