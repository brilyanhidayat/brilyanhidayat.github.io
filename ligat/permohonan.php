<?php

$message ='';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
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

//$email_pengirim = $_POST['email']; // Isikan dengan email pengirim
//$nama_pengirim = 'Rizaldi Maulidia Achmad'; // Isikan dengan nama pengirim
//$email_penerima = $_POST['email_penerima']; // Ambil email penerima dari inputan form
//$subjek = $_POST['subjek']; // Ambil subjek dari inputan form
//$pesan = $_POST['pesan']; // Ambil pesan dari inputan form

$nama           =  $_POST['nama'];
$email1         =  $_POST['email'];
$telp           =  $_POST['telp'];
$alamat         =  $_POST['alamat'];
$nama1          =  $_POST['nama1'];
$telp1          =  $_POST['telp1'];
$subjek         =  $_POST['subjek'];
$pesan          =  $_POST['pesan'];

//$attachment     = $_FILES['attachment']['name'];
$email_penerima = 'marketing@lsbuligat.co.id';
$email_pengirim ='mail@lsbuligat.co.id';
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

if(($subjek == 'Konsultasi') || ($subjek == 'Pembangunan & Pemasangan') || ($subjek == 'Pemeriksaan & Pengujian') || ($subjek == 'Pengoperasian') || ($subjek == 'Pemeliharaan'))
{
    $email = "daftar@lsbuligat.co.id";
    $mail->setFrom($email_pengirim, $nama);
    $mail->addAddress($email, '');
    $mail->isHTML(true); 
    // Aktifkan jika isi emailnya berupa htm
    // Load file content.php
    ob_start();
    include "content2.php";

    $content = ob_get_contents(); // Ambil isi file content.php dan masukan ke variabel $content
    ob_end_clean();

    $mail->Subject = 'Permohonan Baru Dari Website';
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

}elseif(($subjek == 'Lembaga Inspeksi Teknik') || ($subjek == 'Lembaga Sertifikasi Kompetensi')) {
    $email = "jasalain@lsbuligat.co.id";
    $mail->setFrom($email_pengirim, $nama);
    $mail->addAddress($email, '');
    $mail->isHTML(true); 
    // Aktifkan jika isi emailnya berupa htm
    // Load file content.php
    ob_start();
    include "content2.php";

    $content = ob_get_contents(); // Ambil isi file content.php dan masukan ke variabel $content
    ob_end_clean();

    $mail->Subject = 'Permohonan Baru Dari Website';
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

}else{
    $email = "daftar@lsbuligat.co.id";
    $mail->setFrom($email_pengirim, $nama);
    $mail->addAddress($email, '');
    $mail->isHTML(true); 
    // Aktifkan jika isi emailnya berupa htm
    // Load file content.php
    ob_start();
    include "content2.php";

    $content = ob_get_contents(); // Ambil isi file content.php dan masukan ke variabel $content
    ob_end_clean();

    $mail->Subject = 'Permohonan Baru Dari Website';
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


/*$email = array("office@lsbuligat.co.id", "marketing@lsbuligat.co.id");
foreach ($email as $value) {
  
  //$penerima   = $dataRow['email'];

  $mail->setFrom($email_pengirim, $nama);
  $mail->addAddress($value, '');
  $mail->isHTML(true); 
  // Aktifkan jika isi emailnya berupa html

  // Load file content.php
  ob_start();
  include "content2.php";

  $content = ob_get_contents(); // Ambil isi file content.php dan masukan ke variabel $content
  ob_end_clean();

  $mail->Subject = 'Permohonan Baru';
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
  
}*/
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
          <h3>Ajukan Permohonan</h3>
      </div>
    </div>
    
  </BR> 
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <!--<h2 data-aos="fade-up">Ajukan Permohonan</h2>-->
          <img src="assets/img/logohero3.png" width="300px"><br><br>
          <p data-aos="fade-up">Tim Kami siap melayani pertanyaan dan kebutuhan Anda 24/7. <br> Ajukan pertanyaan dan kami akan menghubungi Anda dengan pelayanan terbaik dari PT LSBU Indonesia Gatrik (LIGAT).</p><br>
          </div>
        
        <!--<center><img src="assets/img/tatcara.jpg" class="testimonial-img" alt="" width=100%> </center>-->

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
          <div class="col-xl-9 col-lg-12 mt-4">
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" >
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="text" name="nama" class="form-control" id="name" placeholder="Nama Instansi/Perusahaan" required>
                </div>
              </div>
            </br>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="telp" id="telp" placeholder="No. Telp/Handphone - Instansi/Perusahaan" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
            </br>
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" required>
                </div>
              </div>
            </br>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="nama1" id="nama1" placeholder="Nama Pemohon" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="telp1" id="telp1" placeholder="No. Telp/Handphone - Pemohon" required>
                </div>
              </div>
              <!--<div class="form-group mt-3">
                <input type="text" class="form-control" name="subjek" id="subject" placeholder="Subject" required>
              </div>-->
              <div class="form-group mt-3">
                <select class="form-control" name="subjek" id="subjek">
                  <option value="Konsultasi">Konsultasi</option>
                  <option value="Pembangunan & Pemasangan">Pembangunan & Pemasangan</option>
                  <option value="Pemeriksaan & Pengujian">Pemeriksaan & Pengujian</option>
                  <option value="Pengoperasian">Pengoperasian</option>
                  <option value="Pemeliharaan">Pemeliharaan</option>
                  <option value="Lembaga Inspeksi Teknik">Lembaga Inspeksi Teknik</option>
                  <option value="Lembaga Sertifikasi Kompetensi">Lembaga Sertifikasi Kompetensi</option>
                </select>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="pesan" rows="5" placeholder="Pesan" required></textarea>
              </div>
              <div class="my-3">
                <?php 
                  if (!empty($message)) {
                  ?>
                  <div class="sent-message"><?php echo $message ?></div>
                  <?php
                  }
                ?>
              </div>
              <div class="text-center">
                <button class="button" type="submit" name="submit"><strong>Kirim Pesan</strong></button>
              </div>
            </form>
          </div>

        </div>

        <center><img src="assets/img/tatcara.jpg" class="testimonial-img" alt="" width=100%> </center>

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

      </div>
    </section>
    </section>
    

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
  background: url('assets/img/4.jpg') top left/cover no-repeat;
  height: 300px;
  display: flex;
  justify-content: center;
  align-items: center;
}

  .button {
    background-color: #F6BC00; 
    border: none;
    color: white;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 2px 2px;
    cursor: pointer;
  }

  .button {
  border-radius: 8px;
  transition-duration: 0.4s;
  }

  .button:hover {
    background-color: #FAD86D; 
    color: black;
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