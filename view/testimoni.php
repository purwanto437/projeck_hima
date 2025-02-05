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

<body class="index-page">

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
                        <input type="text" name="pesan_pelanggan" class="form-control" placeholder="Nama Pelanggan" required="" style="background-color: black; color: white; border: 1px solid white; 
    ::placeholder { color: white; opacity: 1; }">
                    </div>
                    <div class="col-md-17 text-center">
                        <button type="submit" name="input_plg" class="btn btn-primary">Buat Pesanan</button>
                    </div>
                    </form>
                </div>
</form>
            
        </div>
       
    </div>

</section>
  <!-- Preloader -->
  <?php include '../model/foot.php';?>
</body>

</html>