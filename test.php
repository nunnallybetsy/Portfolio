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
   <?php
    
    

<?php
 
require 'connection.php';
$conn    = Connect();
$name    = $conn->real_escape_string($_POST['name']);
$email    = $conn->real_escape_string($_POST['email']);
$comment = $conn->real_escape_string($_POST['comment']);
$query   = "INSERT into contact (name,email,comment) VALUES('" . $name . "','" . $email . "','" . $comment . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
 
$conn->close();

date_default_timezone_set('America/Los_Angeles');

require 'phpmailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "mail.betsysteinert.webhostingforstudents.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "phpmailer@betsysteinert.webhostingforstudents.com";
//Password to use for SMTP authentication
$mail->Password = "phpmailer1234";
//Set who the message is to be sent from
$mail->setFrom('phpmailer@betsysteinert.webhostingforstudents.com', 'Betsy Steinert');
//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('betsy.steinert@pcc.edu', 'Betsy Steinert');
//Set the subject line
$mail->Subject = 'PHPMailer SMTP test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
$mail->IsHTML(true);
$mail->Body = 'Email:' . $_POST['email'] . '<br>';
$mail->Body .= 'Name:' . $_POST['name'] . '<br>';
$mail->Body .= 'Message:' . $_POST['comment'] . '<br>';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "<h2>Thank you for your message. I will get back to you as soon as I can!</h2>";
}

?>

    <h2> Here is your input:</h2>
<?php echo $_POST["name"]; ?><br>
<?php echo $_POST["email"]; ?><br>
<?php echo $_POST["comment"]; ?><br>
  </main>
  
  
  <script type="text/javascript" src="hamburger.js"></script>
 
  <footer>
    <?php include ('footer.php');?>
  </footer>

</body>

</html>