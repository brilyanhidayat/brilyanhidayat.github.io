<?php

$message ='';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//include_once "../plugin/excel_reader2.php";
//include_once "../config/inc.connection.php";
//include_once "../config/inc.library.php";
date_default_timezone_set('Asia/Jakarta');

// Include librari phpmailer
include('phpmailer/Exception.php');
include('phpmailer/PHPMailer.php');
include('phpmailer/SMTP.php');

if(isset($_POST['submit']))
{

$nama            =  $_POST['name'];
$email1          =  $_POST['email'];
$telp            =  $_POST['telp'];
$pesan           =  $_POST['message'];
$email_penerima  = 'daftar@lsbuligat.co.id';
$email_pengirim  ='mail@lsbuligat.co.id';
// Ambil nama file yang di upload

$mail = new PHPMailer;
$mail->isSMTP();

$mail->Host = 'smtp.hostinger.com';
$mail->Username = 'mail@lsbuligat.co.id'; // Email Pengirim
$mail->Password = 'Mail@123'; // Isikan dengan Password email pengirim
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
//$mail->SMTPDebug = 2; // Aktifkan untuk melakukan debugging

$dataSql = "SELECT email FROM daftar_email WHERE status='Active'";
$email = array("daftar@lsbuligat.co.id");
foreach ($email as $value) {
  
  //$penerima   = $dataRow['email'];

  $mail->setFrom($email_pengirim, $nama);
  $mail->addAddress($value, '');
  $mail->isHTML(true); 
  // Aktifkan jika isi emailnya berupa html

  // Load file content.php
  ob_start();
  include "content.php";

  $content = ob_get_contents(); // Ambil isi file content.php dan masukan ke variabel $content
  ob_end_clean();

  $mail->Subject = 'Pesan Baru Dari Website';
  $mail->Body = $content;
  //$mail->AddEmbeddedImage('../assets/img/logo-bem-color.png', 'logo_bem', '../assets/img/logo-bem-color.png'); // Aktifkan jika ingin menampilkan gambar dalam email
  $send = $mail->send();


  if($send){ // Jika Email berhasil dikirim
      //echo "<h1>Email berhasil dikirim</h1><br /><a href='../index.php'>Kembali ke halaman utama</a>";
      $message = 'Pesan telah terkirim';
      
  }else{ // Jika Email gagal dikirim
      echo "<h1>Email gagal dikirim</h1><br /><a href='index.php'>Kembali ke Form Email</a>";
      //echo '<h1>ERROR<br /><small>Error while sending email: '.$mail->getError().'</small></h1>'; // Aktifkan untuk mengetahui error message
  }
  
}
}

?>

<!DOCTYPE html>
<html lang="en">
 <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
    <?php include 'header.php';?>
<body>
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <!--<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Dokumen</li>
        </ol>
        <h2>Dokumen Terkait</h2>
      </div>
    </section>-->
    <!-- End Breadcrumbs -->
    <div class="banner">
      <div class="banner-text">
          <h3></h3>
          <h3>Pengoperasian</h3>
      </div>
    </div>

<!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2></h2>
            <!--<p>Distribusi tenaga listrik adalah tahap akhir dalam pengiriman tenaga listrik, hal ini merupakan proses membawa listrik dari sistem transmisi listrik menuju ke konsumen listrik. <br><br>
            Pelayanan terbaik kami meliputi :
            Konsultasi dalam Bidang Instalasi Tenaga Listrik,
            Pembangunan dan Pemasangan Instalasi Tenaga Listrik,
            Pemeriksaan dan Pengujian Instalasi Tenaga Listrik, 
            Pengoperasian Instalasi Pembangkitan Tenaga Listrik, &
            Pemeliharaan Instalasi Penyediaan Tenaga Listrik.
            Dengan kualifikasi sektor Kecil, Menengah ataupun Besar. 

            </p>-->
            <img src="assets/img/logo-page.png" width="300px"><br><br>
            <p>Pengoperasian Instalasi Pembangkit Tenaga Listrik</p>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><a href="pembangkit.php"><i class="">1</i></a></div>
              <h4 class="title"><a href="pembangkit.php">Pembangkit</a></h4>
              <p class="description">Pelayanan pengoperasian instalasi tenaga listrik subbidang PLTU, PLTG, PLTUG, PLTP, PLTA, PLTD, PLTN & PLTEBT dengan kualifikasi kecil, menengah atau besar.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><a href="transmisi.php"><i class="">2</a></i></div>
              <h4 class="title"><a href="transmisi.php">Transmisi</a></h4>
              <p class="description">Pelayanan pengoperasian instalasi tenaga listrik subbidang TET/TT dan Gardu Induk dengan kualifikasi kecil, menengah atau besar.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><a href="distribusi.php"><i class="">3</i></a></div>
              <h4 class="title"><a href="distribusi.php">Distribusi / IPTL</a></h4>
              <p class="description">Pelayanan pengoperasian instalasi tenaga listrik subbidang TM & TR dengan kualifikasi kecil, menengah atau besar.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><a href="instalasi.php"><i class="">4</i></a></div>
              <h4 class="title"><a href="instalasi.php">Instalasi Pemanfaatan Tenaga Listrik (IPTL)</a></h4>
              <p class="description">Pelayanan pembangunan & pemasangan subbidang TM & TR dengan kualifikasi kecil, menengah atau besar.</p>
            </div>
          </div>
        </div>

         

      </div>
    </section><!-- End Services Section -->



        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
          <div class="container">


            <div class="section-title">
              <h2 data-aos="fade-up">Hubungi Kami</h2>
              <p data-aos="fade-up">Tim Kami siap melayani pertanyaan dan kebutuhan Anda 24/7. <br> Ajukan pertanyaan dan kami akan menghubungi Anda dengan pelayanan terbaik dari PT LSBU Indonesia Gatrik (LIGAT).</p>
            </div>

            <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Lokasi</h3>
              <p>Jl. RE.Soemantadiredja 
              No.23 (Lantai 1)  
              Kel. Pamoyanan, <br>Kec. Bogor Selatan 
              Kota Bogor Jawa Barat 16136
              <br>
              <br>
              <br>
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>headoffice@lsbuligat.co.id<br><br><br><br></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Hotline</h3>
              <p>(0251) 7571947 <br> 0813-1133-8470 <br> 0813-6918-2800 <br> 0838-1800-4900 <br></p>
            </div>
          </div>
        </div>

            <div class="row">

              <div class="col-lg-12 ">
                <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.1070055187083!2d106.80553231477131!3d-6.633630795203149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69cf50c8f391c1%3A0x35f59afaf837879a!2sLantai%201%2C%20Jl.%20RE.%20Soemantadiredja%20No.23%2C%20RT.04%2FRW.07%2C%20Pamoyanan%2C%20Kec.%20Bogor%20Sel.%2C%20Kota%20Bogor%2C%20Jawa%20Barat%2016136!5e0!3m2!1sid!2sid!4v1644984676381!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
              </div>
            </div>

          </div>
        </section><!-- End Contact Section -->
  </main><!-- End #main -->

  <?php include 'footer.php' ?>

</body>

</html>
<style type="text/css">

.responstable {
  margin: 1em 0;
  width: 100%;
  overflow: hidden;
  background: #FFF;
  color: #997500;
  border-radius: 10px;
  border: 1px solid #F6BC00;
}
.responstable tr {
  border: 1px solid #F6BC00;
}
.responstable tr:nth-child(odd) {
  background-color: #fff3cc;
}
.responstable th {
  display: none;
  border: 1px solid #FFF;
  background-color: #F6BC00;
  color: #FFF;
  padding: 1em;
}
.responstable th:first-child {
  display: table-cell;
  text-align: center;
}
.responstable th:nth-child(2) {
  display: table-cell;
}
.responstable th:nth-child(2) span {
  display: none;
}
.responstable th:nth-child(2):after {
  content: attr(data-th);
}
@media (min-width: 480px) {
  .responstable th:nth-child(2) span {
    display: block;
  }
  .responstable th:nth-child(2):after {
    display: none;
  }
}
.responstable td {
  display: block;
  word-wrap: break-word;
  max-width: 7em;
}
.responstable td:first-child {
  display: table-cell;
  text-align: center;
  border-right: 1px solid #fff3cc;
}
@media (min-width: 480px) {
  .responstable td {
    border: 1px solid #fff3cc;
  }
}
.responstable th, .responstable td {
  text-align: left;
  margin: .5em 1em;
}
@media (min-width: 480px) {
  .responstable th, .responstable td {
    display: table-cell;
    padding: 1em;
  }
}

h1 {
  font-family: Verdana;
  font-weight: normal;
  color: #F6BC00;
}
h1 span {
  color: #F6BC00;
}

//banner


h1 { font-size: 60px; }
h3 {
  font-size: 32px;
  font-weight: bold;
  /*text-transform: uppercase;*/
  letter-spacing: 0px;
}
h6 { font-size: 22px; }

.banner h1, .banner h3, .banner h6 {
  margin: 0;
  /*text-shadow: 2px 2px 6px #000;*/
  text-align: center;
}

.banner {
  color: white;
  background: url('assets/img/distribusi-top.jpg') top left/cover no-repeat;
  height: 300px;
  display: flex;
  justify-content: center;
  align-items: center;
}

</style>

<!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>