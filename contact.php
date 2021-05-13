<?php
$error="&nbsp;";
if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$email_from=$_POST['email'];
	$contactno=$_POST['contact'];
	$query=$_POST['comment'];
	if($name=='' || $email_from=='' or $contactno=='' or $query=='')
	{
		$error="*All Fields are Mandatory, Please fill all fields.";
	}
	else
	{
		$email_to = "saadiyahgokhool0197@gmail.com";
		$email_from = "info@kaivalyatechno.com";
    	$email_subject = "Saadiyah Beauty Salon : Site Visitors Query";
		
		$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  		if(!preg_match($email_exp,$email_from))
		{
    		$error .= 'The Email Address you entered does not appear to be valid.<br />';
  		}
    	$string_exp = "/^[A-Za-z .'-]+$/";
  		if(!preg_match($string_exp,$name))
		{
    		$error .= 'The Name you entered does not appear to be valid.<br />';
  		}
  		if(strlen($query) < 2)
		{
    		$error .= 'The Comments you entered do not appear to be valid.<br />';
  		}
  		if(strlen($error) <= 10)
		{
    		$email_message = "Saadiyah Beauty Salon. Visitor Comment\n\n";
     		function clean_string($string)
			{
      			$bad = array("content-type","bcc:","to:","cc:","href");
      			return str_replace($bad,"",$string);
    		}
     		$email_message .= "Name: ".clean_string($name)."\n";
    		$email_message .= "Email: ".clean_string($email_from)."\n";
    		$email_message .= "Mobile: ".clean_string($contactno)."\n";
    		$email_message .= "Message: ".clean_string($query)."\n";
     
     		// create email headers
			$headers = 'From: '.$email_from."\r\n".
			'Reply-To: '.$email_from."\r\n" .
			'X-Mailer: PHP/' . phpversion();
			@mail($email_to, $email_subject, $email_message, $headers);
			
			$error="Thank you for the message. We will contact you shortly.";
		}
	}
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  <title>Saadiyah Beauty Salon | Contact</title>
  <!--meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="" />
  <script>
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!--//meta tags ends here-->
  <!--booststrap-->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
  <!--//booststrap end-->
  <!-- font-awesome icons -->
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <!-- //font-awesome icons -->
  <!--stylesheets-->
  <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
  <!--//stylesheets-->
  <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
</head>

<body>
  <!-- banner -->
  <div class="header-outs inner_page-banner " id="home">
    <!-- header -->
    <?php include("header-nav.php");?>
    <!-- //header -->
  </div>
  <!-- banner -->
  <!-- short -->
  <div class="using-border py-3">
    <div class="inner_breadcrumb  ml-4">
      <ul class="short_ls">
        <li>
          <a href="index.php">Home</a>
          <span>/ /</span>
        </li>
        <li>Contact</li>
      </ul>
    </div>
  </div>
  <!-- //short-->
  <!--contact -->
  <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <div class="row mb-lg-5 mb-md-4 mb-sm-3 mb-3">
        <div class="title col-lg-4 col-md-4 text-center">
          <h3 class="clr">Contact Us</h3>
        </div>
        <div class="line-w3ls-title col-lg-8 col-md-8">
          <p>In the end of your short journey, you leave looking great and feeling glamourous. In addition our salon offers wide range of fine products. We suggest what works best for your hair. Book your appointment and experience how easy we can make a difference.</p>
        </div>
      </div>
      <div class="row mt-lg-5 mt-md-4 mt-3">
        <!--//contact-map -->
        <div class="address_mail_footer_grids col-lg-5 col-md-6 p-0">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7494.884090186003!2d57.56424536069182!3d-20.073800181971198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x217c549711814b4d%3A0xe29b645e64bdf2d8!2sRoyal%20Rd%2C%20Morcellement%20St%20Andre%2C%20Mauritius!5e0!3m2!1sen!2sin!4v1616849792142!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <!--contact-map -->
        <div class="col-lg-7 col-md-6 contact-form-txt">
          <form action="contact.php" method="post">
            <div class="w3pvt-wls-contact-mid">
              <div class="form-group contact-forms">
                <input type="text" name="name" class="form-control" placeholder="Name" required="">
              </div>
              <div class="form-group contact-forms">
                <input type="email" name="email" class="form-control" placeholder="Email" required="">
              </div>
              <div class="form-group contact-forms">
                <input type="text" name="contact" class="form-control" placeholder="Mobile" required="">
              </div>
              <div class="form-group contact-forms">
                <textarea class="form-control" name="comment" placeholder="Message" rows="3" required=""></textarea>
              </div>
              <button type="submit" class="btn sent-butnn">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!--//contact  -->
<?php include("footer.php");?>
</body>

</html>