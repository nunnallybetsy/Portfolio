<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, height=device-height, initial-scale=1" name="viewport">
  <title>Betsy Steinert Designs</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway%7CUbuntu" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/reset.css" rel="stylesheet" type="text/css">
  <link href="css/helper.css" rel="stylesheet" type="text/css">
  <link href="css/grid.css" rel="stylesheet" type="text/css">
  <link href="css/styles.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>

<body>

  <header class="main-header">
    <h1><img id="logo" src="images/simplelogo.png"></h1>
    <?php include ('header.php');?>
  </header>


  <main>
   <img src="images/ace.PNG">
    
    <div class="section group">
			<div class="col span_6_of_12">
				<section id="features"><!--In this section you can change the meat options in the list, h3 or image  -->
					<h3>Features</h3>
                  <ul>
                    <li>Some feature</li>
                    <li>Some feature</li>
                    <li>Some feature</li>
                    <li>Some feature</li>
                    <li>Some feature</li>
                    <li>Some feature</li>
                  
                  </ul>
				</section><!-- end of meat section -->
			</div>
			<div class="col span_6_of_12"><!--This allows the three options to be grouped into 3 columns that span across when in tablet or desktop mode, this is the 2nd column   -->
				<section id="specs"><!--In this section you can change the veggie options in the list, h3 or image  -->
					<h3>Specs</h3>
                    <p>Every client is different, my prices will be formulated based on the desires and needs of your business.  Whether it is a rebuild or a new design I will build a price plan that is right for your business. Contact me today and we can get started.</p>
                  
				</section><!-- end of veggie section -->
			</div>

    </div>


    
  </main>
  <script type="text/javascript" src="hamburger.js"></script>

  <footer>
    <?php include ('footer.php');?>
  </footer>

</body>

</html>