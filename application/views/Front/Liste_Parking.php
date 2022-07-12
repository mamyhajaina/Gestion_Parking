<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <?php include('nav/link.php'); ?>

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include('nav/haeder.php'); ?>

  <!-- ======= Sidebar ======= -->
  <?php include('nav/nav.php'); ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tooltips</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active">Tooltips</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tooltips Examples</h5>
              <p>Hover over the buttons below to see the four tooltips directions: top, right, bottom, and left. </p>
              <div class="row">
                <div class="col-md-12">
                  <div class="d-flex align-content-start flex-wrap">
                    <?php foreach ($parking as $parkings) { ?>
                      <div class="card border border-<?php echo $parkings->couleur; ?> m-2 p-1" style="width: 16%;">
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                          <h5 class="card-title"><a href=""> <?php echo $parkings->nom; ?> <?php echo $parkings->idparking; ?></a></h5>
                          <!-- <p class="card-text"><?php echo $parkings->nom; ?> <?php echo $parkings->idparking; ?></p> -->
                          <?php if ($parkings->disponibilite == 0) { ?>
                            <a href="<?php echo site_url('ParkingController/todispo'); ?>?idparking=<?php echo $parkings->idparking; ?>" type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></a>
                          <?php } else { ?>
                            <a href="<?php echo site_url('Front/ParkingController/todispo'); ?>?idparking=<?php echo $parkings->idparking; ?>" class="btn btn-primary">+</a>
                            <a type="button" class="btn btn-dark mt-3"><i class="bi bi-folder"> Ticket</i></a>
                          <?php } ?>
                        </div>
                      </div>
                    <?php } ?>

                  </div>

                </div>

              </div>
            </div>

          </div>

        </div>
    </section>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php include('nav/script.php'); ?>

</body>

</html>