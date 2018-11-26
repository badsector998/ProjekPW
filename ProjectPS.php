<!DOCTYPE html>
<html>


<head>
	<title>Rental PS</title>
	<link rel="stylesheet" type="text/css" href="btstp/css/bootstrap.min.css">
	<script src="btstp/js/bootstrap.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

	

<body>
	
	<div class="container">
	  <div class="row">
	    <div class="span12">
	      <div class="head">
	        <div class="row-fluid">
	            <div class="span12">
	                <div class="span6">
	                    <h1 class="muted">RENTAL PS YOGYAKARTA</h1>
	                </div>

	                <div class="span4 offset2" style="margin-top:15px;">
	                    <a href="login_admin.php"><button class="btn pull-right" type="button">Login Admin</button></a>
	                </div>
	            </div>
	        </div>

	        <div class="navbar">
	            <div class="navbar-inner">
	                <div class="container">
	                    <ul class="nav">
	                        <li>
	                            <a href="cek_pesanan.php">Cek Pesanan</a>
	                        </li>

	                        <li>
	                            <a href="login_admin.php">Member Area</a>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>


	<div class="container pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center border-top">
      <h1 class="display-4">Rental PS untuk anda</h1>
      <p class="lead">Silahkan Pesan PS yang sudah tersedia, sekali menyewa sudah termasuk aksesori stik PS 2 buah dan satu mesin console.</p>
    </div>

    <div class="container border-top">
	 <div class="card-deck mb-3 text-center">
	        <div class="card mb-4 box-shadow">
	          <div class="card-header">
	            <h4 class="my-0 font-weight-normal">PS 2</h4>
	          </div>
	          <div class="card-body">
	            <img class="reponsive" src="gambar/ps2.png">
	            <a href="pesanan.php?order=PS2"><button type="button" class="btn btn-lg btn-block btn-outline-primary" style="margin-top: 29px;">Sewa</button></a>
	          </div>
	        </div>
	        <div class="card mb-4 box-shadow">
	          <div class="card-header">
	            <h4 class="my-0 font-weight-normal">PS 3</h4>
	          </div>
	          <div class="card-body">
	             <img class="reponsive" src="gambar/ps3.jpg">
	            <a href="pesanan.php?order=PS3"><button type="button" class="btn btn-lg btn-block btn-outline-primary" style="margin-top: 29px;">Sewa</button></a>
	          </div>
	        </div>
	        <div class="card mb-4 box-shadow">
	          <div class="card-header">
	            <h4 class="my-0 font-weight-normal">PS 4</h4>
	          </div>
	          <div class="card-body">
	            <img class="responsive" src="gambar/ps4.jpg">
	            <a href="pesanan.php?order=PS4"><button type="button" class="btn btn-lg btn-block btn-outline-primary">Sewa</button></a>
	          </div>
	        </div>
	      </div>

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">Aprilito & Bima © 2017-2018</small>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Team</a></li>
              <li><a class="text-muted" href="#">Locations</a></li>
              <li><a class="text-muted" href="#">Privacy</a></li>
              <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
</body>
</html>