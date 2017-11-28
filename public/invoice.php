<?php

    // configuration
    require("../includes/config.php"); 


	
    

    	
    
				
    	$rows = query("SELECT * FROM purchase_product WHERE user_id = ?", $_SESSION["id"]);
    	

    	
    	$positions = [];

		foreach ($rows as $row){

				 $items = query("SELECT name, price FROM products WHERE product_id = ?", $row["product_id"]);
				 $b = $items[0]["name"];
				 $c = $items[0]["price"];
				 


				 $positions[] = [ 
				 "invoicenumber" => $row["purchase_product_id"],
				 "date" => $row["date_purchased"],
				 "units" => $row["amount"],
				 "product" => $b,
				 "total" => $c * $row["amount"],
				 
				 ];

			}	

				


		
	
	     // render invoice
	    render("invoice.php", ["positions" => $positions, "title" =>"Invoice"]);	
	


	

			

	    
    

	    
    

?>