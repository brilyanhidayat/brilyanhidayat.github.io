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

//$email_pengirim = $_POST['email']; // Isikan dengan email pengirim
//$nama_pengirim = 'Rizaldi Maulidia Achmad'; // Isikan dengan nama pengirim
//$email_penerima = $_POST['email_penerima']; // Ambil email penerima dari inputan form
//$subjek = $_POST['subjek']; // Ambil subjek dari inputan form
//$pesan = $_POST['pesan']; // Ambil pesan dari inputan form

/*$nama           =  $_POST['nama'];
$email          =  $_POST['email'];
$telp           =  $_POST['telp'];
$alamat         =  $_POST['alamat'];
$nama1          =  $_POST['nama1'];
$telp1          =  $_POST['telp1'];
$message        =  $_POST['message'];*/

$nama           =  $_POST['name'];
$email1          =  $_POST['email'];
$telp           =  $_POST['telp'];
//$subjek         =  $_POST['subject'];
$pesan          =  $_POST['message'];
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
/*$email = array("dafa@lsbuligat.co.id");
/*foreach ($email as $value) {
  
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
  
}*/
$email = "daftar@lsbuligat.co.id";
  $mail->setFrom($email_pengirim, $nama);
  $mail->addAddress($email, '');
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
?>


<!DOCTYPE html>
<html lang="en">

  <!-- Favicons -->
  <!--<link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/favicon.png" rel="apple-touch-icon">-->

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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container" data-aos="fade-in">
      <h1>Percayakan pada <br>PT LSBU Indonesia Gatrik (LIGAT)</h1>
      <h2>Pelayanan SBU jasa penunjang tenaga listrik yang terpercaya dan tersertifikasi :
        <br>
        <li>
          SNI ISO 9001:2015 <br>
        </li> 
        <li>
          Komite Akreditasi Nasional (KAN) <br>
        </li> 
        <li>
          International Accreditation Forum (IAF) <br>
        </li> 
        <br> <br>
      <img src="assets/img/logo-header.png" width="400px"></h2><br><br>

    </div>
  </section><!-- End Hero --><br>

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <!--<section id="why-us" class="why-us">
      <div class="container">
          <div class="col-lg-8 col-lg-6 d-flex">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon-box mt-3 mt-xl-0">
                    <a href="pembangunan.php" target="_blank">
                      <i class="bx bx-bolt-circle"></i>
                    </a>
                      <h8 align="center"><b>Pembangunan & Pemasangan</b></h8>
                      <p></p>
                  </div>
                </div>
                <div class="col-xl-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-box mt-3 mt-xl-0">
                    <a href="pemeriksaan.php" target="_blank">
                    <i class="bx bx-pulse"></i>
                    </a>
                    <h8 align="center"><b>Pemeriksaan & Pengujian</b></h8>
                    <p></p>
                  </div>
                </div>
                <div class="col-xl-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-box mt-3 mt-xl-0">
                    <a href="pengoperasian.php" target="_blank">
                    <i class="bx bx-plug"></i>
                    </a>
                    <h8 align="center"><b>Pengoperasian</b></h8>
                    <p></p>
                  </div>
                </div>
                <div class="col-xl-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-box mt-3 mt-xl-0">
                    <a href="pemeliharaan.php" target="_blank">
                    <i class="bx bx-check-shield"></i>
                  </a>
                    <h8 align="center"><b>Pemeliharaan</b></h8>
                    <p></p>
                  </div>
                </div>

                <div class="col-xl-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-box mt-3 mt-xl-0">
                    <a href="pemeliharaan.php" target="_blank">
                    <i class="bx bx-check-shield"></i>
                  </a>
                    <h8 align="center"><b>Pemeliharaan</b></h8>
                    <p></p>
                  </div>
                </div>
              </div>
            </div>
          </div>

      </div>
    </section>-->
    <!-- End Why Us Section -->



<section style="clear:both">
        <div class="service">
          <div class="service-block">
            <div class="service-box">
              <h2>Konsultansi</h2>
              <span>
              <i class="bx bx-user-voice" aria-hidden="true"></i></span>
              <p></p>
            </div>
            <div class="service-box">
              <h2>Pembangunan </br>& Pemasangan</h2>
              <span><i class="bx bx-bolt-circle" aria-hidden="true"></i></span>
              <p></p>
            </div>
            <div class="service-box">
              <h2>Pemeriksaan </br>& Pengujian</h2>
              <span><i class="bx bx-pulse" aria-hidden="true"></i></span>
              <p></p>
            </div>
            <div class="service-box">
              <h2>Pengoperasian</h2>
              <span><i class="bx bx-plug" aria-hidden="true"></i></span>
              <p></p>
            </div>
            <div class="service-box">
              <h2>Pemeliharaan</h2>
              <span><i class="bx bx-check-shield" aria-hidden="true"></i></span>
              <p></p>
            </div>
          </div>
        </div>
    </section>






    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative" data-aos="fade-right">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" ></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h4 data-aos="fade-up">Kenali kami lebih dekat !</h4>
            <h3 data-aos="fade-up">PT LSBU Indonesia Gatrik (LIGAT)</h3>
            <p data-aos="fade-up">Lembaga yang bergerak dalam bidang Sertifikasi Badan Usaha Jasa Penunjang Tenaga Listrik, yang memiliki kewenangan untuk melakukan proses sertifikasi Badan Usaha yang bergerak di bidang Ketenagalistrikan dan telah terakreditasi oleh Direktorat Jenderal Ketenagalistrikan (DJK) Kementerian Energi dan Sumber Daya Mineral (ESDM).<br><br> Terus berusaha meningkatkan mutu pelayanan sesuai dengan target kinerja dan peraturan yang berlaku melalui penerapan Sistem Manajemen Mutu dan perbaikan berkesinambungan.<br><br> Membangun hubungan baik dengan pelanggan adalah prioritas kami, dan kami berkomitmen untuk memberikan kualitas dan kenyamanan yang didukung oleh tim berpengalaman yang bekerja secara Profesional, Semangat, Efektif dan Gesit.</p>

            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bx bx-briefcase-alt-2"></i></div>
              <h4 class="title"><a href="">Profesional</a></h4>
              <p class="description">Bekerja dengan keahlian, mengikuti perkembangan dan sesuai peraturan yang berlaku.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-book-bookmark"></i></div>
              <h4 class="title"><a href="">Mandiri</a></h4>
              <p class="description">Bebas kepentingan tidak memihak apapun.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-like"></i></div>
              <h4 class="title"><a href="">Berkomitmen</a></h4>
              <p class="description">Selalu berkomitmen untuk memberikan pelayanan berkualitas dan kenyamanan kepada pelanggan.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-user-pin"></i></div>
              <h4 class="title"><a href="">Gesit</a></h4>
              <p class="description">Dukungan tim berpengalaman yang bekerja secara semangat, cepat, efektif dan cekatan.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= 
    <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Visi & Misi PT LSBU Indonesia Gatrik (LIGAT)</h2>
            <p>"Menjadi Lembaga Sertifikasi Badan Usaha Jasa Penunjang Tenaga Listrik yang berskala Nasional
            terpercaya, berkualitas, unggul dengan bertumpu pada insan berintegritas dengan menerapkan Standar yang berlaku, guna mengantisipasi perkembangan teknologi khususnya di bidang ketenagalistrikan."
            </p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Profesional</a></h4>
              <p class="description">Secara profesional melakukan Sertifikasi Badan Usaha Jasa Penunjang Tenaga Listrik Bagi Seluruh Perusahaan di Bidang Ketenagalistrikan.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Handal</a></h4>
              <p class="description">Mengembangkan Badan Usaha dan menciptakan petugas yang kompeten, handal, dan penuh tanggung jawab</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-bar-chart"></i></div>
              <h4 class="title"><a href="">Komitmen</a></h4>
              <p class="description">Membangun komunikasi yang baik dan berkomitmen penuh untuk memberikan pelayanan berkualitas dan kenyamanan kepada seluruh pelanggan.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Values Section ======= -->

<section id="values" class="values">
      <div class="container">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card" style="background-image: url(assets/img/konsultasi.jpg);">
              <div class="card-body">
                <h5 class="card-title"><a href="konsultasi.php">Konsultansi</a></h5>
                <p class="card-text">Bidang Pembangkitan Tenaga Listrik, Transmisi Tenaga Listrik, Distribusi Tenaga Listrik & Instalasi Pemanfaatan Tenaga Listrik, dengan kualifikasi Kecil, Menengah ataupun Besar.</p>
                <div class="read-more"><a href="konsultasi.php"><i class="bi bi-arrow-right"></i> Selengkapnya</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="100">
            <div class="card" style="background-image: url(assets/img/pemasangan.jpg);">
              <div class="card-body">
                <h5 class="card-title"><a href="pembangunan.php">Pembangunan & Pemasangan</a></h5>
                <p class="card-text">Bidang Pembangkitan Tenaga Listrik, Transmisi Tenaga Listrik, Distribusi Tenaga Listrik & Instalasi Pemanfaatan Tenaga Listrik, dengan kualifikasi Kecil, Menengah ataupun Besar.</p>
                <div class="read-more"><a href="pembangunan.php"><i class="bi bi-arrow-right"></i> Selengkapnya</a></div>
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card" style="background-image: url(assets/img/transmisi.jpg);">
              <div class="card-body">
                <h5 class="card-title"><a href="pemeriksaan.php">Pemeriksaan & Pengujian</a></h5>
                <p class="card-text">Bidang Pembangkitan Tenaga Listrik, Transmisi Tenaga Listrik, Distribusi Tenaga Listrik & Instalasi Pemanfaatan Tenaga Listrik, dengan kualifikasi Kecil, Menengah ataupun Besar.</p>
                <div class="read-more"><a href="pemeriksaan.php"><i class="bi bi-arrow-right"></i> Selengkapnya</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card" style="background-image: url(assets/img/distribusi.jpg);">
              <div class="card-body">
                <h5 class="card-title"><a href="pengoperasian.php">Pengoperasian</a></h5>
                <p class="card-text">Bidang Pembangkitan Tenaga Listrik, Transmisi Tenaga Listrik, Distribusi Tenaga Listrik & Instalasi Pemanfaatan Tenaga Listrik, dengan kualifikasi Kecil, Menengah ataupun Besar.</p>
                <div class="read-more"><a href="pengoperasian.php"><i class="bi bi-arrow-right"></i> Selengkapnya</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card" style="background-image: url(assets/img/pemeliharaan.jpg);">
              <div class="card-body">
                <h5 class="card-title"><a href="pemeliharaan.php">Pemeliharaan</a></h5>
                <p class="card-text">Bidang Pembangkitan Tenaga Listrik, Transmisi Tenaga Listrik, Distribusi Tenaga Listrik & Instalasi Pemanfaatan Tenaga Listrik, dengan kualifikasi Kecil, Menengah ataupun Besar.</p>
                <div class="read-more"><a href="pemeliharaan.php"><i class="bi bi-arrow-right"></i> Selengkapnya</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card" style="background-image: url(assets/img/ajukan.jpg);">
              <div class="card-body">
                <h5 class="card-title"><a href="permohonan.php">Ajukan Permohonan</a></h5>
                <p class="card-text">Tunggu apalagi? Permohonan SBU kian semakin mudah bersama PT LSBU Indonesia Gatrik (LIGAT)</p>
                <div class="read-more"><a href="permohonan.php"><i class="bi bi-send"></i> Ajukan Sekarang</a></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Values Section -->

    <!--<section id="values" class="values">
      <div class="container">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card" style="background-image: url(assets/img/pembangkit.jpg);">
              <div class="card-body">
                <h5 class="card-title"><a href="pembangkit.php">Pembangkit</a></h5>
                <p class="card-text">Pembangkit listrik adalah sekumpulan peralatan dan mesin yang digunakan untuk membangkitkan energi listrik melalui proses transformasi energi dari berbagai sumber energi. Sebagian besar jenis pembangkit listrik menghasilkan tegangan listrik arus bolak-balik 3-fasa.</p>
                <div class="read-more"><a href="pembangkit.php"><i class="bi bi-arrow-right"></i> Selengkapnya</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="100">
            <div class="card" style="background-image: url(assets/img/transmisi.jpg);">
              <div class="card-body">
                <h5 class="card-title"><a href="transmisi.php">Transmisi</a></h5>
                <p class="card-text">Transmisi tenaga listrik adalah proses penghantaran tenaga listrik secara besar-besaran dari pembangkit listrik, ke gardu listrik. Jalur yang terinterkoneksi untuk memfasilitasi penghantaran ini dikenal sebagai jaringan transmisi listrik.</p>
                <div class="read-more"><a href="transmisi.php"><i class="bi bi-arrow-right"></i> Selengkapnya</a></div>
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card" style="background-image: url(assets/img/distribusi.jpg);">
              <div class="card-body">
                <h5 class="card-title"><a href="distribusi.php">Distribusi/IPTL</a></h5>
                <p class="card-text">Distribusi tenaga listrik adalah tahap akhir dalam pengiriman tenaga listrik, hal ini merupakan proses membawa listrik dari sistem transmisi listrik menuju ke konsumen listrik. </p>
                <div class="read-more"><a href="distribusi.php"><i class="bi bi-arrow-right"></i> Selengkapnya</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card" style="background-image: url(assets/img/ajukan.jpg);">
              <div class="card-body">
                <h5 class="card-title"><a href="permohonan.php">Ajukan Permohonan SBU</a></h5>
                <p class="card-text">Tunggu apalagi? Permohonan SBU kian semakin mudah bersama Ligat ! </p>
                <div class="read-more"><a href="permohonan.php"><i class="bi bi-send"></i> Ajukan Sekarang</a></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section> 
    <!-- End Values Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Konsultansikan Bersama kami!</h3>
          <p> Tak perlu khawatir, konsultansikan kepada PT LSBU Indonesia Gatrik (LIGAT) Kami hadir untuk membantu Anda dalam mencapai tujuan bisnis Anda.</p>
          <a class="cta-btn" href="https://wa.me/6281369182800?text=Hallo%20LSBU%20INDONESIA%20GATRIK" target="_blank"><b>Whatsapp</b></a>
          <a class="cta-btn" href="mailto:daftar@lsbuligat.co.id" target="_blank"><b>Email</b></a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= 
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Galeri</h2>
          <p data-aos="fade-up">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->
        
      <link rel="stylesheet" href="style.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css" integrity="sha256-ev+XS9lVA6/6vEe/p9pncQjsHB6g9UtAZYFLNViXxAA=" crossorigin="anonymous" />

      
        <div class="container" id="tim">
          <!-- SLIDER STARTS HERE -->
          <ul id="autoWidth" class="cs-hidden">
            
            <li class="item-a">
              <div class="box">
                <img src="assets\img\team\1.jpg" class="model" alt="Antman" />
                <img src="" class="antman-logo" />
                <div class="details">
                  <p>
                  <h6><b>Syahru R Makki</b></h6>
                  </p>
                </div>
              </div>
            </li>

            <li class="item-a">
              <div class="box">
                <img src="assets\img\team\2.jpg" class="model" alt="Antman" />
                <img src="" class="antman-logo" />
                <div class="details">
                  <p>
                  <h6><b>Ella Panca Santika SH</b></h6>

                  </p>
                </div>
              </div>
            </li>

            <li class="item-a">
              <div class="box">
                <img src="assets\img\team\3.jpg" class="model" alt="Antman" />
                <img src="" class="antman-logo" />
                <div class="details">
                  <p>
                  <h6><b>Romi Sella Setiawan</b></h6>

                  </p>
                </div>
              </div>
            </li>

            <li class="item-a">
              <div class="box">
                <img src="assets\img\team\4.jpg" class="model" alt="Antman" />
                <img src="" class="antman-logo" />
                <div class="details">
                  <p>
                  <h6><b>Irgi Adhi Dwi Utama</b></h6>

                  </p>
                </div>
              </div>
            </li>

            <li class="item-a">
              <div class="box">
                <img src="assets\img\team\5.jpg" class="model" alt="Antman" />
                <img src="" class="antman-logo" />
                <div class="details">
                  <p>
                  <h6><b>Ir Ronaldo Pasaribu MBA</b></h6>

                  </p>
                </div>
              </div>
            </li>

            <li class="item-a">
              <div class="box">
                <img src="assets\img\team\6.jpg" class="model" alt="Antman" />
                <img src="" class="antman-logo" />
                <div class="details">
                  <p>
                  <h6><b>Muhamad Ali</b></h6>

                  </p>
                </div>
              </div>
            </li>

            <li class="item-a">
              <div class="box">
                <img src="assets\img\team\7.jpg" class="model" alt="Antman" />
                <img src="" class="antman-logo" />
                <div class="details">
                  <p>
                  <h6><b>Chaterine Dang Ayu Argageni</b></h6>

                  </p>
                </div>
              </div>
            </li>

            <li class="item-a">
              <div class="box">
                <img src="assets\img\team\8.jpg" class="model" alt="Antman" />
                <img src="" class="antman-logo" />
                <div class="details">
                  <p>
                  <h6><b>Sjukrianto Yulia SE</b></h6>

                  </p>
                </div>
              </div>
            </li>

            <li class="item-a">
              <div class="box">
                <img src="assets\img\team\9.jpg" class="model" alt="Antman" />
                <img src="" class="antman-logo" />
                <div class="details">
                  <p>
                  <h6><b>Sandra Leo Patra</b></h6>
  
                  </p>
                </div>
              </div>
            </li>

            <!--<li class="item-a">
              <div class="box">
                <h3>Nama</h3>
                <img src="assets\img\team\10.jpg" class="model" alt="Antman" />
                <img src="" class="antman-logo" />
                <div class="details">
                  <p>
                    <h6><b>Lutfi Awaludin</b></h6>
 
                  </p>
                </div>
              </div>
            </li>-->

            <li class="item-a">
              <div class="box">
                <img src="assets\img\team\11.jpg" class="model" alt="Antman" />
                <img src="" class="antman-logo" />
                <div class="details">
                  <p>
                  <h6><b>M Agung Indriawan A.</b></h6>

                  </p>
                </div>
              </div>
            </li>

            <li class="item-a">
              <div class="box">
                <img src="assets\img\team\12.jpg" class="model" alt="Antman" />
                <img src="" class="antman-logo" />
                <div class="details">
                  <p>
                  <h6><b>Hendi</b></h6>

                  </p>
                </div>
              </div>
            </li>

            <li class="item-a">
              <div class="box">
                <img src="assets\img\team\13.jpg" class="model" alt="Antman" />
                <img src="" class="antman-logo" />
                <div class="details">
                 <p>
                  <h6><b>Budi Hartono</b></h6>

                  </p>
                </div>
              </div>
            </li>

            <li class="item-a">
              <div class="box">
                <img src="assets\img\team\14.jpg" class="model" alt="Antman" />
                <img src="" class="antman-logo" />
                <div class="details">
                  <p>
                  <h6><b>Riski Yanaro</b></h6>

                  </p>
                </div>
              </div>
            </li>

            <li class="item-a">
              <div class="box">
                <img src="assets\img\team\15.jpg" class="model" alt="Antman" />
                <img src="" class="antman-logo" />
                <div class="details">
                  <p>
                  <h6><b>Cholidi</b></h6>

                  </p>
                </div>
              </div>
            </li>

            <li class="item-a">
              <div class="box">
                <img src="assets\img\team\16.jpg" class="model" alt="Antman" />
                <img src="" class="antman-logo" />
                <div class="details">
                  <p>
                  <h6><b>Fachtian Ismatul Hakim</b></h6>

                  </p>
                </div>
              </div>
            </li>

            <li class="item-a">
              <div class="box">
                <img src="assets\img\team\17.jpg" class="model" alt="Antman" />
                <img src="" class="antman-logo" />
                <div class="details">
                  <p>
                  <h6><b>Ismu Subroto</b></h6>

                  </p>
                </div>
              </div>
            </li>

            <li class="item-a">
              <div class="box">
                <img src="assets\img\team\18.jpg" class="model" alt="Antman" />
                <img src="" class="antman-logo" />
                <div class="details">
                 <p>
                  <h6><b>Raihan Ravly Akbar</b></h6>

                  </p>
                </div>
              </div>
            </li>

            <li class="item-a">
              <div class="box">
                <img src="assets\img\team\19.jpg" class="model" alt="Antman" />
                <img src="" class="antman-logo" />
                <div class="details">
                  <p>
                  <h6><b>Triyani</b></h6>

                  </p>
                </div>
              </div>
            </li>

          </ul>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js" integrity="sha256-nHmCK+HOPMPezzS3ky9VKznMWH4sW4keT8HrMaDNbYo=" crossorigin="anonymous"></script>
        <script src="index.js"></script>


    <!-- ======= Team Section ======= -->
    <!--<section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Kenali Tim Profesional Kami</h2>
          <p data-aos="fade-up">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>-->
    <!-- End Team Section -->

    <!-- ======= Pricing Section ======= 
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Temukan Beragam Layanan Ligat! <br> Konsultasikan tujuan Anda dengan pelayanan terbaik Kami.</h2>
          
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6" data-aos="fade-up">
            <div class="box">
              <h3>Pembangunan & Pemasangan</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="100">
            <div class="box featured">
              <h3>Pemeriksaan & Pengujian</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <h3>Pengoperasian</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <span class="advanced">Profesional</span>
              <h3>Pemeliharaan</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Tata Cara Permohonan SBU</h2>
          <p data-aos="fade-up">Tak perlu khawatir, konsultansikan kepada PT LSBU Indonesia Gatrik (LIGAT) <br>Kami hadir untuk membantu Anda dalam mencapai tujuan bisnis Anda.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-check-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-1" class="collapsed"><h5>Daftar</h5> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Membuat akun perusahaan menggunakan alamat email yang valid.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-check-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed"><h5>Data Perusahaan</h5><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Melengkapi data identitas Badan Usaha
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-check-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed"><h5>Permohonan ke LSBU</h5> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Memilih Bidang Subbidang
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-check-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed"><h5>Persyaratan</h5><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Melengkapi data Administratif dan Teknis sesuai dengan Bidang Subbidang yang dipilih
                </p>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-check-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed"><h5>Verifikasi SBU</h5></i><i class="bx bx-chevron-up icon-close"></i></a>
             
              <li data-aos="fade-up" data-aos-delay="600">
              <i class="bx bx-check-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-6" class="collapsed"><h5>Registrasi</h5><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Proses Verifikasi dan Persetujuan
                </p>
              </div>
            </li>
            </li>
          </ul>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container position-relative" data-aos="fade-up">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testi.jpg" class="testimonial-img" alt="">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Selaras dengan kemajuan teknologi yang mendukung perkembangan berbagai sektor, termasuk dibidang ketenagalistrikan, PT LSBU Indonesia Gatrik (Ligat) hadir secara Profesional, Mandiri, Berkomitmen dan Gesit untuk mewujudkan tujuan bersama yang berguna dan bermanfaat bagi kemajuan Indonesia.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testi.jpg" class="testimonial-img" alt="">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  PT LSBU Indonesia Gatrik merupakan salah satu Lembaga Sertifikasi Badan Usaha Jasa Penunjang Tenaga Listrik yang telah terakreditasi oleh Direktorat Jenderal Ketenagalistrikan (DJK) Kementerian Energi Sumber Daya Mineral (ESDM), kami terus berkembang dan menggali potensi guna meningkatkan pelayanan dan kepercayaan, serta secara beriringan terus mengikuti perkembangan terutama di bidang jasa penunjang tenaga listrik untuk memberikan hasil yang terbaik dan kepuasan kepada pelanggan.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testi.jpg" class="testimonial-img" alt="">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Guna meningkatkan kinerja yang berkelanjutan, PT LSBU Indonesia Gatrik menerapkan Sistem Manajemen Mutu sebagai bentuk komitmen untuk memberikan kualitas dan kenyamanan.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testi.jpg" class="testimonial-img" alt="">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Bersama PT LSBU Indonesia Gatrik mari kita wujudkan Badan Usaha Kelistrikan yang profesional, sehat dan bertanggungjawab serta ikut berperan menyukseskan program-program pemerintah khususnya di bidang Ketenagalistrikan guna mencapai tujuan bersama yaitu listrik untuk kehidupan yang lebih baik.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

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

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.1070055187083!2d106.80553231477131!3d-6.633630795203149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69cf50c8f391c1%3A0x35f59afaf837879a!2sLantai%201%2C%20Jl.%20RE.%20Soemantadiredja%20No.23%2C%20RT.04%2FRW.07%2C%20Pamoyanan%2C%20Kec.%20Bogor%20Sel.%2C%20Kota%20Bogor%2C%20Jawa%20Barat%2016136!5e0!3m2!1sid!2sid!4v1644984676381!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <!--<form action="forms/contact.php" method="post" role="form" class="php-email-form">-->
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" >
              <div class="form-group mt-3">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" name="telp" class="form-control" id="telp" placeholder="No. Telp/Handphone" required>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Masukan, Kritik & Saran" required></textarea>
              </div>
              <div class="my-3">
                 <?php 
                  if (!empty($message)) {
                  ?>
                  <div class="sent-message"><?php echo $message ?></div>
                  <?php
                  }
                ?>
              </div >
              <div class="text-center">
                <button class="button" type="submit" name="submit"><strong>Kirim Pesan</strong></button>
              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <!--<section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <h2 data-aos="fade-up">Hubungi Kami</h2>
          <p data-aos="fade-up">Tim Kami siap melayani pertanyaan dan kebutuhan Anda 24/7. <br> Ajukan pertanyaan dan kami akan menghubungi Anda dengan pelayanan terbaik dari Ligat.</p>
        </div>

        <div class="row justify-content-center">

          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Lokasi</h3>
              <p>Jl. RE.Soemantadiredja 
              No.23 D17 (Lantai 1)  
              Kel. Pamoyanan, <br>Kec. Bogor Selatan 
              Kota Bogor Jawa Barat 16136
              <br>
              </p>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>office@lsbuligat.co.id <br><br><br><br><br><br></p>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box">
              <i class="bx bx-phone-call"></i>
              <h3>Hotline</h3>
              <p>(0251) 7571947 <br> 0813-6918-2800 <br> 0838-1800-4900 <br><br><br><br></p>
            </div>
          </div>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
          <div class="col-xl-9 col-lg-12 mt-4">
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" >
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap" required>
                </div>
              </div>
            </br>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="telp" class="form-control" id="telp" placeholder="No. Telp/Handphone" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Pesan" required></textarea>
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

      </div>
    </section>-->
    <!-- End Contact Section -->
    
<?php include 'footer.php';?>

  </main><!-- End #main -->

 <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>


</html>

<style type="text/css">
//card slider


.container {
  width: 100%;
  height: 100vh;
  background: #f74040;
  display: flex;
  justify-content: center;
  align-items: center;
}

.box {
  padding: 20px;
  width: 300px;
  height: 400px;
  border-radius: 20px;
  background: rgba(246, 188,0, 0.1);
  box-shadow: 2px 10px 12px rgba(0, 0, 0, 0.5);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-between;
  margin: 20px 10px;
}

.box:hover {
  background: grey;
  transform-style: preserve-3d;
  transform: scale(1.02);
  transition: all ease 0.3s;
}

.model {
  height: 350px;
  max-height: 100%;
  max-width: 100%;
}

.details {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 300px;
}

.details p {
  font-weight: bold;
  color: grey;
  text-align: center;
  margin-top: 20px;
}

.antman-logo {
  width: 200px;
  margin-top: 10px;
}

.box:hover h1 {
  color: red;
  transition: all ease 0.5ms;
}

@media (max-width: 720px) {
  .box {
    width: 94%;
    height: 500px;
  }

  .model {
    height: 250px;
  }

  .details p {
    font-size: 16px;
  }
}
</style>

<script type="text/javascript">
  $(document).ready(function () {
  $("#autoWidth").lightSlider({
    autoWidth: true,
    loop: true,
    onSliderLoad: function () {
      $("#autoWidth").removeClass("cS-hidden");
    }
  });
});

</script>