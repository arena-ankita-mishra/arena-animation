<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact us</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/contact.css">
  <link rel="shortcut icon" href="assets/favicon/favicon.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <style>
    .contact{
      background: linear-gradient(180deg, #ffeaea 0%, #ffe89a 88%);
      padding: 80px 20px;
        text-align: center;
        border-radius: 0px 0px 50px 50px;
    }

    section{

      margin: 50px;
    }

.box1{
background-color: pink;
justify-content: center; 
border-radius: 10px;
}

  </style>
</head>
<body>
  <?php include 'assets/components/navbar.php' ?>
   <!-- enquiry -->
   <a href="#" class="enquiry-btn">ENQUIRE NOW!</a>
  
  <div class="contact">
    <h1>Contact us</h1>
  </div>
  

  <section>
    <div class="box1" img src="assets/img/contact us/address.webp">
      <h2>Institution Address</h2>
      <p>P-348, 3rd Floor, CIT Rd, Scheme 6M,<br> Kankurgachi, Kolkata, West Bengal <br>
      700054</p>
    </div>

    <div class="box2" img src="assets/img/contact us/email.webp">
      <h2>Drop Us a Mail</h2>
      <p>info@arenakkg.com</p>
    </div>

    <div class="box3"img src="assets/img/contact us/phone.webp">
      <h2>Call us</h2>
      <p>+91 8100-725-420</p>
    </div>
  </section>

  <!-- section-6 Artist -->
  <?php include 'assets/components/Artist.php' ?>
  <!-- section-6 end -->

  <!-- section-7 FAQ -->
  <?php include 'assets/components/FAQ.php' ?>
  <!-- section-7 end -->

  <!-- section-8  student-feedback-->
  <?php include 'assets/components/Studendfeedback.php' ?>
  <!-- section 9 Infinite logo slider -->
  <?php include 'assets/components/Infinitelogoslider.php' ?>
  <!-- section 10 Join Us on the creative journey -->
  <?php include 'assets/components/joinus.php' ?>
  <!-- section 11 footer -->
  <?php include 'assets/components/footer.php' ?>

</body>
</html>