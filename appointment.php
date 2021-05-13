<?php
$success="";
$serverError="";
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['mobile'];
$service=$_POST['service'];

$message = '<html><body>';
 
$message .= "<hr>";
$message .= "<p><h2> New Appointment</h2></p>";
$message .= "<p><h2>Name:" . $name. "</h2></p>";
$message .= "<p><h2>Email:" . $email. "</h2>";
$message .= "<p><h2>Phone No:" . $phone. "</h2></p>";
$message .= "<p><h2>Appointment For:" . $service. "</h2></p>";
$message .= "</body></html>";
 
$to = 'ashok.gehlot007@gmail.com';

$subject = 'New  Appointment Mail';

$headers = "From: Saadiyah <info@kaivalyatechno.com>\r\n";
$headers .= "Reply-To: info@kaivalyatechno.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

 if (mail($to, $subject, $message, $headers)) {
     
  $success="Thank You For Your Mail.";
  
 } else
 {
 $serverError="Try Again";
 }
}          
 ?>
  

 
 
 
<!DOCTYPE html>
<html lang="zxx">
<head>
  <title>Saadiyah Beauty Salon | Book Appointment</title>
  <!--meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="saadiyah beauty salon" />
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
    <?php 
	include("header-nav.php");
	?>
    <!-- //header -->
  </div>
  <!-- banner -->
  <!-- short -->
  <div class="using-border py-3">
    <div class="inner_breadcrumb  ml-4">
      <ul class="short_ls">
        <li>
          <a href="index.php">Home</a>
          <span>/</span>
        </li>
        <li>Book Appointment</li>
      </ul>
    </div>
  </div>

<section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <div class="row mb-lg-5 mb-md-4 mb-sm-3 mb-3">
        <div class="title col-lg-4 col-md-4 text-center">
          <h3 class="clr">Book Appointment</h3>
        </div>
        <div class="line-w3ls-title col-lg-8 col-md-8">
          <p>In the end of your short journey, you leave looking great and feeling glamourous. In addition our salon offers wide range of fine products. We suggest what works best for your hair. Book your appointment and experience how easy we can make a difference.</p>
        </div>
      </div>
      <div class="row mt-lg-5 mt-md-4 mt-3">
        <!--//contact-map -->
       <div class="col-lg-5 col-md-5">
	   <div class="row">
       <div class="col-lg-12 col-md-12 col-sm-12 my-3">
          <div class="about-fashion-grid ">
            <div class="about-wthree-grid mb-3 mt-lg-4 mt-3">
              <h4>Haircut</h4>
            </div>
            <p>Precision cuts for men, women and even children are the cornerstone of our business.</p>
          </div>
		</div>  
        <div class="col-lg-12 col-md-12 col-sm-12 my-3">
          <div class="about-fashion-grid ">
            <div class="about-wthree-grid mb-3 mt-lg-4 mt-3">
              <h4>Hair Color
              </h4>
            </div>
            <p>Single Process, Highlights, Balayage and Ombre. Our stylists will evaluate of your hair.</p>
          </div>
        </div>		  
		  
        </div>

		</div>

 
        <!--contact-map -->
        <div class="col-lg-7 col-md-6 contact-form-txt">
            
             <?php echo $success; ?>
            <form  method="post" action="appointment.php">
              <div class="form-group contact-forms">
                <input type="text" name="name" class="form-control" placeholder="Name" required="">
              </div>
              <div class="form-group contact-forms">
                <input type="email" name="email" class="form-control" placeholder="Email" required="">
              </div>
              <div class="form-group contact-forms">
                <input type="text" name="mobile" class="form-control" placeholder="Mobile" required="">
              </div>
              <label>Select Service</label>
              <div class="form-group contact-forms">
                <select class="form-control" name="service">
				<option>Hair Cut</option>
				<option>Hair Colour</option>
				<option>Manicure & Pedicure</option>
				<option>Massage</option>
				</select>
              </div>   
             <button type="submit" name="submit" class="btn sent-butnn" >Submit</button>    
            
            </form>
        </div>
      </div>
    </div>
  </section>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
<?php include("footer.php");?>
</body>

</html>
 
