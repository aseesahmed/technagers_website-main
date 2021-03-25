
<!DOCTYPE html>
<html lang="en">

<head>
<title>Quotation</title>
<?php include('include/head.php'); ?>

<meta name="title" content="Technagers | Technology Managers | IT Services | Business Solutions">
<meta name="description" content="Technagers | Technology Managers | IT Services | Business Solutions">
<meta name="keywords" content="software, website, web design, ecommerce, web development, website solution, software management, finance software, ecommerce sites, mobile app development software, secure software, application software, app making software, business development, software solution provider, graphic, graphic designing, logo, logo design, html, website banner, seo, search engine optimization, content writing, technology services, technology solutions, technology skills, technology tools, android development, php development, laravel development, codeignitor development, technology applications, website development, website engineering">
</head>

<body>

    <div class="page-wrapper">

    

        <!-- Main Header -->
        <header class="main-header header-style-one">
            <!-- Header Upper -->
            <?php include('include/header-main.php'); ?>
            <!--End Header Upper-->
        </header>
        <!-- End Main Header -->

        <!--Mobile Menu-->
        <?php include('include/mobile-menu.php'); ?>
         <!-- /.side-menu__block -->

        <!--Search Popup-->
        <?php include('include/search-popup.php'); ?>
        <!-- /.search-popup -->

        <!-- Banner Section -->
        <section class="page-banner">
            <div class="image-layer" style="background-image:url(images/background/image-7.jpg);"></div>
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="banner-inner">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <h1 class="theme_color">COME FOR A CHAT, COFFEE ON US</h1>
                        <p class="theme_color">We plan & create versatile apps for everybody no matter what industry or company you have a place to.</p>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">Quotation</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <!--Contact Section-->
        <section class="contact-section">
            <div class="auto-container">
                <div class="form-box">
                    <div class="sec-title">
                        <h2>Thank you for your interest<span class="dot">...</span></h2>
                    </div>
                    <div class="default-form">
                        <form method="post" action="quotation.php" id="contact-form">
                            <div class="row clearfix">
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-inner">
                                        <input type="text" name="quotation_username" value="" placeholder="Your Name" required="">
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-inner">
                                        <input type="email" name="quotation_email" value="" placeholder="Email Address"
                                            required="">
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-inner">
                                        <input type="tel" name="quotation_phone_number" value="" placeholder="Phone Number" required="">
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-inner">
                                        <input type="text" name="quotation_company" value="" placeholder="Company" required="">
                                    </div>
                                </div>
                                <!-- <div class="form-group col-lg-12 col-md-6 col-sm-12">
                                    <div class="field-inner">
                                        <select type="text" name="quotation_country" value="" placeholder="Select Country" required="">
                                        <option value="select">Select Country</option>
                                            <option value="#">Pakistan</option>
                                            <option value="#">India</option>
                                            <option value="#">Bangladesh</option>
                                            <option value="#">Saudia Arabia</option>
                                            <option value="#">UAE</option>
                                        </select>
                                        
                                    </div>
                                </div> -->
                                <!-- <div class="form-group col-lg-12 col-md-6 col-sm-12">
                                    <div class="field-inner">
                                        <select type="text" name="quotation_region" value="" placeholder="Region" required="">
                                        <option value="select">Select Region</option>
                                            <option value="#"></option>
                                            <option value="#"></option>
                                            <option value="#"></option>
                                            <option value="#"></option>
                                            <option value="#"></option>
                                            <option value="#"></option>
                                        </select>
                                        
                                    </div>
                                </div> -->
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-inner">
                                        <input type="text" name="quotation_website" value="" placeholder="Website" required="">
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-inner">
                                        <input type="text" name="quotation_budget" value="" placeholder="Budget" required="">
                                    </div>
                                </div>
                               <!--  <div class="form-group col-lg-12 col-md-6 col-sm-12">
                                    <div class="field-inner">
                                                          <select type="text" name="services_id" value="" placeholder="Product Category" required="">
                                            <option value="">Select Category</option>
                                            <?php
                                                        // include "db/conn.php";
                                                        // $stmt = $conn->prepare("SELECT quotation_form, user_category_name, user_category_type FROM user_category");
                                                        // $stmt->execute();
                                                        // $result = $stmt->fetchAll();
                                                        // foreach($result as $uc)
                                                        // {
                                                        //     echo "<option value='".$uc['user_category_id']."'>".$uc['user_category_name']."</option>";
                                                        // }
                                            ?>
                                            <option value="1">Website Development</option>
                                            <option value="2">Graphic Designing</option>
                                            <option value="3">Digital Marketing</option>
                                            <option value="4">Content Writing</option>
                                            <option value="5">App Development</option>
                                            <option value="6">UI/UX Designing</option>
                                        </select>
                                        
                                    </div>
                                </div> -->
                                
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="field-inner">
                                        <textarea name="quotation_address" placeholder="Address" required=""></textarea>
                                    </div>
                                </div>
                               
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="field-inner">
                                        <textarea name="quotation_message" placeholder="Write Message" required=""></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <button class="theme-btn btn-style-one" name="submit"> 
                                        <i class="btn-curve"></i>
                                        <span class="btn-title">Submit</span>
                                    </button>
                                </div>
                            </div>
                            <?php

	include 'db/db_connect.php';

	if (isset($_POST['submit'])) 
	{
		$quotation_username = !empty($_POST['quotation_username']) ? trim($_POST['quotation_username']) : null;
		$quotation_email = !empty($_POST['quotation_email']) ? trim($_POST['quotation_email']) : null;
		$quotation_phone_number = !empty($_POST['quotation_phone_number']) ? trim($_POST['quotation_phone_number']) : null;
		$quotation_company = !empty($_POST['quotation_company']) ? trim($_POST['quotation_company']) : null;
		$quotation_website = !empty($_POST['quotation_website']) ? trim($_POST['quotation_website']) : null;
		$quotation_budget = !empty($_POST['quotation_budget']) ? trim($_POST['quotation_budget']) : null;
		$quotation_address = !empty($_POST['quotation_address']) ? trim($_POST['quotation_address']) : null;
		$quotation_message = !empty($_POST['quotation_message']) ? trim($_POST['quotation_message']) : null;

		
		// echo $quotation_username."<br/>";
		// echo $quotation_email."<br/>"; 
		// echo $quotation_phone_number."<br/>"; 
		// echo $quotation_company."<br/>"; 
		// echo $quotation_website."<br/>";
		// echo $quotation_budget."<br/>";
		// echo $quotation_website."<br/>";
		// echo $quotation_message."<br/>";

		//Prepare our INSERT statement.


		$sql = "INSERT INTO 
		 			quotation_form (quotation_username, quotation_email, quotation_phone_number, quotation_company, quotation_website, quotation_budget, quotation_address, quotation_message) 
				VALUES 
					(:quotation_username, :quotation_email, :quotation_phone_number, :quotation_company, :quotation_website, :quotation_budget, :quotation_address, :quotation_message)";

		$stmt = $conn->prepare($sql);

		//Bind our variables.
		$stmt->bindValue(':quotation_username', $quotation_username);
		$stmt->bindValue(':quotation_email', $quotation_email);
		$stmt->bindValue(':quotation_phone_number', $quotation_phone_number);
		$stmt->bindValue(':quotation_company', $quotation_company);
		$stmt->bindValue(':quotation_website', $quotation_website);
		$stmt->bindValue(':quotation_budget', $quotation_budget);
		$stmt->bindValue(':quotation_address', $quotation_address);
		$stmt->bindValue(':quotation_message', $quotation_message);

		//Execute the statement and insert the new account.
		$result = $stmt->execute();
		
		
		

		echo "<br/> Submitted Successfully";
	}
?>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Footer -->
        <?php include('include/main-footer.php'); ?>

    </div>
    <!--End pagewrapper-->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>



    <?php include('include/scripts.php'); ?>


    

</body>

</html>