<?php

function db()
{
    static $conn;
    if($conn===NULL)
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname="technagers_wdb";

        try {
        $conn = new PDO("mysql:host=$servername;dbname=technagers_wdb", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
        $abc = "Asees";
        } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        }
    }
    return $conn;

}


if(isset($POST['quotation_submit']))
  {
  	//CHECK FOR EMPTY FIELD

  	if(($_POST['quotation_username'] == "") || ($_POST['quotation_email'] == "") || ($_POST['quotation_phone_number'] == "") || ($_POST['quotation_company'] == "") || ($_POST['quotation_website'] == "") || ($_POST['quotation_budget'] == "") || ($_POST['quotation_address'] == "") || ($_POST['quotation_message'] == ""))
  	{
  		echo "<small>Fill All Fields</small><hr>";
  	}	

  	else
  	{
  		$quotation_username = $POST['quotation_username'];
    	$quotation_email = $POST['quotation_email'];
    	$quotation_phone_number = $POST['quotation_phone_number'];
    	$quotation_company = $POST['quotation_company'];
    	$quotation_website = $POST['quotation_website'];
    	$quotation_budget = $POST['quotation_budget'];
    	$quotation_address = $POST['quotation_address'];
    	$quotation_message = $POST['quotation_message'];

		$sql = "INSERT INTO quotation_form (quotation_username, quotation_email, quotation_phone_number, quotation_company, quotation_website, quotation_budget, quotation_address, quotation_message) VALUES ('$quotation_username','$quotation_email','$quotation_phone_number','$quotation_company','$quotation_website','$quotation_budget','$quotation_address','$quotation_message')";    
		
		$affected_row = $conn->exec($sql);
		echo $affected_row . "For inserted successfully"; 	 
   }
  	}

?>