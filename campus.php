<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>campus</title>
  <link rel="shortcut icon" href="assets/favicon/favicon.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <style>
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
      .header .highlight {
        color: #ff3d3d;
      }
      .image-campus img {
        width: 90%;
        height: auto;
        border-radius: 10px;
      }

      .col-md-4,
      .col-12 {
        padding: 10px;
      }
    </style>
</head>
<body>
  <?php include 'assets/components/navbar.php' ?>
  <!-- enquiry -->
  <a href="#" class="enquiry-btn">ENQUIRE NOW!</a>
 
    <section class="header">
      <h1>Arena KKG <span class="highlight">Campus</span></h1>
    </section>
    <section class="container-fluid p-5">
      <!-- Row 1 -->
      <div class="row g-3">
        <div class="col-md-4 col-12">
          <div class="image-campus">
            <img src="assets/img/campus/3-2-scaled-2.webp" alt="Image 1" />
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="image-campus">
            <img src="assets/img/campus/3-2-scaled-2.webp" alt="Image 2" />
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="image-campus">
            <img src="assets/img/campus/1655382819435-min-scaled-1.webp" alt="Image 3" />
          </div>
        </div>
      </div>

      <!-- Row 2 -->
      <div class="row g-3">
        <div class="col-md-4 col-12">
          <div class="image-campus">
            <img src="assets/img/campus/IMG_0464-scaled-1.webp" alt="Image 4" />
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="image-campus">
            <img src="assets/img/campus/IMG_0502-scaled-1.webp" alt="Image 5" />
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="image-campus">
            <img src="assets/img/campus/IMG_0554-scaled-2.webp" alt="Image 6" />
          </div>
        </div>
      </div>

      <!-- Row 3 -->
      <div class="row g-3">
        <div class="col-md-4 col-12">
          <div class="image-campus">
            <img src="assets/img/campus/IMG_0563-scaled-2.webp" alt="Image 7" />
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="image-campus">
            <img src="assets/img/campus/IMG_0587-1-1-scaled-1.webp" alt="Image 8" />
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="image-campus">
            <img src="assets/img/campus/IMG_0593-scaled-1.webp" alt="Image 9" />
          </div>
        </div>
      </div>

      <!-- Row 4 -->
      <div class="row g-3">
        <div class="col-md-4 col-12">
          <div class="image-campus">
            <img src="assets/img/campus/IMG_0605-scaled-1.webp" alt="Image 10" />
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="image-campus">
            <img src="assets/img/campus/trophy-1.webp" alt="Image 11" />
          </div>
        </div>
      </div>
    </section>
    <!-- footer -->
    <?php include 'assets/components/blogartist.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>