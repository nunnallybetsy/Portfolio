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
    <h1>
      <img id="logo" src="images/simplelogo.png" alt="logo"></h1>
    <?php include ('header.php');?>
  </header>


  <main>

    <img src="images/animal-3346331_1920.png" alt="lion">


    <section id="work">
      <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

      <h3 style="text-align: center;">Portfolio</h3>
      <div class="slideshow-container">
        <div class="mySlides fade">
          <h2 id="phead1">Color Me Crazy - <input class="colbtn" type="button" value="View Site" onclick="myCol()" /></h2>
          <img src="images/colormecrazy.PNG" alt="color" style="width:100%">
        </div>

        <div class="mySlides fade">
          <h2 id="phead2">Ace in the Hole - <input class="acebtn" type="button" value="View Site" onclick="myAce()" /></h2>
          <img src="images/ace.PNG" alt="ace" style="width:100%">
        </div>

        <div class="mySlides fade">

          <h2 id="phead3">Burrito Masala - <input class="burbtn" type="button" value="View Site" onclick="myBur()" /></h2>

          <img src="images/Capture.PNG" alt="burrito" style="width:100%">
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
        Each website I create has been carefully crafted by getting to know my client and their goals for the site. I then integrate what I learned from them with my experience and skillset to build a beautiful website. Please feel free to view the website of each design in order to review the different features of each one.
      </p>

      <section id="skills">
        <p>My skills inlude the following:</p>

        <section class="col span_4_of_12">
          <ul class="skills">
            <li>Mobile first design</li>
            <li>Responsive design</li>
            <li>UX/UI Design</li>
            <li>HTML</li>
          </ul>
        </section>
        <section class="col span_4_of_12">
          <ul class="skills">
            <li>CSS</li>
            <li>LESS processor</li>
            <li>PHP inludes/forms</li>
            <li>JavaScript/jQuery</li>
          </ul>

        </section>
        <section class="col span_4_of_12">
          <ul class="skills">

            <li>jQuery</li>
            <li>Social media feeds</li>
            <li>Weather feeds</li>
            <li>Wordpress</li>

          </ul>
        </section>
      </section>
    </section>


    <section id="process">
      <h3 style="text-align: center;">Process</h3>
      <section class="mbh-interview mbh-notification-box">
        <h4>Interview</h4>
        <p class="box">I want to get to know you and your business! The only way we can build an effective website that will reach out to your desired audinece is for me to understand the how and why of your business. The details can make all the difference in this process, and this is where I can get a better understanding of your passion for the work you do. Then together we will create a clear direction that will allow me to get the building process started.</p>
      </section>

      <section class="mbh-mobile mbh-notification-box">
        <h4>Mobile First<br> &amp;<br> Responsive Design</h4>
        <p class="box">I only build sites in mobile first and responsive design. This means that your business information is easy to read and readily accessible across all platforms, and that the website will adjust according to the screen size. This is especially important on smaller screens such as tablets and smartphones. I will ensure your website delivers an effective, satisfying experience for all users on your site.</p>
      </section>

      <section class="mbh-pricing mbh-notification-box">
        <h4>Pricing</h4>
        <p class="box">Every client is different, and support of non-profits, charities, and small businesses is a priority of mine. My prices will be individually formulated based on the desires and needs of your business. Whether you just need to retool an existing site or are in need of a brand new design I will build a price plan that is reasonable and fair for your business. Contact me today and we can get started.</p>

      </section>

    </section>

    <section id="about">
      <section id="contact">
        <section class="col3">
          <h4>Contact Me Today!</h4>
          <form action="thankyou.php" method="POST">

            Name:
            <input type="text" name="name" required><br> Email:
            <input type="email" name="email" required><br>

            <br>
            Message:
            <textarea id="message" type="text" name="comment" required></textarea>
            <input type="submit" value="Submit"><br>
          </form>
        </section>
      </section>

      <section class="col1">
        <h2>Betsy Steinert</h2>
        <img id="me" src="images/577067_3188210984066_1855893948_n.jpg" alt="me">
      </section>

      <section class="col2">
        <p id="top">
          As a website designer, I bring passion and creativity to each new project that I take on. I can build a brand new site based on your vision, or reconstruct your old website. I am up to date with current coding standards and have experience in graphic design. My strong feelings for the support of small businesses and non-profits means that I will work to meet your needs and constraints, creating a site that both you and your clientelle will love!

        </p>
      </section>



    </section>


    <section id="contact2">

      <h4>Contact Me Today!</h4>
      <form action="thankyou.php" method="POST">

        Name:
        <input type="text" name="name" required><br> Email:
        <input type="email" name="email" required><br>

        <br>
        <label for="comment">Message:</label>
        <textarea id="message" type="text" name="comment" required></textarea>
        <input type="submit" value="Submit"><br>
      </form>
    </section>
  </main>
  <script type="text/javascript" src="script/hamburger.js"></script>
  <script src="script/topbtn.js"></script>
  <script type="text/javascript" src="script/slide.js"></script>
  <script src="script/button.js"></script>


  <footer>
    <?php include ('footer.php');?>
  </footer>

</body>

</html>