<!doctype html>
<html lang="tr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="Css/index.css">
  <link rel="stylesheet" href="Fontawesome/fontawesome/all.css">
  <title>Ana Sayfa</title>
</head>

<body>
  <header>
    <!-- Navbar start -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark ">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
            <li class="nav-item ">
              <a class="nav-link " aria-current="page" href="ozgecmis.html">Özgeçmiş</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  active" href="ilgi-alanlari.html">İlgi Alanları</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sehrim.html">Şehrim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="iletisim.html">İletişim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.html">Giriş Yap</a>
           </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar end -->
  </header>
  <div class="admin">
    <div class="row">
      <div class="col adminIletisimTablo">
    <?php if($_POST["name"]=="G201210051@sakarya.edu.tr" && $_POST["password"]=="G201210051")
			{
        echo"Hoşgeldin ".$_POST["name"];
        echo"<br>Girişin Onaylandı.";
      }
      else{
        echo "Kullanıcı epostası yada şifre hatalı";
        header("refresh:2; login.html");
      }    
        ?>
        </div>
      </div>
    </div>
  
  <!-- back to top -->
  <button
        type="button"
        class="btn btn-floating btn-lg"
        id="btn-back-to-top"
        >
  <i class="fas fa-arrow-up"></i>
</button>
<!-- footer -->
<footer id="footer-color" class="text white pt-5 pb-4 fw-bold">
<div class="container text-center text-md-left">
  <div class="row text-center text-md-left">
    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
      <h5 class="text-uppercase mb-4 font-weight-bold " style="color:#CAF0F8">Company Name</h5>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut officia ipsa eum voluptates culpa sed quas corrupti numquam excepturi maiores voluptas dignissimos magni blanditiis illum, libero nemo expedita minima facilis.</p>

    </div>
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
      <h5 class="text-uppercase mb-4 font-weight-bold " style="color:#CAF0F8">Products</h5>
      <p>
        <a href="#" class="text-white" style="text-decoration:none">TheProvides</a>
      </p>
      <p>
        <a href="#" class="text-white" style="text-decoration:none">TheProvides</a>
      </p>
      <p>
        <a href="#" class="text-white" style="text-decoration:none">TheProvides</a>
      </p>
      <p>
        <a href="#" class="text-white" style="text-decoration:none">TheProvides</a>
      </p>
    </div>
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
      <h5 class="text-uppercase mb-4 font-weight-bold " style="color:#CAF0F8">Useful Links</h5>
      <p>
        <a href="#" class="text-white" style="text-decoration:none">TheProvides</a>
      </p>
      <p>
        <a href="#" class="text-white" style="text-decoration:none">TheProvides</a>
      </p>
      <p>
        <a href="#" class="text-white" style="text-decoration:none">TheProvides</a>
      </p>
      <p>
        <a href="#" class="text-white" style="text-decoration:none">TheProvides</a>
      </p>
    </div>
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3 text-white">
      <h5 class="text-uppercase mb-4 font-weight-bold " style="color:#CAF0F8"> Contact</h5>
      <p><i class="fas fa-home mr-3"></i> Sakarya / Serdivan</p>
      <p><i class="fas fa-envelope mr-3"></i> i.meteucar@gmail.com</p>
      <p><i class="fas fa-phone mr-3"></i> 05465830856</p>
      <p><i class="fas fa-home mr-3"></i> Sakarya / Serdivan</p>
    </div>
  </div>
  <hr class="mb-4">
  <div class="row align-items-center">
    <div class="col-md-7 col-lg-8">
      <p>Copyright © 2022. All Rights Reserved by:
      <a href="" style="text-decoration: none;">
      <strong style="color:#CAF0F8">Mete Uçar</strong></a>
    </p>
    </div>
    <div class="col-md-5 col-lg-4">
      <div class="text-center text-md-right">
        <ul class="list-unstyled list-inline">
          <li class="list-inline-item">
            <a href="#" class="btn-floating btn-lg" style="font: size 30px; color:#BF38AC"> <i class="fab fa-instagram"></i></a>
          </li>
          <li class="list-inline-item">
            <a href="#" class="btn-floating btn-lg " style="font: size 30px; color: #55ACEE;"> <i class="fab fa-twitter"></i></a>
          </li>
          <li class="list-inline-item">
            <a href="#" class="btn-floating btn-lg text-black" style="font: size 30px;"> <i class="fab fa-github"></i></a>
          </li>
          <li class="list-inline-item">
            <a href="#" class="btn-floating btn-lg text-black" style="font: size 30px;"> <i class="fab fa-discord"></i></a>
          </li>
          <li class="list-inline-item">
            <a href="#" class="btn-floating btn-lg " style="font: size 30px; color: #0082CA;"> <i class="fab fa-linkedin"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
<script src="Js/index.js"></script>
</body>

</html>