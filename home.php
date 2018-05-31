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
   <img src="images/animal-3346331_1920.png">
    <section id="about">

    <h2>About Me</h2>
    <img id="me" src="images/577067_3188210984066_1855893948_n.jpg">

    <p>
      My name is Betsy Steinert and I am a website designer who thrives off of creating new things.  

    </p>
      
</section>
    
   <section id="work">
     
     <h2>Portfolio</h2>
     <div class="slideshow-container">

<div class="mySlides fade">
  <h2 id="phead">Ace in the Hole - <input class="acebtn" type="button" value="View Specs" onclick="window.location.href='ace.php'" /></h2>	
  <img src="images/ace.PNG" style="width:100%">
</div>

<div class="mySlides fade">
  <h2 id="phead">Burrito Masala - <input class="burbtn" type="button" value="View Specs" onclick="window.location.href='registration.php'" /></h2>

  <img src="images/Capture.PNG"  style="width:100%">
</div>

<div class="mySlides fade">
  <h2 id="phead">Color Me Crazy - <input class="colbtn" type="button" value="View Specs" onclick="window.location.href='registration.php'" /></h2>
  <img src="images/colormecrazy.PNG" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
  


    <p>
      Each website I have created was carefully crafted by getting to know my client and their goals and integrating what I learned from them with my skills to build a beautiful website.  Please view the specs of each design to see details and features of each website.

    </p>
     
          
    </section>

 
    <section id="pricing">
      <h3>Process</h3>
      


<section class="mbh-interview mbh-notification-box">
      <h4>Interview Process</h4>
      <p class="box">I want to get to know you and your business.  The only way I can build an effective website that will reach out to your users is to understand the ins and outs of how your business works.  We together will create a clear direction that will get the building process started.</p>
      
 
</section>

<section class="mbh-mobile mbh-notification-box">
      <h4>Mobile First and Responsive Design</h4>
      <p class="box">I only build sites in Mobile first and responsive design, what this means is that your business information is easily readable and readily accessible across all platforms, the website will adjust according to the screen size. Most importantly on smaller screens suchs as tablets and smartphones.  I will ensure your website delivers an effective, satisfying experience for all users on your site.</p>
   </section>
     
      
  <section class="mbh-pricing mbh-notification-box">  
      <h4>Pricing</h4>
      <p class="box">Every client is different, my prices will be formulated based on the desires and needs of your business.  Whether it is a rebuild or a new design I will build a price plan that is right for your business. Contact me today and we can get started.</p>
     
      </section>
      </section>

   
   

    <section id="contact">
    <h4>Contact Me Today!</h4>
<form action="thankyou.php" method="POST">
	
 Name:
  <input type="text" name="name" required><br>
 
  Email:
  <input type="email" name="email" required><br>
 
Message:<br>
  <input type="text" name="comment" required><br>
  <input type="submit" value="Submit"><br>
</form>
    
    
    
    </section>
  </main>
  <script type="text/javascript" src="hamburger.js"></script>
  <script type="text/javascript" src="slide.js"></script>
 
  <footer>
    <?php include ('footer.php');?>
  </footer>

</body>

</html>