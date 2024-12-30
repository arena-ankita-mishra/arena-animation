<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arena Animation Saket</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="shortcut icon" href="assets/favicon/favicon.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" />

    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;

        background-color: #fff;
      }

      .header {
        background: linear-gradient(180deg, #ffeaea 0%, #ffe89a 88%);
        padding: 80px 20px;
        text-align: center;
        border-radius: 0px 0px 50px 50px;
      }

      .header h1 {
        margin-top: 40px;
        font-size: 3rem;
        font-weight: bold;
        color: #01131e;
      }
      .container {
        display: flex;
        justify-content: space-between;
        width: 100%;
        padding: 40px 0px;
        margin: auto;
      }

      .form-container {
        background: #ededed;
        padding: 20px;
        width: 60%;
      }

      .payment-details {
        background-color: #ededed;
        padding: 20px;
        width: 35%;
      }

      h1 {
        color: #000;
        font-size: 35px;
        margin-bottom: 20px;
      }

      h1 span {
        color: red;
      }

      .step-indicator {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
      }

      .step-indicator .line {
        flex: 1;
        height: 1px;
        background: #ddd;
        margin: 0 30px;
      }

      .step {
        background: #ddd;
        color: #fff;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 14px;
      }

      form {
        display: flex;
        flex-direction: column;
        gap: 15px;
      }

      .form-group {
        display: flex;
        gap: 10px;
      }

      input,
      select {
        padding: 12px;
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 20px;
        font-size: 16px;
      }

      button {
        padding: 10px 25px;
        background: red;
        color: #fff;
        border: none;
        border-radius: 17px;
        font-size: 18px;
        cursor: pointer;
        margin: auto;
      }

      .payment-detail {
        display: flex;
        align-items: center;
        line-height: 0;
        margin-bottom: 10px;
        font-size: 14px;
        color: #000;
      }

      .payment-detail i {
        font-size: 20px;
        color: red;
      }

      .payment-detail p {
        font-size: 16px;
        padding: 10px;
      }

      .bank-detail {
        display: flex;
        align-items: center;
        font-size: 14px;
        color: #000;
      }

      hr {
        margin: 1px 0;
        border: none;
        border-top: 1px solid rgb(221, 190, 11);
      }

      h3 {
        margin-top: 40px;
        font-size: 2rem;
        font-weight: bold;
        color: #01131e;
      }

      h3 span {
        color: red;
      }
    </style>
</head>

<body>
  <?php include 'assets/components/navbar.php' ?>
  <!-- enquiry -->
  <a href="#" class="enquiry-btn">ENQUIRE NOW!</a>
  <!-- section-1 -->
  <section class="header">
      <h1>Online Admission</h1>
    </section>

  <!--section-2-->


  <!-- section-3 -->
  <div class="container">
      <div class="form-container">
        <h1><span>Fill-in the Form</span> Below</h1>
        <div class="step-indicator">
          <span class="step active">1</span>
          <div class="line"></div>
          <span class="step">2</span>
          <div class="line"></div>
          <span class="step">3</span>
        </div>
        <form>
          <div class="form-group">
            <input type="text" placeholder="First Name" required />
            <input type="text" placeholder="Last Name" required />
            <input type="text" placeholder="Guardian Name" required />
          </div>
          <div class="form-group">
            <input type="tel" placeholder="Phone" required />
            <input type="email" placeholder="Email" required />
            <input type="date" placeholder="Date of Birth" required />
          </div>
          <div class="form-group">
            <input type="text" placeholder="Address Line 1" required />
            <input type="text" placeholder="Address Line 2" />
          </div>
          <div class="form-group">
            <input type="text" placeholder="City" required />
            <input type="text" placeholder="State" required />
            <input type="text" placeholder="PIN Code" required />
          </div>
          <div class="form-group">
            <input type="text" placeholder="Country" required />
            <select required>
              <option value="" disabled selected>
                VFX Compositing & Editing Pro
              </option>
              <option value="option1">
                Graphic Web Designing & Development
              </option>
              <option value="option2">3-D Animation</option>
            </select>
          </div>
          <button type="submit">Next</button>
        </form>
      </div>
      <div class="payment-details">
        <h3><span>Payment</span> Details</h3>
        <div class="payment-detail">
          <i class="fa-solid fa-money-bill"></i>
          <p>Cash/Debit or Credit Card</p>
        </div>
        <div class="payment-detail">
          <i class="fa-solid fa-money-bill"></i>
          <p>Cheque – APTECH LTD.</p>
        </div>
        <div class="payment-detail">
          <i class="fa-solid fa-money-bill"></i>
          <p>
          Online Payment can be done at – Aptech Bank Details</p>
        </div>

        <hr />

        <!-- Bank Details -->
        <div class="bank-detail">
          <p>Bank Name – HDFC BANK LTD</p>
        </div>
        <div class="bank-detail">
          <p>A/c Name – APTECH LTD.</p>
        </div>
        <div class="bank-detail">
          <p>Bank: No Bank</p>
        </div>
        <div class="bank-detail">
          <p>A/C No – 99900000700054</p>
        </div>
        <div class="bank-detail">
          <p>A/C Type –Current</p>
        </div>
        <div class="bank-detail">
          <p> <div class="bank-detail">
          <p>A/C Type –Current</p>
        </div></p>
        </div>
      </div>
    </div>

  <!-- section-4 -->
 
  <!-- section-5 start -->
  
  <!-- section-5 end -->

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

  <script src="assets/js/script.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>