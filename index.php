<?php
session_start();
$mydata = simplexml_load_file("files/akun.xml");

     for ($i=0; $i < count($mydata);++$i)
     $loginname = $mydata->login_details[$i]->login_name;

if($_SESSION['name']=="$loginname")
{
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="assets/bs/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="assets/css/app.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="robots" content="index, follow"/>
  <meta name="theme-color" content="#207b5f"/>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&amp;family=Poppins:wght@400;500;600;700&amp;family=Quicksand:wght@400;500;600;700&amp;family=Raleway:wght@400;500;600;700&amp;family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
  <meta name="viewport" content="width=device-width"/>
  <meta charSet="utf-8"/>
  <title class="jsx-4292405320">STKIP Babunnajah.</title>
  <meta name="description" content="Saling peduli adalah platform kemanuasian" class="jsx-4292405320"/>
  <meta name="next-head-count" content="4"/>
  <link rel="preload" href="_next/static/t6HCfl27eub3Iw79Afb-K/pages/_app.js" as="script"/>
  <link rel="preload" href="_next/static/t6HCfl27eub3Iw79Afb-K/pages/index.js" as="script"/>
  <link rel="preload" href="_next/static/runtime/webpack-c212667a5f965e81e004.js" as="script"/>
  <link rel="preload" href="_next/static/chunks/framework.c8d289f8b96717e32d7a.js" as="script"/>
  <link rel="preload" href="_next/static/chunks/c1151ec28dc6b7b7ebb28a5f48cb154e6676d52c.36a881b4253e934d1e53.js" as="script"/>
  <link rel="preload" href="_next/static/chunks/69718b89c3918db75ca84793071f8abd66c5020a.9844618c10a234465b99.js" as="script"/>
  <link rel="preload" href="_next/static/runtime/main-5ff7416137443ff9356a.js" as="script"/>
  <link rel="preload" href="_next/static/chunks/2f34da18ff8af191a973eee015d0c0fd0d13f2e7.e3dd109e5fa97e0241b0.js" as="script"/>
  <link rel="preload" href="_next/static/chunks/145508d0b99db2ffadc344c42a3a93bd22bd6946.cc65606b0c5721e31623.js" as="script"/>
  <style id="__jsx-4292405320">.b.jsx-4292405320{border:1px solid tomato;}</style></head><body><div id="__next">
  <nav class="jsx-4292405320 navbar navbar-expand-lg my-navbar">
    <div class="jsx-4292405320 container navbar-container">
    <a href="" class="jsx-4292405320 navbar-brand">Cari NIM</a>
      <form action="" class="jsx-4292405320 form-inline form-top">
    <div class="jsx-4292405320 input-group w-100 flex-nowrap">
      <input type="text" placeholder="Cari NIM Kamu" class="jsx-4292405320 form-control top-search"/>
      <div class="jsx-4292405320 input-group-append">
        <span class="jsx-4292405320 input-group-text search-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 512 512" class="jsx-4292405320">
          <path fill="#c5ffff" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z" class="jsx-4292405320">
          </path>
		  </svg>
		  </span>
      </div>
        </div>
      </form>
    </div>
  </nav>
  <section class="jsx-4292405320 app-container m-auto">
    <div class="jsx-4292405320 content pt-4">
      <h5 class="jsx-4292405320 content-label">Ingin jadi mahasiswa ?</h5>
      <div class="jsx-4292405320 top-button-container">
        <a href="" class="jsx-4292405320 btn btn-block btn-lg active">Daftar Sekarang</a>
        <a href="https://api.whatsapp.com/send?phone=6282124405807&text=Saya%20tertarik%20untuk%20mendaftarkan%20diri%20ke%20STKIP%20Babunnajah,%20bisakah%20bantu%20saya%20?%20." class="jsx-4292405320 btn btn-outline-success btn-block btn-lg">Tanya Tentang STKIP Babunnajah</a>
      </div>
    </div>
  </section>
  <section class="jsx-4292405320 app-container m-auto">
    <div class="jsx-4292405320 content mt-2">
      <div id="carouselExampleIndicators" data-ride="carousel" class="jsx-4292405320 carousel slide">
        <ol class="jsx-4292405320 carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="jsx-4292405320 active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1" class="jsx-4292405320"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2" class="jsx-4292405320"></li>
        </ol>
        <div class="jsx-4292405320 carousel-inner">
          <div class="jsx-4292405320 carousel-item active"><img src="assets/imgs/2.jpg" alt="..." class="jsx-4292405320 d-block w-100"/></div>
          <div class="jsx-4292405320 carousel-item"><img src="assets/imgs/2.jpg" alt="..." class="jsx-4292405320 d-block w-100"/></div>
          <div class="jsx-4292405320 carousel-item"><img src="assets/imgs/2.jpg" alt="..." class="jsx-4292405320 d-block w-100"/></div>
        </div>
        <a href="#carouselExampleIndicators" role="button" data-slide="prev" class="jsx-4292405320 carousel-control-prev">
          <span aria-hidden="true" class="jsx-4292405320 carousel-control-prev-icon"></span>
          <span class="jsx-4292405320 sr-only">Previous</span>
        </a>
        <a href="#carouselExampleIndicators" role="button" data-slide="next" class="jsx-4292405320 carousel-control-next">
          <span aria-hidden="true" class="jsx-4292405320 carousel-control-next-icon"></span><span class="jsx-4292405320 sr-only">Next</span>
        </a>
      </div>
      <div class="jsx-4292405320 feature pt-4">
        <div class="jsx-4292405320 row">
          <div class="jsx-4292405320 col-3 d-flex flex-column align-items-center">
            <img src="assets/icons/icon-donasi.png" alt="News" class="jsx-4292405320 feature-icon"/>
            <span class="jsx-4292405320 feature-text">News</span>
          </div>
          <div class="jsx-4292405320 col-3 d-flex flex-column align-items-center">
            <img src="assets/icons/icon-zakat.png" alt="E-KTM" class="jsx-4292405320 feature-icon"/>
            <span class="jsx-4292405320 feature-text">E-KTM</span></div><div class="jsx-4292405320 col-3 d-flex flex-column align-items-center">
          <img src="assets/icons/icon-kbplus.png" alt="Perkuliahan" class="jsx-4292405320 feature-icon"/>
          <span class="jsx-4292405320 feature-text">Perkuliahan</span>
          </div>
          <div class="jsx-4292405320 col-3 d-flex flex-column align-items-center">
            <img src="assets/icons/icon-donasi-rutin.png" alt="Data Mahasiswa" class="jsx-4292405320 feature-icon"/>
            <span class="jsx-4292405320 feature-text">Data Mahasiswa</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="jsx-4292405320 app-container m-auto">
    <div class="jsx-4292405320 content mt-2">
      <img src="assets/imgs/pasca-ramadhan-2.png" alt="" class="jsx-4292405320 w-100"/>
    </div>
  </section>
  
  <!--
  <section class="jsx-4292405320 app-container m-auto">
    <div class="jsx-4292405320 content mt-2">
      <h5 class="jsx-4292405320 content-label pt-2">Galeri Kegiatan</h5>
      <div class="jsx-4292405320 row pt-2 content-scroll-x">
		<img src="https://i.imgur.com/pLuplnt.jpg">
	  </div>
    </div>
  </section>
  <section class="jsx-4292405320 app-container m-auto">
    <div class="jsx-4292405320 content mt-2">
      <h5 class="jsx-4292405320 content-label pt-2">Pilihan Saling Peduli</h5>
      <div class="jsx-4292405320 row pt-2 content-scroll-x small-box"></div>
    </div>
  </section>
  <section class="jsx-4292405320 app-container m-auto">
    <div class="jsx-4292405320 content mt-2">
      <h5 class="jsx-4292405320 content-label pt-2">Pilih Kategori Pavoritmu</h5>
      <div class="jsx-4292405320 feature category pt-4">
        <div class="jsx-4292405320 row">
          <div class="jsx-4292405320 col-3 d-flex flex-column align-items-center">
            <a href="" class="jsx-4292405320 d-flex flex-column align-items-center">
              <img src="assets/icons/icon-bencana.svg" alt="Donasi" class="jsx-4292405320 feature-icon"/>
              <span class="jsx-4292405320 feature-text">Bencana Alam</span>
            </a>
          </div>
          <div class="jsx-4292405320 col-3 d-flex flex-column align-items-center">
            <img src="assets/icons/icon-balita.svg" alt="Donasi" class="jsx-4292405320 feature-icon"/>
            <span class="jsx-4292405320 feature-text">Balita &amp; Anak Sakit</span>
          </div>
          <div class="jsx-4292405320 col-3 d-flex flex-column align-items-center">
            <img src="assets/icons/icon-medis.svg" alt="Donasi" class="jsx-4292405320 feature-icon"/>
            <span class="jsx-4292405320 feature-text">Bantuan Medis</span>
          </div>
          <div class="jsx-4292405320 col-3 d-flex flex-column align-items-center">
            <img src="assets/icons/icon-list.svg" alt="Donasi" class="jsx-4292405320 feature-icon"/>
            <span class="jsx-4292405320 feature-text">Lainnya</span>
          </div>
        </div>
      </div>
      <div class="jsx-4292405320 pt-5"></div>
      <div class="jsx-4292405320 pt-5 text-center">
        <button class="jsx-4292405320 btn btn-success">Lihat semua</button>
      </div>
    </div>
  </section>
  -->
  <section class="jsx-4292405320 app-container m-auto pb-5">
    <div class="jsx-4292405320 content mt-2">
      <img src="assets/imgs/6.png" alt="" class="jsx-4292405320 w-100"/>
    </div>
	
	<?php
	echo "<a href='logout.php'>Logout</a>";
	?>
  </section>
  
  <section class="jsx-4292405320 bottom-navigator-section">
    <div class="jsx-4292405320 bottom-navigator">
      <ul class="jsx-4292405320 bottom-menu">
        <li class="jsx-4292405320">
          <a href="" class="jsx-4292405320 d-flex flex-column active">
          <img src="assets/icons/home_navbar_ac.png" width="30px" alt="" class="jsx-4292405320"/>
          <span class="jsx-4292405320 bottom-title active">Home</span>
          </a>
        </li>
        <li class="jsx-4292405320">
          <a href="about.php" class="jsx-4292405320 d-flex flex-column">
            <img src="assets/icons/donasi_navbar.svg" alt="" class="jsx-4292405320"/>
            <span class="jsx-4292405320 bottom-title">About</span>
          </a>
        </li>
        <li class="jsx-4292405320">
          <a href="https://goo.gl/maps/L4WNLQoZL5QtjTUd9" class="jsx-4292405320 d-flex flex-column">
            <img src="assets/icons/plus_navbar.svg" alt="" class="jsx-4292405320"/>
            <span class="jsx-4292405320 bottom-title">STKIP</span>
          </a>
        </li>
        <li class="jsx-4292405320">
          <a href="https://api.whatsapp.com/send/?phone=6282124405807&text&app_absent=0" class="jsx-4292405320 d-flex flex-column">
            <img src="assets/icons/inbox_navbar.svg" alt="" class="jsx-4292405320"/>
            <span class="jsx-4292405320 bottom-title">Inbox</span>
          </a>
        </li>
        <li class="jsx-4292405320">
          <a class="jsx-4292405320 d-flex flex-column" href="index.php">
            <img src="assets/icons/account_navbar.svg" alt="" class="jsx-4292405320"/>
            <span class="jsx-4292405320 bottom-title">
			<?php
			echo $_SESSION['name'];

			?>
			</span>
          </a>
        </li>
      </ul>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous" class="jsx-4292405320"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous" class="jsx-4292405320"></script>
  </div>
  <script id="__NEXT_DATA__" type="application/json">{"props":{"pageProps":{}},"page":"/","query":{},"buildId":"t6HCfl27eub3Iw79Afb-K","runtimeConfig":{},"nextExport":true,"autoExport":true,"isFallback":false}</script>
  <script nomodule="" src="_next/static/runtime/polyfills-db3eeaf8fbc6db3a50d4.js"></script>
  <script async="" data-next-page="/_app" src="_next/static/t6HCfl27eub3Iw79Afb-K/pages/_app.js"></script>
  <script async="" data-next-page="/" src="_next/static/t6HCfl27eub3Iw79Afb-K/pages/index.js"></script>
  <script src="_next/static/runtime/webpack-c212667a5f965e81e004.js" async=""></script>
  <script src="_next/static/chunks/framework.c8d289f8b96717e32d7a.js" async=""></script>
  <script src="_next/static/chunks/c1151ec28dc6b7b7ebb28a5f48cb154e6676d52c.36a881b4253e934d1e53.js" async=""></script>
  <script src="_next/static/chunks/69718b89c3918db75ca84793071f8abd66c5020a.9844618c10a234465b99.js" async=""></script>
  <script src="_next/static/runtime/main-5ff7416137443ff9356a.js" async=""></script>
  <script src="_next/static/chunks/2f34da18ff8af191a973eee015d0c0fd0d13f2e7.e3dd109e5fa97e0241b0.js" async=""></script>
 <!-- <script src="_next/static/chunks/145508d0b99db2ffadc344c42a3a93bd22bd6946.cc65606b0c5721e31623.js" async=""></script> -->
  <script src="_next/static/t6HCfl27eub3Iw79Afb-K/_buildManifest.js" async=""></script>
  <script src="_next/static/t6HCfl27eub3Iw79Afb-K/_ssgManifest.js" async=""></script>
  </body>
</html>
<?php

}
else
{
header("Location:login.php");
}
echo "&nbsp;&nbsp;&nbsp;";

echo "</br></br></br>";

?>