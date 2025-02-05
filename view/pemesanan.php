<!DOCTYPE html>
<html lang="en">

<head>
<?php include '../model/head.php';?>
<style>
  .form-control::placeholder {
    color: white !important;
    opacity: 1; /* Pastikan placeholder tidak transparan */
}
</style>
</head>

<?php include '../model/headkonten.php';?>

<section id="hero" class="contact section dark-background">
    <div class="container section-title contact section" data-aos="fade-up"></div>
   
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-6-left">
            <!-- Tambahkan action dan method di sini -->
            <form action="../control/input.php" method="POST">
                <div class="row gy-4">
                  <form class="php-email-form" data-aos="fade-up" data-aos-delay="500">
                    <div class="col-md-6">
                        <input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama Pelanggan" required="" style="background-color: black; color: white; border: 1px solid white; 
    ::placeholder { color: white; opacity: 1; }">
                    </div>
                    <div class="col-md-6">
                        <input type="number" class="form-control" name="nomer_meja" placeholder="Nomer Meja" required="" style="background-color: black; color: white; border: 1px solid white; 
    ::placeholder { color: white; opacity: 1; }">
                    </div>
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="makanan" placeholder="Makanan Yang dipesan" required="" style="background-color: black; color: white; border: 1px solid white; 
    ::placeholder { color: white; opacity: 1; }">
                    </div>
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="minuman" placeholder="Minuman Yang dipesan" required="" style="background-color: black; color: white; border: 1px solid white; 
    ::placeholder { color: white; opacity: 1; }">
                    </div>
                    <div class="col-md-17 text-center">
                        <button type="submit" name="pesan" class="btn btn-primary">Buat Pesanan</button>
                    </div>
                    </form>
                </div>
</form>
            
        </div>
       
    </div>

</section>

<section id="portfolio" class="portfolio section">

<div class="container section-title" data-aos="fade-up">
        
        <p>Menu Makanan dan Minuman</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">Semua</li>
            <li data-filter=".filter-app">Makanan</li>
            <li data-filter=".filter-product">Minuman</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
            <font size="6" face="Coolvetica"><b> Nasi Goreng </b></font>
              <div class="portfolio-content h-100">
                <img src="../assets/img/nasi_goreng.jpeg" class="img-fluid" alt="">
                <div>
                  <a href="../assets/img/nasi_goreng.jpeg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"></a>
                  
                </div>
              </div>
              
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
            <font size="6" face="Coolvetica"><b> Matcha </b></font>
              <div class="portfolio-content h-100">
                <img src="../assets/img/matcha.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="../assets/img/matcha.jpeg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"></a>
                  <a class="details-link"></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
            <font size="6" face="Coolvetica"><b> Steak </b></font>
              <div class="portfolio-content h-100">
                <img src="../assets/img/steak.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="../assets/img/steak.jpeg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"></a>
                  <a class="details-link"></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
            <font size="6" face="Coolvetica"><b> Es Teh </b></font>
              <div class="portfolio-content h-100">
                <img src="../assets/img/es_teh.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="../assets/img/es_teh.jpeg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"></a>
                  <a class="details-link"></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
            <font size="6" face="Coolvetica"><b> Sushi </b></font>
              <div class="portfolio-content h-100">
                <img src="../assets/img/sushi.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="../assets/img/sushi.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"></a>
                  <a class="details-link"></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
            <font size="6" face="Coolvetica"><b> Ice Chocolate </b></font>
              <div class="portfolio-content h-100">
                <img src="../assets/img/ice_coklat.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="../assets/img/ice_coklat.jpeg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"></a>
                  <a class="details-link"></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <?php include '../model/foot.php';?>
</body>

</html>